<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   // app/Http/Controllers/Auth/LoginController.php
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed
        return response()->json(['message' => 'Authentication successful']);
    }

    // Authentication failed
    return response()->json(['message' => 'Invalid credentials'], 401);
}

}
