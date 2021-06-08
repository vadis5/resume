<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestDepartmentForCompletedSeeder extends Seeder
{
    private const TABLE_NAME = 'departments';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'Central Helix',
            'short_name' => 'Helix',
            'tenant_id'  => 1,
        ]);

        // 2
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'Tenant-1 Root-Department-1',
            'short_name' => 'T-1-R-1',
            'tenant_id'  => 2,
        ]);

        // 3
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'Tenant-2 Root-Department-1',
            'short_name' => 'T-2-R-1',
            'tenant_id'  => 3,
        ]);

        // 4
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'Tenant-1 Root-Department-2',
            'short_name' => 'T-1-R-2',
            'tenant_id'  => 2,
        ]);

        // 5
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'Tenant-1 Root-Department-3',
            'short_name' => 'T-1-R-3',
            'tenant_id'  => 2,
        ]);

        // 6
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'Tenant-1 Root-Department-2 Child-1',
            'short_name' => 'T-1-R-2-C-1',
            'parent_id'  => 4,
            'tenant_id'  => 2,
        ]);

        // 7
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'Tenant-1 Root-Department-2 Child-2',
            'short_name' => 'T-1-R-2-C-2',
            'parent_id'  => 4,
            'tenant_id'  => 2,
        ]);
    }
}
