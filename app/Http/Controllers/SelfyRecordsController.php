<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SelfyRecordsRequest;
use App\SelfyRecord;
//use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


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
            $filePath = $request->selfy_img;
            $path = Storage::disk('s3')->putFile('/', $filePath, 'public');
            $selfyRecord->selfy_img = Storage::disk('s3')->url($path);

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
