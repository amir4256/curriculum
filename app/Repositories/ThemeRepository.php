<?php

namespace App\Repositories;

use App\Models\Theme;

class ThemeRepository implements ThemeRepositoryInterface
{
    public function all()
    {
        return Theme::orderBy('created_at', 'desc')
            ->get();
    }

    public function getById($id)
    {
        return Theme::where('id' , $id)->first();
    }

    public function create($request){
        $theme = new Theme();
        $theme->name = $request->name;
        $theme->created_by = $request->created_by;
        $theme->user_id = $request->user_id;
        $theme->save();
    }
}
