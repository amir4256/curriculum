<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Repositories\ThemeRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ThemeController extends Controller
{
    public function __construct(ThemeRepositoryInterface $themeRepository)
    {
        $this->themeRepository = $themeRepository;

    }

    public function create(Request $request){

        $rules = [
            'name' => 'required',
            'created_by' => 'required',
            'user_id' => 'required'
        ];

        $validator = Validator::make($request->toArray(), $rules);

        if ($validator->passes()) {

            $this->themeRepository->create($request);
            return response()->json('successful', 200);
        } else {

            return response()->json($validator->errors()->all(),500);
        }

    }
}
