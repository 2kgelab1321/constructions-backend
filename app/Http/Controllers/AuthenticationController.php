<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function authenticate(Request $request)
    {
        // Apply Validation
        // Etapes 1
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Etapes 2
        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);

        }else{
            // Etapes 3
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];

            // Etapes 4
            if(Auth::attempt($credentials))
            {
                // Etapes 7
                $user = User::find(Auth::user()->id);
                $token = $user->createToken('token')->plainTextToken;
                // Etapes 8
                return response()->json([
                    'status' => true,
                    'token' => $token,
                    'id' => Auth::user()->id
                ]);

                // // Etapes 6
                // return Auth::user();
            } else{
                // Etapes 5
                return response()->json([
                    'status' => false,
                    'message' => 'Either email/password is incorrect.'
                ]);
            }
        }
    }

    public function logout()
    {
        $user = User::find(Auth::user()->id);
        $user->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Logout successfully.'
        ]);
    }

}
