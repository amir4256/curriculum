<?php


namespace App\Repositories;


use App\Models\Teacher;

class TeacherRepository implements TeacherRepositoryInterface
{
    public function findById($id){

        return Teacher::where('id', $id)->firstOrFail();

    }
}
