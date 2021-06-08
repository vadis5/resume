<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class TestRoleForCompletedSeeder extends Seeder
{
    private array $roles = [
        'super-admin',
        'helix-admin',
        'tenant-admin',
        'tenant-user'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles and assign existing permissions
        $roles = $this->roles;
        for ($i = 1; $i <= count($roles); $i++) {
            $role = Role::create(['name' => $roles[$i - 1]]);
        }
    }
}
