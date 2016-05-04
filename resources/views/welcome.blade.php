<!DOCTYPE html>
<html>
    <head>
        <title>Hand Hygiene Compliance</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        {!! Html::style('css/app.css') !!}

        {!! Html::script('js/app.js') !!}

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 5rem;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Hand Hygiene Monitoring for Jackson Memorial</div>
                @if (Auth::guest())
                    <a href="{{ url('/login') }}"  class="btn btn-primary">Login</a>
                    <a href="{{ url('/register') }}"  class="btn btn-primary">Register</a>
                @else
                    Welcome back, {!! Auth::user()->name !!}
                    <a href="{{ url('/observe') }}"  class="btn btn-primary">Welcome back, {!! Auth::user()->name !!} </a>
                @endif
            </div>

        </div>
    </body>
</html>
