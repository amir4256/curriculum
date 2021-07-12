<?php

namespace App\Repositories;

interface SubConceptRepositoryInterface {
    public function all();
    public function getByTargetConceptId($id);
    public function create($request);

}
