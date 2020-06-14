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
                        <label for="selfy_img" class="btn btn-secondary">
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

                    @foreach($images as $image)
                        <div>
                            <img src="/storage/selfy/{{ $image->selfy_img }}">
                            <p>何日前</p>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-end mt-4 mb-4">
                    <a href="#" class="btn btn-primary shadow">特定の日時の写真を見る</a>
                </div>
            </div>
        </div>
    </div>
@endsection