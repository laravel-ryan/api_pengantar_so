<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = request(['email', 'password']);
        $credentials['active'] = 1;
        $credentials['deleted_at'] = null;

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'success' => true,
                'message' => 'Login failed, please try again!',
            ], 401);
        }

        $user = $request->user();

        $tokenResult = $user->createToken('Token Mobile');
        $tokenResult->accessToken;

        return response()->json([
            'name' => $user->name,
            'token_access' => $tokenResult->accessToken,
        ]);
    }
}
