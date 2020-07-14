@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                @include('_sidebar')
            </div>

            <div class="col-sm-8">
                <form method="POST" action="{{ route('selfy_records.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="selfy_img" class="btn btn-secondary d-flex justify-content-center">
                            +写真を追加
                            <input type="file" name="selfy_img" id="selfy_img" class="d-none">
                        </label>
                    </div>

                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn btn-primary shadow">今日の内容として登録する</button>
                    </div>

                </form>

                <div>
                    <h5>今までの自分</h5>

                    @foreach($selfyRecords as $selfyRecord)
                        <div>
                            <img src="{{ $selfyRecord->selfy_img }}">
                            <p>{{ $selfyRecord->created_at }}</p>
                        </div>

                        <div class="d-flex justify-content-end">
                            <form method="POST" action="{{ route('selfy_records.delete', $selfyRecord->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">削除</button>
                            </form>
                        </div>
                    @endforeach


                </div>

                <div class="d-flex justify-content-end mt-4 mb-4">
                    <a href="/diary/records" class="btn btn-primary shadow">特定の日時の写真を見る</a>
                </div>
            </div>
        </div>
    </div>
@endsection