<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Accounts;

class AccountController extends Controller
{
    public function getLoanInstallment()
    {
        try {
            $status = true;
            $data = Accounts::find(1);
            $data = DB::select("SELECT * FROM accounts where id = '1'");
            $data = DB::table('accounts')->where('id', 1)->get();
        } catch (\Exception $exception)
        {
            $status = false;
            $data = array();
            array_push($data, $exception->getMessage());
        }
        return response()->json(['status' => $status, 'data' => $data]);
    }

    public function loanInstallment(Request $request)
    {
        try {

        } catch(\Exception $exception)
        {
          $status = false;
        }

    }

    public function insertInstallment(Request $request)
    {
        try {
            $status = true;
            $data = DB::table('accounts')->insert([
                'lal' => 1
            ]);
            foreach ($request->installments as $value)
            {
                DB::table('leasing_installment')->insert([
                    'installmentFlag' => bcrypt($request->password),
                    'accountID' => $value->accountID,
                    'created_at' => Carbon::now(),
                    'created_by' => $request->user_id
                ]);
            }
        }
        catch(\Exception $exception)
        {
          $status = false;
          $data = array($exception->getMessage());
          array_push($data);
        }

        return response()->json(['status' => $status, 'data' => $data]);
    }

    public function insertUpdateShop(Request $request)
    {
        try {
            $status = true;
            $exist = DB::table('shops')->where('id', $request->get('id'))->first();
            if (!$exist)
            {
                $data = DB::table('shops')
                    ->insertGetId([
                        'name' => $request->shop['name'],
                        'prefix' => $request->shop['prefix'],
                    ]);
            } else {
                $data = DB::table('shops')
                    ->where('id', $request->get('id'))
                    ->update([
                        'name' => $request->shop['name'],
                        'prefix' => $request->shop['prefix'],
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

    public function updateShop(Request $request)
    {
        $useID = DB::table('shops')->where('id', '=', $request->shop['id'])->first();
        if($useID){
            $data = DB::table('shops')
            ->where('id', $request->shop['id'])
            ->update([
                'name' => $request->shop['name'],
                'prefix' => $request->shop['prefix'],
            ]);
            return response()->json(['status' => true]);
        } else {
            $exist = DB::table('shops')->where('prefix', '=', $request->shop['prefix'])->first();
            if($exist)
            {
            return response()->json(['status' => false, 'message' => 'Ийм угтвар дугаар бүртгэгдсэн байна']);
            }
            else
            {
                $data = DB::table('shops')
                ->where('id', $request->shop['id'])
                ->insert([
                    'name' => $request->shop['name'],
                    'prefix' => $request->shop['prefix'],
                ]);
                return response()->json(['status' => true, 'data' => $data]);
            }
        }

    }

    public function getShops()
    {
        $data = DB::table('shops')->get();
        return response()->json(['data' => $data]);
    }

    public function editShop(Request $request, $id)
    {
        $data = DB::table('shops')
                    ->where('id', $id)->first();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function deleteShop($id)
    {
        $data = DB::table('shops')->where('id', $id);
        if($data)
        {
            $data->delete();
            return response()->json([
                'status' => true,
                'message' => 'Онлайн дэлгүүрийн бүртгэлийг устгалаа.',
            ], 200);
        } else {
            return response() -> json([
                'status'=> false,
                'message' => 'No user ID found',
            ], 404);
        }
    }

    public function saveShop(Request $request)
    {
      $exist = DB::table('shops')->where('prefix', '=', $request->shop['prefix'])->first();

      if($exist)
      {
       return response()->json(['status' => false, 'message' => 'Ийм угтвар дугаар бүртгэгдсэн байна']);
      }
      else
      {
        DB::table('shops')->insert(
            [
             'name' => $request->shop['name'],
             'prefix' => $request->shop['prefix'],
             'shop_address' => $request->shop['shop_address']
            ]
            );
            return response()->json(['status' => true]);
      }

    }

}
