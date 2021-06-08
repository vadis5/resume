<?php

namespace Tests\Functional\API\V1;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UsersControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->artisan('db:seed --class=TestsSeeder');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * Check seeder.
     *
     * @return void
     */
    public function testSeeder()
    {
        $rolesUsers = Config::get('tests.roles_users');
        $sum = 0;
        foreach ($rolesUsers as $item) {
            $sum += $item[1];
        }
        $users      = DB::table('users')->get();
        $this->assertEquals($sum, $users->count());

        $user = DB::table('users')->where('id', 1)->first();
        $this->assertEquals('super-admin@admin.com', $user->email);
    }

//    public function testMeSuperAdmin()
//    {
//        $response = $this->post('api/v1/auth/login', [
//            'email'    => 'super@admin.com',
//            'password' => '12345678'
//        ]);
//
//        $response->assertStatus(200);
//
//        $responseJSON = json_decode($response->getContent(), true);
//        $token        = 'bearer ' . $responseJSON['access_token'];
//
//        $response = $this->get('api/v1/users/me?token=' . $token);
//
//        // Check response structure
//        $response->assertJsonStructure(
//            [
//                'success',
//                'code',
//                'data' =>
//                    [
//                        "id",
//                        "name",
//                        "email",
//                        "user_type",
//                        "citizen_id",
//                        "company_id",
//                        "creator_id",
//                        "status",
//                        "created_at",
//                        "updated_at",
//                        "citizen" =>
//                        [
//                            "first_name",
//                            "last_name",
//                            "user_id",
//                            "created_at",
//                            "updated_at"
//                        ]
//                    ],
//                'message'
//            ]
//        );
//        $responseJSON = json_decode($response->getContent(), true);
//        $success      = $responseJSON['success'];  // array
//        $code         = $responseJSON['code'];     // array
//        $message      = $responseJSON['message'];  // array
//        $data         = $responseJSON['data'];     // array
//
//        $this->assertEquals(true, $success);
//        $this->assertEquals(200, $code);
//        $this->assertEquals('Super Admin', $data['name']);
//        $this->assertEquals('super@admin.com', $data['email']);
//        $this->assertEquals('Super', $data['citizen']['first_name']);
//        $this->assertEquals('Admin', $data['citizen']['last_name']);
//        $this->assertEquals(1, $data['citizen']['user_id']);
//        $this->assertEquals('active', $data['status']);
//        $this->assertEquals("Got Me.", $message);
//    }
//
//    public function testMeCompany()
//    {
//        $response = $this->post('api/v1/auth/login', [
//            'email'    => 'company-creator-event-2@admin.com',
//            'password' => '12345678'
//        ]);
//
//        $response->assertStatus(200);
//
//        $responseJSON = json_decode($response->getContent(), true);
//        $token        = 'bearer ' . $responseJSON['access_token'];
//
//        $response = $this->get('api/v1/users/me?token=' . $token);
//
//        // Check response structure
//        $response->assertJsonStructure(
//            [
//                'success',
//                'code',
//                'data' =>
//                    [
//                        "id",
//                        "name",
//                        "email",
//                        "user_type",
//                        "citizen_id",
//                        "company_id",
//                        "creator_id",
//                        "status",
//                        "created_at",
//                        "updated_at",
//                        "company" =>
//                        [
//                            "name",
//                            "siret",
//                            "user_id",
//                            "created_at",
//                            "updated_at"
//                        ],
//                        "creator" =>
//                        [
//                            "stripe",
//                            "siret",
//                            "user_id",
//                            "read",
//                            "created_at",
//                            "updated_at"
//                        ]
//                    ],
//                'message'
//            ]
//        );
//        $responseJSON = json_decode($response->getContent(), true);
//        $success      = $responseJSON['success'];  // array
//        $code         = $responseJSON['code'];     // array
//        $message      = $responseJSON['message'];  // array
//        $data         = $responseJSON['data'];     // array
//
//        $this->assertEquals(true, $success);
//        $this->assertEquals(200, $code);
//        $this->assertEquals('Company Creator Event 2', $data['name']);
//        $this->assertEquals('company-creator-event-2@admin.com', $data['email']);
//        $this->assertEquals('Company Creator Event 2', $data['company']['name']);
//        $this->assertEquals('123456', $data['company']['siret']);
//        $this->assertEquals(4, $data['company']['user_id']);
//        $this->assertEquals(4, $data['creator']['user_id']);
//        $this->assertEquals('stripe-account-2', $data['creator']['stripe']);
//        $this->assertEquals('12345678', $data['creator']['siret']);
//        $this->assertEquals(0, $data['creator']['read']);
//        $this->assertEquals('active', $data['status']);
//        $this->assertEquals("Got Me.", $message);
//    }
//
    /**
     * Check Me for Guest
     *
     * @return void
     */
    public function testMeForGuest()
    {
        // Request
        $response = $this->get('api/v1/users/me');

        // Check response status
        $response->assertStatus(401);
    }


    /**
     * Check Me for Super Admin
     *
     * @return void
     */
    public function testMeForSuperAdmin()
    {
        $token = $this->loginRole('super-admin');

        // Request
        $response = $this->get('api/v1/users/me?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "name",
                        "email",
                        "type",
                        "status",
                        "created_at",
                        "updated_at",
                        "roles" => []
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
        $this->assertCount(9, $data);
        $this->assertEquals('Super Admin', $data['name']);
        $this->assertEquals('super-admin@admin.com', $data['email']);
        $this->assertEquals(1, $data['roles'][0]['id']);
        $this->assertEquals('super-admin', $data['roles'][0]['name']);
        $this->assertEquals("Got Me.", $message);
    }

    /**
     * Check Index Super Admin
     *
     * @return void
     */
    public function testIndexForSuperAdmin()
    {
        $token = $this->loginRole('super-admin');

        // Request
        $response = $this->get('api/v1/users?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        [
                            "id",
                            "name",
                            "email",
                            "status",
                            "type",
                            "created_at",
                            "updated_at"
                        ]
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

        $rolesUsers = Config::get('tests.roles_users');
        $sum = 0;
        foreach ($rolesUsers as $item) {
            $sum += $item[1];
        }

        $this->assertCount($sum, $data);
        $this->assertEquals('Super Admin', $data[0]['name']);
        $this->assertEquals('super-admin@admin.com', $data[0]['email']);
        $this->assertEquals('active', $data[0]['status']);
        $this->assertEquals("Created User Index", $message);
    }

    /**
     * Check Empty Index for Admin
     *
     * @return void
     */
    public function testIndexEmptyForAdmin()
    {
        $token = $this->loginRole('admin');

        $rolesUsers = Config::get('tests.roles_users');
        $sum = 0;
        foreach ($rolesUsers as $item) {
            $sum += $item[1];
        }

        for ($i = 1; $i <= $sum; $i++) {
            $response = $this->delete('api/v1/users/' . $i . '?token=' . $token);
        }

        // Request
        $response = $this->get('api/v1/users?token=' . $token);

        // Check response status
        $response->assertStatus(204);
    }

    /** Check Index for Not Admin
     *
     * @return void
     */
    public function testIndexForNotAdmin()
    {
        $token = $this->loginRole('article-author');

        // Request
        $response = $this->get('api/v1/users?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals("Permission is absent", $message);
    }

    /**
     * Check Index for Guest
     *
     * @return void
     */
    public function testIndexForGuest()
    {
        // Request
        $response = $this->get('api/v1/users');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Specific User for Super Admin
     *
     * @return void
     */
    public function testShowSpecificUserForSuperAdmin()
    {
        $token = $this->loginRole('super-admin');

        // Request
        $response = $this->get('api/v1/users/6?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "id",
                        "name",
                        "email",
                        "email_verified_at",
                        "type",
                        "status",
                        "created_at",
                        "updated_at"
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
        $this->assertCount(8, $data);
        $this->assertEquals('Course Author', $data['name']);
        $this->assertEquals('course-author@admin.com', $data['email']);
        $this->assertEquals('active', $data['status']);
        $this->assertEquals('admin', $data['type']);
        $this->assertEquals("Got Specific User", $message);
    }

    /**
     * Check Specific User By not Himself
     *
     * @return void
     */
    public function testShowSpecificUserByNotHimself()
    {
        $token = $this->loginRole('article-author');

        // Request
        $response = $this->get('api/v1/users/8?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals('You do not have permission', $message);
    }

    /**
     * Check Get User for Guest
     *
     * @return void
     */
    public function testShowSpecificUserForGuest()
    {
        // Request
        $response = $this->get('api/v1/users/6');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Specific User With Wrong ID
     *
     * @return void
     */
    public function testShowSpecificUserWithWrongIdForAdmin()
    {
        $token = $this->loginRole('admin');

        // Request
        $response = $this->get('api/v1/users/99999996?token=' . $token);

        // Check response status
        $response->assertStatus(460);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(460, $code);
        $this->assertEquals('Wrong request', $message);
    }

    /**
     * Check Store a new user for Super Admin
     *
     * @return void
     */
    public function testStoreNewUserForSuperAdmin()
    {
        $token = $this->loginRole('super-admin');

        // Request
        // Create data
        $data = [
            "name"     => 'New User',
            "email"    => 'new-user@admin.com',
            "password" => '12345678',
            "status"   => 'inactive',
            "type"     => 'basic',
        ];

        $response = $this->post('api/v1/users?token=' . $token, $data);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "name",
                        "email",
                        "status",
                        "type"
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
        $this->assertCount(7, $data);
        $this->assertEquals('New User', $data['name']);
        $this->assertEquals('new-user@admin.com', $data['email']);
        $this->assertEquals('inactive', $data['status']);
        $this->assertEquals('basic', $data['type']);
        $this->assertEquals("Created new User", $message);
    }

    /**
     * Check Store New User By Authenticated User not Admin
     *
     * @return void
     */
    public function testStoreNewUserByAuthenticatedUserNotAdmin()
    {
        $token = $this->loginRole('article-author');

        // Request
        // Create data
        $data = [
            "name"     => 'New User',
            "email"    => 'new-user@admin.com',
            "type"     => 'admin',
            "status"   => 'active',
            "password" => '12345678'
        ];

        $response = $this->post('api/v1/users?token=' . $token, $data);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals(null, $data);
        $this->assertEquals('You do not have permission', $message);
    }

    /**
     * Check Store A Wrong Data For Admin
     *
     * @return void
     */
    public function testStoreAWrongDataForAdmin()
    {
        $token = $this->loginRole('admin');

        // Request
        // Create data
        $data = [
            "name"     => [],
            "email"    => [],
            "status"   => [],
            "type"     => [],
            "password" => [],
        ];

        $response = $this->withHeader('Accept', 'application/json')
            ->post('api/v1/users?token=' . $token, $data);

        // Check response status
        $response->assertStatus(422);

        // Check response structure
        $response->assertJsonStructure(
            [
                'message',
                'errors'
            ]
        );

        $responseJSON = json_decode($response->getContent(), true);
        $message      = $responseJSON['message'];    // array
        $errors       = $responseJSON['errors'];     // array

        $this->assertCount(5, $errors);
        $this->assertEquals("The given data was invalid.", $message);
    }

    /**
     * Check Update User For Super Admin
     *
     * @return void
     */
    public function testUpdateUserForSuperAdmin()
    {
        $token = $this->loginRole('super-admin');

        // Request
        // Create data
        $data = [
            "name" => 'Company Creator',
        ];

        $response = $this->put('api/v1/users/3?token=' . $token, $data);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "id",
                        "name",
                        "email",
                        "type",
                        "status",
                        "created_at",
                        "updated_at"
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
        $this->assertCount(8, $data);
        $this->assertEquals('Company Creator', $data['name']);
        $this->assertEquals("Updated The User.", $message);
    }

    /**
     * Check Update New User By Other Authenticated User not Admin
     *
     * @return void
     */
    public function testUpdateUserByOtherAuthenticatedUserNotAdmin()
    {
        $token = $this->loginRole('article-author');

        // Request
        // Create data
        $data = [
            "name" => 'New User'
        ];

        $response = $this->put('api/v1/users/11?token=' . $token, $data);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals(null, $data);
        $this->assertEquals('You do not have permission.', $message);
    }

    /**
     * Check Update User For Guest
     *
     * @return void
     */
    public function testUpdateUserForGuest()
    {
        // Request
        // Create data
        $data = [
            "name" => 'Company Creator',
        ];

        $response = $this->put('api/v1/users/3', $data);

        // Check response status
        $response->assertStatus(401);

        $responseJSON = json_decode($response->getContent(), true);
    }

    /**
     * Check Update User For Wrong User ID For The Admin.
     *
     * @return void
     */
    public function testUpdateWrongUserIdForTheAdmin()
    {
        $token = $this->loginRole('admin');

        // Request
        // Create data
        $data = [
            "name" => 'Company Creator',
        ];

        $response = $this->put('api/v1/users/888888?token=' . $token, $data);

        // Check response status
        $response->assertStatus(460);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(460, $code);
        $this->assertEquals('Wrong ID.', $message);
    }

    /**
     * Check Update User With Wrong Data For The Admin.
     *
     * @return void
     */
    public function testUpdateWrongDataForTheAdmin()
    {
        $token = $this->loginRole('admin');

        // Request
        // Create data
        $data = [
            "name" => [],
        ];

        $response = $this->withHeader('Accept', 'application/json')
            ->put('api/v1/users/3?token=' . $token, $data);

        // Check response status
        $response->assertStatus(422);

        // Check response structure
        $response->assertJsonStructure(
            [
                'message',
                'errors'
            ]
        );

        $responseJSON = json_decode($response->getContent(), true);
        $message      = $responseJSON['message'];    // array
        $errors       = $responseJSON['errors'];     // array

        $this->assertCount(1, $errors);
        $this->assertEquals("The given data was invalid.", $message);
    }

    /**
     * Check Delete User For Super Admin
     *
     * @return void
     */
    public function testDeleteUserForSuperAdmin()
    {
        $token = $this->loginRole('super-admin');

        // Request
        $response = $this->delete('api/v1/users/5?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data',
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
        $this->assertEquals(null, $data);
        $this->assertEquals("Deleted The User.", $message);

        $user = DB::table('users')->where('id', 5)->first();
        $this->assertEquals(null, $user);
    }

    /**
     * Not admin user tries to delete not himself
     *
     * @return void
     */
    public function testDeleteNotAdminUserTriesToDeleteNotHimself()
    {
        $token = $this->loginRole('article-author');

        // Request
        $response = $this->delete('api/v1/users/11?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals(null, $data);
        $this->assertEquals("You do not have permission.", $message);
    }

    /**
     * Check Delete User With Wrong ID For Admin
     *
     * @return void
     */
    public function testDeleteUserWithWrongIDForAdmin()
    {
        $token = $this->loginRole('admin');

        // Request
        $response = $this->delete('api/v1/users/555555?token=' . $token);

        // Check response status
        $response->assertStatus(460);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(false, $success);
        $this->assertEquals(460, $code);
        $this->assertEquals(null, $data);
        $this->assertEquals("Wrong ID.", $message);
    }

    /**
     * Check Delete User By Guest
     *
     * @return void
     */
    public function testDeleteUserByGuest()
    {
        // Request
        $response = $this->delete('api/v1/users/3');

        // Check response status
        $response->assertStatus(401);
    }
}