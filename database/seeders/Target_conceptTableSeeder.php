<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Target_conceptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('target_concepts')->insert([
            [
                'name' => 'target1',
                'subject_id' => '2'
            ],
            [
                'name' => 'target2',
                'subject_id' => '1'
            ]
        ]);
    }
}
