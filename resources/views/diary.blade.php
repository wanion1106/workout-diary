@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                @include('_sidebar')
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-wrap justify-content-center justify-content-around">
                    <div class="card mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="/images/workout.png" width="100%" height="180">
                        <div class="card-body">
                            <h5 class="card-title">筋トレ内容</h5>
                            <p class="card-text">行った筋トレの内容を記録していく所</p>
                            <a href="/diary/workout_records" class="btn btn-primary">記録する</a>
                        </div>
                    </div>

                    <div class="card mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="/images/workout.png" width="100%" height="180">
                        <div class="card-body">
                            <h5 class="card-title">今日の自分</h5>
                            <p class="card-text">自分の写真を撮って体の変化を記録することができます</p>
                            <a href="/diary/selfy_records" class="btn btn-primary">自撮りを追加する</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-center justify-content-around">
                    <div class="card mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="/images/workout.png" width="100%" height="180">
                        <div class="card-body">
                            <h5 class="card-title">自己評価</h5>
                            <p class="card-text">今日行った、トレーニングについて一言書いてください。</p>
                            <a href="/diary/selfcheck_records" class="btn btn-primary">一言書く</a>
                        </div>
                    </div>

                    <div class="card mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="/images/workout.png" width="100%" height="180">
                        <div class="card-body">
                            <h5 class="card-title">今までの日記</h5>
                            <p class="card-text">今までの日記を確認することができます。</p>
                            <a href="/diary/records" class="btn btn-primary">自分の成長を確認する</a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection