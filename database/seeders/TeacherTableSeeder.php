<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            [
                'firstname' => 'fname',
                'lastname' => 'lname',
                'email' => 'fname.lname@gmail.com',
                'password' => '2222',
                'city_id' => '1',
                'school_id' => '1',
            ]
            ]);
    }
}
