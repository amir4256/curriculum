<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comprehensivetask_files')->insert([
            [
                'name' => 'file1',
                'path' => 'path1',
                'file_type' => '1',
                'text' => 'lskjdflksdjflksdjfl sdjfl ksdj flksdjf lksjd flkjdsflkjsdflkjsdflkjsdf',
                'link' => 'lskdjflsdkjflksdjf.ge',
                'comprehensivetask_id' => '1'
            ],
            [
                'name' => 'file2',
                'path' => 'path2',
                'file_type' => '1',
                'text' => null,
                'link' => null,
                'comprehensivetask_id' => '1'
            ]
        ]);
    }
}
