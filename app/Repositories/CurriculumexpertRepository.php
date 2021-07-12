<?php


namespace App\Repositories;


use App\Models\Curriculumexpert;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class CurriculumexpertRepository implements CurriculumexpertRepositoryInterface
{
    public function findById($id){

        return Curriculumexpert::where('id', $id)->firstOrFail();

    }

    public function create($request){

        $curriculumexpert = new Curriculumexpert();
        $curriculumexpert->firstname = $request->firstname;
        $curriculumexpert->lastname = $request->lastname;
        $curriculumexpert->email = $request->email;
        $curriculumexpert->phone = $request->phone;
        $curriculumexpert->password = Hash::make($request->password);
        $curriculumexpert->save();
    }
}
