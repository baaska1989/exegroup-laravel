<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function getTeachers(Request $request)
    {
        $data = DB::table('teachers')->where(function ($query) use ($request)
        {
            if (!empty($request->orderOptions["first_name"])) {
                $query->where('first_name', 'LIKE', '%' . $request->orderOptions["first_name"] . '%');
            }
        })->orderBy('id', 'desc')
            ->paginate($request->orderOptions['rowsPerPage']);
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getTeacher($id)
    {
        $data = DB::table('teachers')->where('id', $id)->first();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function saveTeacher(Request $request)
    {
        try {
            $status = true;
            $exist = DB::table('teachers')->where('id', $request->id)->first();
            if ($exist)
            {
                DB::table('teachers')->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'note' => $request->note,
                    'level' => $request->level,
                    'language' => $request->location,
                    'updated_at' => Carbon::now()->toDateString(),
                ]);
            } else {
                DB::table('teachers')->insert([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'note' => $request->note,
                    'level' => $request->level,
                    'language' => $request->location,
                    'created_at' => Carbon::now()->toDateString(),
                ]);
            }
            $message = 'Амжилттай хадгаллаа';
        } catch (\Exception $exception)
        {
            $message = $exception->getMessage();
            $status = false;
        }
        return response()->json(['status' => $status, 'message' => $message]);
    }

    public function deleteTeacher($id)
    {

        DB::table('teachers')
            ->where('id', $id)
            ->delete();

        return response()->json(['status' => true]);

    }
}
