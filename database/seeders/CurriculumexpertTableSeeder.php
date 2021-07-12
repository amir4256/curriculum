<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculumexpertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curriculumexperts')->insert([
            [
                'firstname' => 'fname',
                'lastname' => 'lname',
                'email' => 'fname.lname@gmail.com',
                'password' => '2222',
            ]
        ]);
    }
}
