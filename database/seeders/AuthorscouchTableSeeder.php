<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorscouchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            DB::table('authorscouches')->insert([
                [
                    'firstname' => 'fname1',
                    'lastname' => 'lname1',
                    'email' => 'fname.lname@gmail.com',
                    'password' => '2222',
                    'role' => 'author'
                ],
                [
                    'firstname' => 'fname2',
                    'lastname' => 'lname2',
                    'email' => 'fname.lname@gmail.com',
                    'password' => '2222',
                    'role' => 'couch'
                ],
                [
                    'firstname' => 'fname3',
                    'lastname' => 'lname3',
                    'email' => 'fname.lname@gmail.com',
                    'password' => '2222',
                    'role' => 'both'
                ]
            ]);
        }
    }
