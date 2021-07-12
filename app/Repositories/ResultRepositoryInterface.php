<?php

namespace App\Repositories;

interface ResultRepositoryInterface {
    public function getByTargetConceptId($id);
}
