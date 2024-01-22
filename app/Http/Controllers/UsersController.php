<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        try {
            $status = true;
            $data = new \stdClass();
            $data->users = DB::table('users')
                ->select("CONCAT('first_name', '', 'last_name) as full_name")
                ->take(30)
                ->get();
        } catch (\Exception $exception)
        {
            $status = false;
            $data = array();
            array_push($data, $exception);
        }
        return response()->json(['status' => $status, 'data' => $data]);
    }

    public function getUsers()
    {
        try {
            $status = true;
            $data = DB::table('users')->limit(100)->orderBy('id', 'desc')->get();
        } catch(\Exception $exception)
        {
            $status = false;
            $data = array();
            array_push($data, $exception);
        }
        return response()->json(['status' => $status, 'data' => $data]);
    }

    public function check(Request $request)
    {
        $user = $request->user();
        $detail = DB::table('users')->where('phone_number', $user->phone_number)->get();
        return response()->json([
            'status' => true,
            'email' => $user->email,
            'token' => $user->api_token,
            'user' => $detail
        ]);
    }

    public function insertUpdateUser(Request $request)
    {
        try {
            $status = true;
            $exist = DB::table('users')->where('id', $request->get('id'))->first();
            if (!$exist)
            {
                $data = DB::table('users')
                    ->insertGetId([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                        'password' =>  Hash::make($request->password),
                        'isBlock' => false
                    ]);
            } else {
                $data = DB::table('users')
                    ->where('id', $request->get('id'))
                    ->update([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'isBlock' => false
                    ]);
            }
        }catch (\Exception $e)
        {
            $status = false;
            $data = array($e->getMessage());
            array_push($data);
        }
        return response()->json(['status' => $status, 'data' => $data]);
    }

    // public function changePassword(Request $request, $id)
    // {
    //     try {
    //         $status = true;
    //         DB::table('users')
    //             ->where('id', $id)
    //             ->update([
    //                 'password' => Hash::make($request->password)
    //             ]);
    //     } catch (\Exception $exception)
    //     {
    //      $status = false;
    //      $data = array($exception->getMessage());
    //      array_push($data);
    //     }
    //    return response()->json(['status' => $status, 'message' => 'Амжилттай хадгаллаа']);
    // }

    public function getUser($id)
    {
        $data = DB::table('users')->where('id', $id)->first();
        return  response()->json(['status' => true, 'data' => $data]);
    }

    public function editUser(Request $request, $id)
    {
        $data = DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                    ]);
    }
    public function changePassword(Request $request, $id)
    {
        try {
            $status = true;
            $data = DB::table('users')
            ->where('id', $id)
            ->update([
                'password' => Hash::make($request->password)
            ]);
            $message = "Нууц үг амжилттай шинэчилэлээ!";
        } catch(\Exception $exception)
        {
            $status = false;
            $message = "Алдаа гарлаа";
        }
        return response()->json([
                'status' => $status,
                'message' => $message,
            ], 200);

    }
    public function deleteUser($id)
    {
        $data = DB::table('users')->where('id', $id);
        if($data)
        {
            $data->delete();
            return response()->json([
                'status' => true,
                'message' => 'Хэрэглэгчийн бүртгэлийг устгалаа.',
            ], 200);
        } else {
            return response() -> json([
                'status'=> false,
                'message' => 'No user ID found',
            ], 404);
        }
    }

    public function search(Request $request)
    {
        $data = DB::table('users')->where('last_name', 'LIKE', '%'.$request->search.'%')->get();
        return response()->json(['data' => $data]);

    }
}
