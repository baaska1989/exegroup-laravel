<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        if ($request->has('email') && $request->has('password')) {

            if ($this->attemptLogin($request))
            {
                $user = $this->guard()->user();

                if ($user->delete_flag == 0)
                {

                    if (!$user->api_token)
                    {
                        $user->generateToken();
                    }
                    return response()->json([
                        'status' => true,
                        'email' => $user->email,
                        'token' => $user->api_token,
                        'user' => $user,
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Таны нэвтрэх эрх идвэхгүй болсон байна!'
                    ]);
                }
            }
        }
        return response()->json([
            'status' => false,
            'message' => 'Нэвтрэхэд алдаа гарлаа. Нэвтрэх мэдээллээ шалгана уу!'
        ]);
    }
}
