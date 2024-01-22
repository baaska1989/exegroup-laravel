<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function check(Request $request)
    {
        $user = $request->user();
        $detail = DB::table('orders')->where('phone_number', $user->phone_number)->get();
        return response()->json([
            'status' => true,
            'email' => $user->email,
            'token' => $user->api_token,
            'user' => $detail
        ]);
    }
}
