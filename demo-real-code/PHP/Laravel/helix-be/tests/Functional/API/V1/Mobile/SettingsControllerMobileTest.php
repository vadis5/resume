<?php


namespace API\V1\Mobile;


use App\Models\Setting;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SettingsControllerMobileTest extends TestCase
{
    use DatabaseMigrations;

    private const TERMS_VALUE = '<h1>Terms & Conditions</h1><br><h2>First header</h2><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus nunc a magna ullamcorper ullamcorper. Aenean quis sollicitudin magna, vitae dapibus magna. Integer erat risus, dignissim et est vel, tristique vulputate dolor. Pellentesque condimentum lorem in ornare efficitur. </p><h2>Second Header</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus nunc a magna ullamcorper ullamcorper. Aenean quis sollicitudin magna, vitae dapibus magna. Integer erat risus, dignissim et est vel, tristique vulputate dolor. Pellentesque condimentum lorem in ornare efficitur. </p>';
    private const TABLE_NAME_SETTINGS = 'settings';
    private const ROLE_DEVELOPER = ['developer@admin.com', 'Developer'];
    private const ROLE_HAPPENCE_SUPER_ADMIN = ['happence-super-admin@admin.com', 'Happence Super Admin'];
    private const ROLE_HAPPENCE_ADMIN = ['happence-admin@admin.com', 'Happence Admin'];
    private const ROLE_HAPPENCE_EDITOR = ['happence-editor@admin.com', 'Happence Editor'];
    private const ROLE_TENANT_USER_1 = ['tenant-user-1@admin.com', 'Tenant User 1'];
    private const ROLE_TENANT_USER_2 = ['tenant-user-2@admin.com', 'Tenant User 2'];
    private const ROLE_TENANT_SUPER_ADMIN = ['tenant-super-admin@admin.com', 'Tenant Super Admin'];

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->artisan('db:seed --class=TestsSettingSeeder');
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
        $settings = Setting::all();

        $this->assertEquals(2, $settings->count());

        $setting = Setting::where('id', 1)->first();

        $this->assertEquals('terms', $setting->key);
        $this->assertEquals(self::TERMS_VALUE, $setting->value);
    }

    /**
     * Check Show a Setting By Key via authorized user
     *
     * @return void
     */
    public function testShowByKey()
    {
        // Login via tenant-user
        $token = $this->loginByEmail(self::ROLE_TENANT_USER_1[0], self::ROLE_TENANT_USER_1[1]);

        // Request
        $response = $this->get('api/mobile/v1/settings/key/terms?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        'id',
                        'key',
                        'value',
                        'created_at',
                        'updated_at'
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
        $this->assertEquals('Got Setting By Key.', $message);
        $this->assertCount(5, $data);
        $this->assertEquals(1, $data['id']);
        $this->assertEquals('terms', $data['key']);
        $this->assertEquals(self::TERMS_VALUE, $data['value']);
    }

    /**
     * Check Show a Setting By Key with wrong id
     *
     * @return void
     */
    public function testShowByKeyWithWrongKey()
    {
        // Login via tenant-user
        $token = $this->loginByEmail(self::ROLE_TENANT_USER_1[0], self::ROLE_TENANT_USER_1[1]);

        // Request
        $response = $this->get('api/mobile/v1/settings/key/test?token=' . $token);

        // Check response status
        $response->assertStatus(404);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(404, $code);
        $this->assertEquals('Not found', $message);
    }

    /**
     * Check Show a Setting By Key for Guest
     *
     * @return void
     */
    public function testShowByKeyForGuest()
    {
        // Request
        $response = $this->get('api/mobile/v1/settings/key/terms');

        // Check response status
        $response->assertStatus(401);
    }
}
