<?php

/**
 * User Seeder for Tests of Courses
 *
 * PHP version 7.4
 *
 * @category Seeder
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Class UsersCourses
 *
 * @category Class
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */
class UsersForCoursesSeeder extends Seeder
{
    private const TABLE = 'users';
    private const TABLE2 = 'company_users';
    private const TABLE3 = 'user_departments';
    private $admin = [
        'status' => 'active',
        'type'   => 'admin',
        'email'  => [],
    ];
    private const PASSWORD = '12345678';
    private const EMAIL_SUFFIX = '@admin.com';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = $this->admin;

        // 1
        $admin['name']     = 'Super Admin';
        $admin['email']    = 'super-admin' . self::EMAIL_SUFFIX;
        $admin['password'] = Hash::make(self::PASSWORD);
        $user              = new User();
        $user->fill($admin)->save();
        $user->assignRole('super-admin');

        // 2
        $admin['name']     = 'Helix Admin';
        $admin['email']    = 'helix-admin' . self::EMAIL_SUFFIX;
        $admin['password'] = Hash::make(self::PASSWORD);
        $user              = new User();
        $user->fill($admin)->save();
        $user->assignRole('helix-admin');
        DB::table(self::TABLE2)->insert([
            'user_id'   => $user->id,
            'company_id' => 1,
        ]);

        // 3
        $admin['name']     = 'Tenant Admin';
        $admin['email']    = 'tenant-1-admin' . self::EMAIL_SUFFIX;
        $admin['password'] = Hash::make('12345678');
        $user              = new User();
        $user->fill($admin)->save();
        $user->assignRole('tenant-admin');
        DB::table(self::TABLE2)->insert([
            'user_id'   => $user->id,
            'company_id' => 2,
        ]);

        // 4
        $admin['name']     = 'Tenant-2 Admin';
        $admin['email']    = 'tenant-2-admin' . self::EMAIL_SUFFIX;
        $admin['password'] = Hash::make(self::PASSWORD);
        $user              = new User();
        $user->fill($admin)->save();
        $user->assignRole('tenant-admin');
        DB::table(self::TABLE2)->insert([
            'user_id'   => $user->id,
            'company_id' => 3,
        ]);

        // 5
        $admin['name']     = 'Tenant-1 Dep-2 User-1';
        $admin['email']    = 'tenant-1-dep-2-user-1' . self::EMAIL_SUFFIX;
        $admin['password'] = Hash::make(self::PASSWORD);
        $user              = new User();
        $user->fill($admin)->save();
        $user->assignRole('tenant-user');
        DB::table(self::TABLE3)->insert([
            'user_id'       => $user->id,
            'department_id' => 2,
        ]);

        // 6
        $admin['name']     = 'Tenant-1 Dep-4 User-1';
        $admin['email']    = 'tenant-1-dep-4-user-1' . self::EMAIL_SUFFIX;
        $admin['password'] = Hash::make(self::PASSWORD);
        $user              = new User();
        $user->fill($admin)->save();
        $user->assignRole('tenant-user');
        DB::table(self::TABLE3)->insert([
            'user_id'       => $user->id,
            'department_id' => 4,
        ]);

        // 7
        $admin['name']     = 'Tenant-2 Root-Dep-1 User-1';
        $admin['email']    = 'tenant-2-root-dep-1-user-1' . self::EMAIL_SUFFIX;
        $admin['password'] = Hash::make(self::PASSWORD);
        $user              = new User();
        $user->fill($admin)->save();
        $user->assignRole('tenant-user');
        DB::table(self::TABLE3)->insert([
            'user_id'       => $user->id,
            'department_id' => 3,
        ]);
    }
}
