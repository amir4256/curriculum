<?php

namespace App\Repositories;

interface ThemeRepositoryInterface {
    public function all();
    public function getById($id);
    public function create($request);

}
