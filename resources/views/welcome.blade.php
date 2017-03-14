<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CodeSmasher</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            body {
                background-color: #677c8e;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100;
                margin: 0;
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

            .links > a{
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                width: 200px;
                background-color: #d6dadc;
                padding-top: 25px;
                padding-bottom: 15px;         
            }    

            .m-b-md {
                margin-bottom: 30px;
            }

            .par{
                text-align: center;
                font-family: Lucida Console;
                font-size: 20pt;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">                  
                        <a href="{{ url('/register') }}">Join</a>
                </div>
            @endif

            <div class="content">
                    <img src="images\smash.png">
                    <p class="par">"Fast learning is not always the best and deepest"</p>
                </div>
            </div>
        </div>
    </body>
</html>
