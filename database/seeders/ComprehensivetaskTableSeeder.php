<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComprehensivetaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comprehensivetasks')->insert([
            [
                'title' => 'comprehensive task one',
                'subject_id' => '1',
                'subtheme' => 'comprehensivetasks subtheme',
                'description' => 'comprehensivetasks description',
                'critarias' => json_encode(['ksjdflksdjf', 'sjkdhfkjsdhfk', 'ksdjhfksdjhf']),
                'keyquestions' => json_encode(['skjdhfkjsdhf', 'lkshdfkjsdhfkh', 'lskjhdfkjsdhfk']),
                'tips' => json_encode(['skjdhfskdjhf', 'kjshdfkjsdhfkh', 'sjkdhfksjdhfk']),
                'user_id' => '1',
                'created_by' => 'author'
            ]
        ]);
    }
}
