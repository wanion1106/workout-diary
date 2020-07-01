@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                @include('_sidebar')
            </div>

            <div class="col-sm-8">
                <form class="form-inline mb-4">
                    <div class="form-group">
                        <input type="text" name="date" value="{{ $date }}" placeholder="yyyy-mm-dd">
                        <input type="submit" value="検索">
                    </div>
                </form>

                <div class="border">
                    <div class="m-4">
                        <div class="d-flex justify-content-start">
                            <h5>筋トレ内容</h5>

                            <form method="POST" action="">
                                @csrf
                                <button type="submit" class="btn btn-danger">編集</button>
                            </form>
                        </div>
            
                        @if($workoutRecords !== null)
                            @foreach ($workoutRecords as $workoutRecord)

                                <div class="d-flex justify-content-center border p-2">
                                    <p class="mr-4">{{ $workoutRecord->item }}</p>
                                    
                                    @if (isset($workoutRecord->weight))
                                        <p class="mr-4">{{ $workoutRecord->weight }}kg</p>
                                    @endif

                                    <p class="mr-4">{{ $workoutRecord->rep }}回</p>

                                    <p class="mr-4">{{ $workoutRecord->set }}セット</p>
                                
                                </div>

                            @endforeach
                        @endif
                    </div>

                    <div class="m-4">
                        <div class="d-flex justify-content-start">
                            <h5>写真</h5>

                            <form method="POST" action="">
                                @csrf
                                <button type="submit" class="btn btn-danger">編集</button>
                            </form>
                        </div>

                        @if($selfyRecords != null)

                            @foreach($selfyRecords as $selfyRecord)
                                <img src="/storage/selfy/{{ $selfyRecord->selfy_img }}">
                            @endforeach
                        @endif
                    </div>

                    <div class="m-4">
                        <div class="d-flex justify-content-start">
                            <h5>自己評価</h5>

                            <form method="POST" action="">
                                @csrf
                                <button type="submit" class="btn btn-danger">編集</button>
                            </form>
                        </div>

                        @if($selfcheckRecords != null)
                            @foreach($selfcheckRecords as $selfcheckRecord)
                                <p>{{ $selfcheckRecord->body }}</p>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection