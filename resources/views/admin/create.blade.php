<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bell'Italia</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: flex-start;
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

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        #map {
            height: 100%;
        }
    </style>
</head>


<body>
    <div class="content">
        <div class="title m-b-md">
            <a href="/admin">Bell'Italia Admin</a>
        </div>

        <div class="links">
            <a href="/">Home</a>
            <a target="_blank" rel="noopener noreferrer" href="https://github.com/cyrielmartin/bellitalia">GitHub</a>
        </div>
    </div>
    <div>

            {!! form($form) !!}
    </div>
</body>

</html>
