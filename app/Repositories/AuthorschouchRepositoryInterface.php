<?php

namespace App\Repositories;

interface AuthorschouchRepositoryInterface
{
    public function findById($id);
    public function create($request);

}
