<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comprehensivetask_themeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comprehensivetask_theme')->insert([
            [
                'comprehensivetask_id' => '1',
                'theme_id' => '1'
            ],
            [
                'comprehensivetask_id' => '1',
                'theme_id' => '2'
            ]
        ]);
    }
}
