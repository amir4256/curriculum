<?php


namespace App\Repositories;


use App\Models\Authorscouch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class AuthorschouchRepository implements AuthorschouchRepositoryInterface
{
    public function findById($id){

        return Authorscouch::where('id', $id)->firstOrFail();

    }
    public function create($request){

        $authorscouch = new Authorscouch();
        $authorscouch->firstname = $request->firstname;
        $authorscouch->lastname = $request->lastname;
        $authorscouch->email = $request->email;
        $authorscouch->phone = $request->phone;
        $authorscouch->password = Hash::make($request->password);
        $authorscouch->subject_id = $request->subject_id;
        $authorscouch->role = $request->role;
        $authorscouch->save();
    }
}
