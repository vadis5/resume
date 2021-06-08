<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestCompanyForCompletedSeeder extends Seeder
{
    private const TABLE_NAME = 'companies';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE_NAME)->insert([
            'name'           => 'Helix',
            'company_number' => '1111',
            'seats'          => 3,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'name'           => 'Tenant 1',
            'company_number' => '2',
            'seats'          => 5,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'name'           => 'Tenant 2',
            'company_number' => '2',
            'seats'          => 5,
        ]);
    }
}
