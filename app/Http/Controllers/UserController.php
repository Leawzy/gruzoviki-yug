<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $data = $request->validate([
            "first_name" => ["required", "string"],
            "last_name" => ["required", "string"],
            "email" => ["required", "email", "string"],
            "password" => ["required", "confirmed"],
        ]);

        $user = User::create([
            "first_name" => $data["first_name"],
            "last_name" => $data["last_name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),
        ]);
        $user->api_token = Str::random(80);
        $user->save();

        return response()->json([
            'token' => $user->api_token
        ], 201);
    }
}
