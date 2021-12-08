<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {

            return response()->json([
                'status' => 'success',
                'data' => [
                    'token' => auth()->user()->createToken('auth_token')->plainTextToken,
                    'name'=>  auth()->user()->name,
                ]
            ]);
        }

        return response()->json([
            'status' => 'error',
            'data' => 'Unauthorized Access',
        ]);
    }
}
