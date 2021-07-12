<?php

namespace App\Repository;

interface SubjectRepositoryInterface {
    public function all();
    public function getById($id);
}
