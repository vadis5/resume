<?php

namespace Tests\Functional\API\V1\Mobile;


use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use App\Traits\TestResponseJsonTrait;

class MagicLinksControllerMobileTest extends TestCase
{
    use DatabaseMigrations;
    use TestResponseJsonTrait;


    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->artisan('db:seed --class=TestsMagicLinkSeeder');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Check seeder.
     *
     * @return void
     */
    public function testSeeders(): void
    {
        $users = User::get();

        $this->assertEquals(7, $users->count());

        $user = DB::table('users')->first();

        $this->assertEquals('Developer', $user->name);
        $this->assertEquals('developer@admin.com', $user->email);
        $this->assertEquals('active', $user->status);
        $this->assertEquals('admin', $user->type);
    }

    public function testGetMagicLink()
    {
        $user = User::whereEmail('tenant-user-2@admin.com')->first();

        // Request
        $response = $this->get('api/mobile/v1/magicLink?email=' . $user->email);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        'magicLink',
                        'magicLinkTTL'
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(2, $data);
        $this->assertTrue(is_string($data['magicLink']), 'Magic Link is not a string');
        $this->assertTrue(is_integer($data['magicLinkTTL']), 'Magic Link TTL is not an integer');
        $this->assertEquals('Got Magic Link.', $message);

        // Get token from magic link
        $index = strpos($data['magicLink'], Config::get('magiclink.deep_link')) + strlen(Config::get('magiclink.deep_link'));
        $token = substr($data['magicLink'], $index);

        // Request
        $responseMe = $this->get('api/v1/users/me?token=' . $token);
        // Check if token is correct
        $responseMe->assertStatus(200);

    }

    /**
     * Get Magic link with wrong email
     *
     * @return void
     */
    public function testGetMagicLinkWithWrongEmail(): void
    {
        // Request
        $response = $this->get('api/mobile/v1/magicLink?email=' . 'test@user.com');

        // Check response status
        $response->assertStatus(404);


        // Check response structure
        $response->assertJsonStructure(
            [
                'message',
                'code',
                'success'
            ]
        );

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(404, $code);
        $this->assertEquals('Not found.', $message);
    }
}
