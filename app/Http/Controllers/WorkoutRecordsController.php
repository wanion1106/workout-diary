<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutRecordsController extends Controller
{
    public function index()
    {
        return view('workout-record');
    }
}
