<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;



class AuthController extends Controller
{
    public function authenticate(Request $request): JsonResponse
    {
            $user =  User::where('identifiant', $request->identifiant)->first();

            if (Hash::check($request->password, $user->password)) {
                return response()->json([
                    'token' => $user->createToken(time())->plainTextToken
                ]);
            }
    
    }

    public function dashboard(): JsonResponse
    {
        return response()->json([
            'success' => 'bienvenue!'
        ]);
    }
}
