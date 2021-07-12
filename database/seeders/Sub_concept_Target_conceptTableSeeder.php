<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sub_concept_Target_conceptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_concept_target_concept')->insert([
            [
                'sub_concept_id' => '1',
                'target_concept_id' => '1'
            ],
            [
                'sub_concept_id' => '2',
                'target_concept_id' => '1'
            ]
        ]);
    }
}
