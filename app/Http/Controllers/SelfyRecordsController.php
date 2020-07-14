<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SelfyRecordsRequest;
use App\SelfyRecord;
//use Carbon\Carbon;


class SelfyRecordsController extends Controller
{
    public function index()
    {
        $selfyRecords = SelfyRecord::where('user_id', Auth::id())->latest()->get();

        return view('selfy-record',[
            'selfyRecords' => $selfyRecords
        ]);
    }

    public function store(SelfyRecordsRequest $request, SelfyRecord $selfyRecord)
    {
        if ($request->selfy_img !== null)
        {
            $filePath = $request->selfy_img->store('public/selfy');
            $selfyRecord->selfy_img = str_replace('public/selfy/', '', $filePath);

        }
        
        $selfyRecord->user()->associate(Auth::user());
        $selfyRecord->save();

        return back();
    }

    public function delete(SelfyRecord $selfyRecord)
    {
        $selfyRecord->delete();

        return back();
    }
}
