<?php

namespace App\Repositories;

use App\Models\Subject;
use App\Repository\SubjectRepositoryInterface;

class SubjectRepository implements SubjectRepositoryInterface
{
    public function all()
    {
        return Subject::orderBy('created_at', 'desc')
            ->get();
    }

    public function getById($id)
    {
        return Subject::where('id' , $id)->first();
    }
}
