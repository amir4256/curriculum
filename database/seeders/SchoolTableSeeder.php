<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            [
                'name' => 'school',
                'city_id' => '1',
            ],
            [
                'name' => 'school2',
                'city_id' => '2',
            ]

        ]);
    }
}
