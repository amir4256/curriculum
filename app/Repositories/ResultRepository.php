<?php

namespace App\Repositories;

use App\Models\Result;

class ResultRepository implements ResultRepositoryInterface
{
    public function getByTargetConceptId($id)
    {
        return Result::where('target_concept_id' , $id)->first();
    }
}
