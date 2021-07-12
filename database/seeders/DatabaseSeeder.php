<?php

namespace Database\Seeders;

use App\Models\Authorscouch;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GradeTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(SubjectTableSeeder::class);


        $this->call(TeacherTableSeeder::class);
        $this->call(CurriculumexpertTableSeeder::class);
        $this->call(SchoolTableSeeder::class);
        $this->call(AuthorscouchTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(AuthorscouchTableSeeder::class);


        $this->call(ThemeTableSeeder::class);
        $this->call(ResultTableSeeder::class);
        $this->call(Sub_conceptTableSeeder::class);


        $this->call(Target_conceptTableSeeder::class);
        $this->call(Result_Target_conceptTableSeeder::class);
        $this->call(Sub_concept_Target_conceptTableSeeder::class);
        $this->call(Target_concept_ThemeTableSeeder::class);

        $this->call(comprehensivetaskTableSeeder::class);
        $this->call(comprehensivetask_target_conceptTableSeeder::class);
        $this->call(comprehensivetask_sub_conceptTableSeeder::class);
        $this->call(comprehensivetask_themeTableSeeder::class);
        $this->call(comprehensivetask_sub_themeTableSeeder::class);
        $this->call(comprehensivetask_resultTableSeeder::class);
        $this->call(TaskfileTableSeeder::class);


    }
}
