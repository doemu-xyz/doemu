<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

						#cover {
								background-color: rgba(33,33,33,0.4);
						}
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
								border-bottom: solid 1px #fff;
								padding-top: 10px;
								padding-bottom: 10px;
								margin-left: 10px;
								margin-right: 10px;
            }
						a:hover {
								background-color: rgba(0,0,0,0.3);
						}

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background-image: url('/image/background.jpg')">D
        <div id="cover" class="flex-center position-ref full-height">
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>
                        <a href="{{ route('register') }}">登録</a>
                    @endauth
                </div>
            <div class="content">
                <div class="title m-b-md">
                    どえむ
                </div>
								<div class="m-b-md">
                                    どえむは、いじめられたい人と、いじめたい人のマッチングサービスです。（※ジョークサイトです）
								</div>

                <div class="links">
                    <a href="{{ route('masochists') }}">マゾヒストを探す（サディスト向け）</a>
                    <a href="{{ route('masochists-add') }}">マゾヒストとして投稿する（マゾヒスト向け）</a>
                </div>
            </div>
        </div>
    </body>
</html>
