<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    //Retornar usuario actual
    public function user()
    {
        return response()->json(auth()->user());
    }

}
