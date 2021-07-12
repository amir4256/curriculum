<?php

namespace App\Repositories;

interface ComprehensivetaskRepositoryInterface
{
    public function findById($id);
    public function getByIdRelation($id);
    public function create($request);
    public function update($request);
    public function delete($id);


}
