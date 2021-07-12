<?php

namespace App\Http\Controllers;

use App\Repositories\GradeRepositoryInterface;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function __construct(GradeRepositoryInterface $gradeRepository){
        $this->gradeRepository = $gradeRepository;
    }

    public function getAll(){
        $grades = $this->gradeRepository->getall();
        return response()->json($grades,200);
    }
}
