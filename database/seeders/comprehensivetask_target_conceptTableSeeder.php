<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comprehensivetask_target_conceptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comprehensivetask_target_concept')->insert([
            [
                'comprehensivetask_id' => '1',
                'target_concept_id' => '1'
            ],
            [
                'comprehensivetask_id' => '1',
                'target_concept_id' => '2'
            ]
        ]);
    }
}
