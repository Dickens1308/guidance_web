<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Swift_TransportException;

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

    public function resetApi(Request $request): JsonResponse
    {
        $field = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        try {
            $response = Password::sendResetLink($request->only('email'));

            switch ($response) {
                case Password::RESET_LINK_SENT:
                    return response()->json(array("status" => 200, "message" => trans($response), "data" => array()));
                case Password::INVALID_USER:
                    return response()->json(array("status" => 400, "message" => trans($response), "data" => array()));
            }
        } catch (Swift_TransportException $ex) {
            $arr = array("status" => 400, "message" => "Email Transport link unavailable", "data" => []);
        } catch (Exception $ex) {
            $arr = array("status" => 400, "message" => $ex->getMessage(), "data" => []);
        }

        return response()->json(array("message", "Check your email for password reset link which has been sent"));
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
            'age' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);

        $user = User::create([
            'username' => $field['username'],
            'email' => $field['email'],
            'age' => $field['age'],
            'password' => Hash::make($field['password']),
            'parent_id' => $request->user()->id,
        ]);

        $user->assignRole('child');

        return response()->json(array('user' => $user, 'message' => 'Child successful registered', 'token' => ''));
    }
}