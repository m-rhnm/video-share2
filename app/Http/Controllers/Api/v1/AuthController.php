<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->authenticate();
        $token = auth()->user()->createToken('API');
        return response()->json([
            'token' => $token->plainTextToken,
        ]);
     
    }
    public function me()
    {
           return auth()->user(); 
    } 
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'message' => 'your token has deleted',
        ]);
    } 
}
