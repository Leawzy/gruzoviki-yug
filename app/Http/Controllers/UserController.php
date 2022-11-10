<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

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

    /**
     * @throws ValidationException
     */
    public function login(Request $request)
    {

        $request->validate([
            "email" => ["required", "string"],
            "password" => ["required"]
        ]);
        $user = User::where(["email" => $request["email"]])->first();

        if (Auth::attempt($request->only('email', 'password'))){
            return response()->json([
                'token' => $user->api_token
            ], 200);
        }
        throw ValidationException::withMessages([
            'email' =>['Данные введены не корренктно']
        ]);
    }
    public function profile(Request $request)
    {
        $data = $request->header('Profile');
        $user = User::where(["api_token" => $data])->first();


        return response()->json([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email
        ], 200);
    }

    public function logout(Request $request)
    {
        $data = $request->header('Profile');

        $logout = "Вы успешно вышли";
        return response()->json([
            'logout' == $logout
        ], 200);
    }
}
