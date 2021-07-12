<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'name' => 'subject1'
            ],
            [
                'name' => 'subject2'
            ],
            [
                'name' => 'subject3'
            ]
        ]);
    }
}
