<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }

    
    public function getKhaanBank()
    {
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
        $request = new \GuzzleHttp\Psr7\Request('POST', 'https://doob.world:6442/v1/auth/token?grant_type=client_credentials', $headers);
        $res = $client->sendAsync($request)->wait();
        echo $res->getBody();
    }


    public function getPlayhouse(Request $request)
    {
        $client = new Client();
        $request = new \GuzzleHttp\Psr7\Request('GET',  'http://playhouse-order.mn/api/getDondogmaa');
        $res = $client->sendAsync($request)->wait();
        $data1 = $res->getBody();
        $playhouse = json_decode($data1);
        foreach ($playhouse->data as $item) {
            $data = DB::table('accounts')
                ->where('order_detail_id', $item->order_detail_id)
                ->first();

            if (!$data) {
                DB::table('accounts')->insert([
                    'branch' => '0001',
                    'accountID' => $item->phone_number,
                    'product_name' => $item->product_name,
                    'status' => $item->status,
                    'cargo' => $item->cargo,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                    'phone_number' => $item->phone_number,
                    'order_id' => $item->order_id,
                    'order_detail_id' => $item->order_detail_id,
                    'created_at' => Carbon::now()
                ]);
            } else {
                return response()->json(['status' => false, 'msg' => 'Амжилтгүй боллоо'], 201);
            }
        }
        return response()->json(['status' => true], 200);
    }

    public function getAccounts(Request $request)
    {
        try {
            $status = true;
            $data = DB::table('accounts')->get();
        } catch (\Exception $exception) {
            $status = false;
            $data = array($exception->getMessage());
            array_push($data);
        }
        return response()->json(['status' => $status, 'data' => $data]);
    }
}
