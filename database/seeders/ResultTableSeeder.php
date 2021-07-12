<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert([
            [
                'abbreviation' => 'result1',
                'description' => 'description of result1',
                'grade_id' => '1',
                'subject_id' => '2'
            ],
            [
                'abbreviation' => 'result2',
                'description' => 'description of result2',
                'grade_id' => '2',
                'subject_id' => '1'
            ]
        ]);
    }
}
