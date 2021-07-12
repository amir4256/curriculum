<?php

namespace App\Http\Controllers;

use App\Repositories\TeacherRepositoryInterface;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct(TeacherRepositoryInterface $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }
}
