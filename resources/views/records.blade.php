@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                @include('_sidebar')
            </div>

            <div class="col-sm-8">
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" name="date" value="{{ $date }}" placeholder="yyyy-mm-dd">
                        <input type="submit" value="検索">
                    </div>
                </form>

                <div>
                    @if($workoutRecords !== null)
                        <div class="row">
                            @foreach($workoutRecords as $workoutRecord)
                            <div class="col-md-3">
                            {{ $workoutRecord->item }}
                            </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection