<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Result_Target_conceptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('result_target_concept')->insert([
            [
                'result_id' => '1',
                'target_concept_id' => '1'
            ],
            [
                'result_id' => '2',
                'target_concept_id' => '1'
            ]
        ]);
    }
}
