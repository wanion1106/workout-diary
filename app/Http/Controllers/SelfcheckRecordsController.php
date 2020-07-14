<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SelfcheckRecord;
use App\Http\Requests\SelfcheckRecordsRequest;



class SelfcheckRecordsController extends Controller
{
    public function index()
    {
        return view('selfcheck-record');
    }

    public function store(SelfcheckRecordsRequest $request, SelfcheckRecord $selfcheckRecord)
    {
        $selfcheckRecord->fill($request->all());
        $selfcheckRecord->user()->associate(Auth::user());
        $selfcheckRecord->save();

        return back();

    }
}
