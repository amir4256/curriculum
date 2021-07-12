<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Target_concept_ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('target_concept_theme')->insert([
            [
                'theme_id' => '1',
                'target_concept_id' => '1',
            ],
            [
                'theme_id' => '2',
                'target_concept_id' => '1',
            ]
        ]);
    }
}
