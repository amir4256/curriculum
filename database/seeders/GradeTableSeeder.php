<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
                'name' => 'grade1'
            ],
            [
                'name' => 'grade2'
            ],
            [
                'name' => 'grade3'
            ],
            [
                'name' => 'grade4'
            ],
            [
                'name' => 'grade5'
            ]
        ]);
    }
}
