<?php


namespace App\Repositories;


use App\Models\School;
use Illuminate\Support\Facades\Hash;

class SchoolRepository implements SchoolRepositoryInterface
{
    public function findById($id){

        return School::where('id', $id)->firstOrFail();

    }

    public function update($request){

        $school = School::find($request->id);
        $school->firstname = $request->firstname;
        $school->lastname = $request->lastname;
        $school->email = $request->email;
        $school->password = Hash::make($request->password);
        $school->save();
    }

}
