<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::factory(10)->create();
        DB::table('categories')->insert([
            'name' => 'Category 1',
        ]);
        DB::table('categories')->insert([
            'name' => 'Category 2',
        ]);
        DB::table('categories')->insert([
            'name' => 'Category 3',
        ]);
        DB::table('categories')->insert([
            'name' => 'Category 4',
        ]);
    }
}
