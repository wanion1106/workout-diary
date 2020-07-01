<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //日付を取得
        $date = $request->input('date');

        //もし日付が入力されている場合
        if(!empty($date))
        {   
            //筋トレ記録から検索
            $workoutRecords = DB::table('workout_records')
            ->where('user_id', Auth::id())
            ->whereDate('created_at', $date)
            ->get();
        

            $selfyRecords = DB::table('selfy_records')
            ->where('user_id', Auth::id())
            ->whereDate('created_at', $date)
            ->get();

            $selfcheckRecords = DB::table('selfcheck_records')
            ->where('user_id', Auth::id())
            ->whereDate('created_at', $date)
            ->get();

        }
        else
        {
            $workoutRecords = null;
            $selfyRecords = null;
            $selfcheckRecords = null;
        }
        //検索フォームへ
        return view('records',[
            'workoutRecords' => $workoutRecords,
            'selfyRecords' => $selfyRecords,
            'selfcheckRecords' => $selfcheckRecords,
            'date' => $date,
            ]);
    }
}
