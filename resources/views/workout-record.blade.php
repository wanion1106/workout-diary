@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                @include('_sidebar')
            </div>
            <div class="col-sm-8">

                <form method="POST" action="{{ route('workout_records.store') }}">
                    @csrf
                    <div class="d-inline-flex justify-content-center border p-3 bg-light">
                        <div class="mr-4 p-2">
                            <input type="text" name="item" class="@error('item') is-invalid @enderror" placeholder="種目名">

                            @error('item')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mr-4 p-2">
                            <input type="number" name="weight" class="@error('weight') is-invalid @enderror">kg

                            @error('weight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mr-4 p-2">
                            <input type="number" name="rep" class="@error('rep') is-invalid @enderror">回

                            @error('rep')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mr-4 p-2">
                            <input type="number" name="set" class="@error('set') is-invalid @enderror">セット


                            @error('set')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    


                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn btn-primary shadow">今日の内容として登録する</button>
                    </div>

                </form>

                <div>
                    <h5>今日の筋トレ内容</h5>

                    @foreach ($workoutRecords as $workoutRecord)

                        <div class="d-flex justify-content-center border p-2">
                            <p class="mr-4">{{ $workoutRecord->item }}</p>
                            
                            @if (isset($workoutRecord->weight))
                                <p class="mr-4">{{ $workoutRecord->weight }}kg</p>
                            @endif

                            <p class="mr-4">{{ $workoutRecord->rep }}回</p>

                            <p class="mr-4">{{ $workoutRecord->set }}セット</p>

                            <div class="d-flex justify-content-end">
                                <form method="POST" action="{{ route('workout_records.delete', $workoutRecord->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">削除</button>
                                </form>
                            </div>
                           
                        </div>
                        
                    @endforeach
                </div>

                <div class="d-flex justify-content-end mt-4 mb-4">
                    <a href="#" class="btn btn-primary shadow">過去の内容を表示</a>
                </div>

            </div>
        </div>
    </div>
@endsection