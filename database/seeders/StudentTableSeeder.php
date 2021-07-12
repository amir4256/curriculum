<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'firstname' => 'fname1',
                'lastname' => 'lname1',
                'email' => 'fname1.lname@gmail.com',
                'password' => '1111',
                'city_id' => '1',
                'grade_id' => '1',
                'school_id' => '1'
            ],
            [
                'firstname' => 'fname2',
                'lastname' => 'lname2',
                'email' => 'fname2.lname@gmail.com',
                'password' => '2222',
                'city_id' => '2',
                'grade_id' => '2',
                'school_id' => '2'
            ]
        ]);
    }
}
