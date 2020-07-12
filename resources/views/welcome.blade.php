<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            .cover-img {
                height: 600px;
                display: table;
                width: 100%;
                background-size: cover;
            }

            /* ワイドスクリーン用のCSS */
            @media only screen and (min-width: 1500px) {
                .cover-img {
                    height: 800px;
                }
            }

            /* タブレット用のCSS */
            @media only screen and (min-width : 768px) and (max-width : 1200px) {
                .cover-img {
                    height: 500px;
                }
            }

            /* スマホ用のCSS */
            @media only screen and (max-width: 479px) {
                .cover-img {
                    height: 300px;
                }
            }

            .cover-text {
                display: table-cell;
                vertical-align: middle;
            text-align: center;
            }

            ul, ol {
                        padding: 0.5em 0.5em 0.5em 2em;/*ボックス内の余白*/
                        margin: 10px;
                        color: white;
                    }
                    
            ul li, ol li {
                line-height: 3.0; /*文の行高*/
                padding: 0.5em 0; /*前後の文との余白*/
                font-size: 24px;
                }
            body {
                    /* 画像指定、imagesというフォルダ(ＣＳＳと同じ位置に作ったフォルダ)に入っている*/
                    background-image: url(images/background_img.jpg);  
                    /* 画像を常に上下左右の中央に配置させる */
                    background-position: center center; 
                    /* 画像を繰り返し表示しない */
                    background-repeat: no-repeat;  
                    /* ページなどのコンテンツの高さが画像の高さより大きい時動に固定する */
                    background-attachment: fixed; 
                    /* 画面、ブラウザのサイズに基づいて、背景画像を調整 */
                    background-size: cover;  
                    /* 背景画像が表示されるまでの間に表示される(待機中に表示される)背景のカラー */
                    background-color: #000000; 
                }
        </style>

    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between border-bottom">
            <div class="nav-item">
                <h3 style="color: white;">筋トレ日記</h3>
            </div>
            
            <div class="nav-item">
                @if (Route::has('login'))
                        @auth
                            <a class="btn btn-primary btn-sm rounded-lg" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="btn btn-primary btn-sm rounded-lg" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="btn btn-primary btn-sm rounded-lg" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                @endif
            </div> 
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div>
                    <ul>
                        <li>自分の成長を可視化出来る！！</li>
                        <li>他の人がどんなトレーニングをしてるか見れる！！</li>
                        <li>過去の記録も見れる！！</li>
                    </ul>

                </div>
            </div>
        </div>
           <!-- <div class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between border-bottom">
                <div class="nav-item">
                    <h3 style="color: white;">筋トレ日記</h3>
                </div>
                
                <div class="nav-item">
                    @if (Route::has('login'))
                            @auth
                                <a class="btn btn-primary btn-sm rounded-lg" href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="btn btn-primary btn-sm rounded-lg" href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a class="btn btn-primary btn-sm rounded-lg" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                    @endif
                </div> 
            </div>

        <img src="/images/background_img.jpg" class="img-fluid" alt="Responsive image" width="100%">-->

            
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
