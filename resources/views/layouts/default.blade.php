<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset("/css/mdb.min.css")}}">

    <!-- JQuery -->
    <script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset("js/popper.min.js")}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset("js/bootstrap.js")}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset("js/mdb.min.js")}}"></script>

    <!-- Your custom styles (optional) -->
    <style>
        html,
        body,
        header,
        .view {
            height: 100%;
        }
        @media (min-width: 560px) and (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 650px;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view  {
                height: 650px;
            }
        }
    </style>
</head>

<body class="fixed-sn grey">
    <div class="container">
        @yield('content')
    </div>
</body>
