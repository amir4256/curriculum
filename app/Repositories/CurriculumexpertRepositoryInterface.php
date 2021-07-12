<?php

namespace App\Repositories;

interface CurriculumexpertRepositoryInterface
{
    public function findById($id);
    public function create($request);

}
