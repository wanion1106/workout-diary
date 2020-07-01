@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                @include('_sidebar')
            </div>

            <div class="col-sm-8">
                <form method="POST" action="/diary/selfcheck_records/store">
                    @csrf
                    <div>
                        <textarea name="body" class="form-control" placeholder="今日のコメントを書く"></textarea>

                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary shadow">今日の内容として登録する</button>
                    </div>

                </form>

                <div class="d-flex justify-content-end mt-5 mb-4">
                    <a href="/diary/records" class="btn btn-primary shadow">今までのコメントをみる</a>
                </div>
            </div>
        </div>
    </div>
@endsection