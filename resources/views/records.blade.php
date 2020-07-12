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

                <div class="border border-dark">
                    <div class="m-4">
                        <h5>筋トレ内容</h5>
                        @if($workoutRecords !== null)
                            @foreach ($workoutRecords as $workoutRecord)

                                <div class="d-flex justify-content-center border border-dark p-2">
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
                        <h5>写真</h5>

                        @if($selfyRecords != null)

                            @foreach($selfyRecords as $selfyRecord)
                                <img src="/storage/selfy/{{ $selfyRecord->selfy_img }}">
                            @endforeach
                        @endif
                    </div>

                    <div class="m-4">
                        <h5>自己評価</h5>
                        @if($selfcheckRecords != null)
                            @foreach($selfcheckRecords as $selfcheckRecord)
                                <p>{{ $selfcheckRecord->body }}</p>
                            @endforeach
                        @endif
                    </div>
                    <!--
                        @if (isset($date))
                        <form method="POST" action="{{ route('records.edit', ['created_at' => $date]) }}">
                            @csrf
                            <input type="hidden" name="date" value="{{ $date }}">
                            <button type="submit" class="btn btn-danger">編集</button>
                        </form>
                    @endif
                    -->
                </div>
            </div>
        </div>
    </div>
@endsection