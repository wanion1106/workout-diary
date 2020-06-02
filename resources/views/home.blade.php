@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                @include('_sidebar')
            </div>
            <div class="col-sm-10">
                @include('_tweet-form')

                <div class="border">
                    @include('_tweet')
                    @include('_tweet')
                    @include('_tweet')
                    @include('_tweet')
                </div>
            </div>
        </div>
    </div>
@endsection
