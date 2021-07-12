<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sub_conceptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_concepts')->insert([
            [
                'name' => 'sub1',
                'created_by' => 'teacher',
                'user_id' => '1'
            ],
            [
                'name' => 'sub2',
                'created_by' => 'author',
                'user_id' => '2'
            ]
        ]);
    }
}
