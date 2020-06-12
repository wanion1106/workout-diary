<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WorkoutRecordsRequest;
use Illuminate\Support\Facades\Auth;
use App\WorkoutRecord;

class WorkoutRecordsController extends Controller
{
    public function index()
    {
        $workoutRecords = WorkoutRecord::where('user_id', Auth::id())->whereDate('created_at', now())->latest()->get();

        return view('workout-record',[
            'workoutRecords' => $workoutRecords
        ]);
    }

    public function store(WorkoutRecordsRequest $request, WorkoutRecord $workoutRecord)
    {
        $workoutRecord->fill($request->all());
        $workoutRecord->user()->associate(Auth::user());
        $workoutRecord->save();

        return redirect()->to('/diary/workout_records');
    }

    public function delete(WorkoutRecord $workoutRecord)
    {
        $workoutRecord->delete();

        return back();
    }
}
