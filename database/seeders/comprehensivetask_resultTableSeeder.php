<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comprehensivetask_resultTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comprehensivetask_result')->insert([
            [
                'comprehensivetask_id' => '1',
                'result_id' => '1'
            ],
            [
                'comprehensivetask_id' => '1',
                'result_id' => '2'
            ]
        ]);
    }
}
