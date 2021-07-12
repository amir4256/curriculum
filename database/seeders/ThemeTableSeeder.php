<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            [
                'name' => 'theme1',
                'created_by' => 'teacher',
                'user_id' => '3'
            ],
            [
                'name' => 'theme2',
                'created_by' => 'author',
                'user_id' => '4'
            ]
        ]);
    }
}
