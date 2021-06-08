<?php

/**
 * Tenant Seeder for Tests of Courses
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

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class TenantsCourses
 *
 * @category Class
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */
class TenantsForCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(
            [
                'name'           => "Helix",
                'company_number' => '00000',
                'seats'          => 999
            ]
        );

        DB::table('companies')->insert(
            [
                'name'           => "Tenant 1",
                'company_number' => '11111',
                'seats'          => 3
            ]
        );

        DB::table('companies')->insert(
            [
                'name'           => "Tenant 2",
                'company_number' => '22222',
                'seats'          => 4
            ]
        );
    }
}
