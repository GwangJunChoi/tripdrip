<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @OA\Post(
     *      path="/register",
     *      tags={"USER"},
     *      summary="REGISTER NEW USER",
     *      operationId="register",
     *      @OA\Parameter(
     *          name="name",
     *          in="query",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="email",
     *          in="query",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="password",
     *          in="query",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *     @OA\Parameter(
     *          name="password_confirmation",
     *          in="query",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Success"
     *      )
     * )
     *
     * Register new user.
     *
     * @param Request $request
     * @return void
    */
    public function register(Request $request) {
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'user' => $user,
        ], 201);
    }

    public function login(Request $request) {
        
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        
        if (!\Auth::attempt($validated)) {
            return response()->json([
                'message' => 'Incorrect Email or Password'
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user = $request->user();

        return response()->json([
            'token' => $user->createToken('Personal Access Token')->plainTextToken,
            'user' => $user,
        ], Response::HTTP_OK);

    }

    public function logout() {

        $user = request()->user();
        $user->tokens()->delete();

        return response()->json([
            'message' => 'sucess',
            'user' => $user,
        ], Response::HTTP_OK);

    }

}
