<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestUserCategoriesForCompletedSeeder extends Seeder
{
    private const TABLE = 'user_categories';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE)->insert(
            [
                'user_id'       => 5,
                'category_id' => 1
            ]
        );

        // 2
        DB::table(self::TABLE)->insert(
            [
                'user_id'       => 5,
                'category_id' => 2
            ]
        );
    }
}
