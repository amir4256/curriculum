<?php

namespace App\Repositories;

interface SchoolRepositoryInterface
{
    public function findById($id);
    public function update($request);
}
