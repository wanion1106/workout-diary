<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\WorkoutRecord;
use App\http\Requests\SelfcheckRecordsRequest;



class SelfcheckRecordsController extends Controller
{
    public function index()
    {
        return view('selfcheck-record');
    }
}
