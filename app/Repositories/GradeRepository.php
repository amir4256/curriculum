<?php


namespace App\Repositories;


use App\Models\Grade;

class GradeRepository implements GradeRepositoryInterface
{
    public function getall(){
        return Grade::all();
    }
}
