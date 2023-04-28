<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerApi(Request $request): JsonResponse
    {
        $field = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);

        $user = User::create([
            'username' => $field['username'],
            'email' => $field['email'],
            'password' => Hash::make($field['password']),
        ]);

        $user->assignRole('parent');
        $token = $user->createToken($field['username'] . '_token')->plainTextToken;

        return response()->json(array('user' => $user, 'message' => 'successful registered', 'token' => $token), 200);
    }

    public function loginApi(Request $request): JsonResponse
    {
        $field = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = User::where('email', $field['email'])->first();

        if (!$user || !Hash::check($field['password'], $user->password)) {
            return response()->json(array('message' => 'login failed'), 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        return response()->json(array('user' => $user, 'token' => $token, 'message' => 'successful login to your account'));
    }


    public function logoutApi(Request $request): array
    {
        $request->user()->tokens()->delete();
        return ['message' => 'logout'];
    }

    public function childRegister(Request $request): JsonResponse
    {
        $field = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);

        $user = User::create([
            'username' => $field['username'],
            'email' => $field['email'],
            'password' => Hash::make($field['password']),
            'parent_id' => $request->user()->id,
        ]);

        $user->assignRole('child');

        return response()->json(array('user' => $user,'message' => 'Child successful registered','token' => ''));
    }
}
