<?php

namespace App\Http\Controllers;
 use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || $request->password !== $user->password) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        return response()->json([
            'message' => 'Login successful',
            'user' => $user
        ]);
    }
}
