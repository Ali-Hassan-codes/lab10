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
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $id,
        'password' => 'nullable|string|min:6',
    ]);

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = $request->password; // hash() if using hashed passwords
    }

    $user->save();

    return response()->json(['message' => 'User updated successfully']);
}

}
