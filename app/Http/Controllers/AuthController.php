<?php

namespace App\Http\Controllers;

use App\Events\UserHasRegisteredSucceffulyEvent;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function getAllUsers()
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->roles;
        }

        return response()->json(['users' => $users]);
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'phone' => 'required|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {

            //pass validator errors as errors object for ajax response

            return response()->json([
                'errors' => $validator->errors(),
                'message' => $validator->errors()->first(),
                'status' => false
            ]);
        }
        $user = User::create([
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $token = auth()->login($user);


        ///event to assign a default user role
        event(new UserHasRegisteredSucceffulyEvent($user, 'Parent'));

        return response()->json([
            'token' => $token,
            'id' => auth()->user()->id,
            'phone' => auth()->user()->phone
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('phone', 'password');;


        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized user'], 401);
        }

        return response()->json([
            'token' => $token,
            'id' => auth()->user()->id,
            'phone' => auth()->user()->phone,
        ], 200, [], JSON_NUMERIC_CHECK);
    }
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            //'expires_in'   => auth()->factory()->getTTL() * 60
        ]);
    }
}
