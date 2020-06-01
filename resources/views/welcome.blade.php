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
                <div class="col-xs-12 cover-img" style="background-image:url('/images/background_img.jpg');">
                    

                    <div class="cover-text text-left">
                        <p style="color: #fff;">ここがテキストですよ！！</p>
                    </div>
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
