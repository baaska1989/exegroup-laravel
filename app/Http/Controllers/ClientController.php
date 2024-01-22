<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function getClients(Request $request)
    {
        try {
            $status = true;
            $data = DB::table('clients')
            ->where(function ($query) use ($request)
            {
                if (!empty($request->orderOptions["phone_number"])) {
                    $query->where('phone_number', 'LIKE', '%' . $request->orderOptions["phone_number"] . '%');
                }
            })->orderBy('id', 'desc')
            ->paginate($request->orderOptions['rowsPerPage']);

        } catch (\Exception $e) {
            dd($e->getMessage());
            $status = false;
        }

        return response()->json(['status' => $status, 'data' => $data]);
    }

    public function getClient($id)
    {
        try {
            $status = true;
            $data = DB::table('clients')->where('id', $id)->first();
        } catch (\Exception $exception)
        {
            $status = false;
            $data = array($exception->getMessage());
            array_push($data);
        }
       return response()->json(['status' => $status, 'data' => $data]);
    }

    public function insertClient(Request $request)
    {

         try {
             $status = true;
             $check_phone = DB::table('clients')->where('phone_number', $request->phone_number)->first();
             if($check_phone) {
               return response()->json(['status' => false, 'message' => 'Ийм дугаар өмнө бүртгэгдсэн байна']);
             }

            $exits = DB::table('clients')->where('id', $request->data['id'])->first();
            if (!$exits)
            {
                DB::table('clients')
                    ->insert([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'register'=> $request->register,
                        'phone_number'=> $request->phone_number,
                        'address'=> $request->address,
                        'pincode' => $request->pincode
                    ]);

            } else {
                DB::table('clients')->where('id', $request->id)
                    ->update([
                   'first_name' => $request->first_name,
                   'last_name' => $request->last_name,
                   'register'=> $request->register,
                   'phone_number'=> $request->phone_number,
                   'address'=> $request->address,
                    ]);
            }
            $data = "Амжтлттай хадгаллаа";
         } catch (\Exception $exception)
         {
              $status = false;
              $data = $exception->getMessage();
         }
        return response()->json(['status' => $status, 'message' => $data]);
    }

    public function changePin(Request $request)
    {

    }

    public function blockUser($id)
    {
        DB::table('clients')->where('id', $id)
        ->update([
            'isBlock' => 1
        ]);
        return response()->json(['status' => true]);
    }
}
