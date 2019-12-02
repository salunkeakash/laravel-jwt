<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APILoginController extends Controller
{
    //
    public function login()
    {
        # code...
        $credentials = request(['email','password']);
        // print_r($credentials);
        // die;

        if (!$token= auth('api')->attempt($credentials)) {
            return response()->json(['error'=>'Unauthorized'], 401);
        }
        return response()->json([
            'token'=>$token,
            'type'=>'bearer',
            'expires'=>auth('api')->factory()->getTTL()*60,
        ]);
    }
}
