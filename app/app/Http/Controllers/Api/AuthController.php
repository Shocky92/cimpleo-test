<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function loginUser(Request $request)
    {
        if(!Auth::attempt($request->only(['email', 'password']))){
            return response()->json([
                'status' => false,
                'message' => 'Email & Password does not match with our record.',
            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        if (empty($user)) {
            return response()->json([
                'status' => false,
                'message' => 'Not found',
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => 'Logged in',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }

}
