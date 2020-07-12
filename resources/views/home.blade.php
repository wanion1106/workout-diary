@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                @include('_sidebar')
            </div>
            <div class="col-sm-10">
                @include('_tweet-form')

                <div class="border border-dark">
                    @foreach ($posts as $post)
                        @include('_tweet')
                    @endforeach
                </div>

                {{ $posts->links() }}

            </div>
        </div>
    </div>
@endsection
