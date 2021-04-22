<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    /**
     * @OA\Tag(
     *     name="USER",
     *     description="API Endpoints of user"
     * )
     */
    public function index() { }

    /**
     * @OA\Post(
     *      path="/user",
     *      tags={"USER"},
     *      summary="새로운 유저 생성",
     *      description="회원 가입을 위한 API 입니다. 사용자 아이디, 이름, 암호, 암호 확인을 입력해야 합니다.",
     *      operationId="user",
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
     *          description="유저 생성"
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="HTTP_INTERNAL_SERVER_ERROR"
     *      )
     * )
     *
     * Register new user.
     *
     * @param Request $request
     * @return json
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
        ], Response::HTTP_CREATED);
    }

    /**
     * @OA\Post(
     *      path="/authenticate",
     *      tags={"USER"},
     *      summary="새로운 유저 생성",
     *      description="회원 로그인 위한 API 입니다. 사용자 아이디, 암호를 입력해야 합니다.",
     *      operationId="login",
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
     *      @OA\Response(
     *          response=200,
     *          description="유저 로그인 토큰 발급"
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="HTTP_UNPROCESSABLE_ENTITY"
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="HTTP_INTERNAL_SERVER_ERROR"
     *      )
     * )
     *
     * @param Request $request
     * @return json
     */
    public function authenticate(Request $request) {

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

    /**
     * @OA\Get(
     *      path="/logout",
     *      tags={"USER"},
     *      summary="유저 로그아웃",
     *      description="회원 로그인 아웃을 위한 API 입니다. 토큰 만료",
     *      operationId="logout",
     *      @OA\Response(
     *          response=500,
     *          description="HTTP_INTERNAL_SERVER_ERROR"
     *      ),
     *      security={ {"bearer": {}} },
     * )
     *
     * @return json
     */
    public function logout() {

        $user = request()->user();
        $user->tokens()->delete();

        return response()->json([
            'message' => 'sucess',
            'user' => $user,
        ], Response::HTTP_OK);

    }

}
