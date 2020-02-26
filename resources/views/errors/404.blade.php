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

    <style>
        .switch-version {
            z-index: 1000;
        }
        .switch-off {
            display: none;
        }
        .switch-title {
            font-size: 11px;
        }
        .switch-web {
            border-top: 1px solid #33b5e5;
            border-left: 1px solid #33b5e5;
            color: #6b6e72;
            border-top-left-radius: 4px;
            transition: background-color 0.3s;
        }
        .switch-mobile {
            border-bottom: 1px solid #FF8800;
            border-left: 1px solid #FF8800;
            color: #6b6e72;
            border-bottom-left-radius: 4px;
            transition: background-color 0.3s;
        }
        .switch-web.active, .switch-web:not(.active):hover {
            color: white;
            background-color: #33b5e5;
        }
        .switch-mobile.active, .switch-mobile:not(.active):hover {
            color: white;
            background-color: #FF8800;
        }
        .switch-web i, .switch-mobile i {
            position: relative;
            top: 4px;
        }
        .switch-web span, .switch-mobile span {
            width: 100%;
            position: relative;
            top: -4px;
        }
        .switch-web-products {
            border-left: 1px solid #33b5e5;
        }
        .switch-mobile-products {
            border-left: 1px solid #FF8800;
        }
        .switch-version a:last-child>.switch-to {
            -webkit-border-bottom-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .switch-version a:first-child>.switch-to {
            -webkit-border-top-left-radius: 0;
            border-top-left-radius: 0;
        }
        .switch-to-mobile.mdb-vue-mobile {
            background-image: url('https://mdbootstrap.com/img/logo/mdb-angular.png');
            background-position: 0 -84px;
        }
        .switch-to-mobile.mdb-angular-mobile {
            background-image: url('https://mdbootstrap.com/img/logo/mdb-angular.png');
            background-position: 0 0;
        }
        .switch-to-mobile.mdb-react-mobile {
            background-image: url('https://mdbootstrap.com/img/logo/mdb-angular.png');
            background-position: 0 -123px;
        }
    </style>
    <style>

        .err-404-navigation-links li {
            display:inline-block;
        }

        .err-404-navigation-links li:not(:last-child) {
            margin-right: 10px;
        }
    </style>
<body class="error404 mdb-skin-custom theme-mdbootstrap4 woocommerce-no-js currency-eur" >

<main class="container d-flex justify-content-center mx-auto h-100 align-items-center">
    <!--Main layout-->

    <div class="mt-5 pt-5">

        <!-- First row -->
        <div class="row">
            <div class="col-md-12 text-center float-md-none mx-auto">
                <img src="https://mdbootstrap.com/img/Others/404_mdb.png" alt="Error 404" class="img-fluid wow fadeIn">
            </div>
        </div>
        <!-- /.First row -->

        <!-- Second row -->
        <div class="row mt-5">
            <div class="col-md-12 text-center mb-5">
                <h2 class="h2-responsive wow fadeIn mb-4" data-wow-delay="0.2s" style="font-weight:500;">Oops! La page que vous demandez n'existe pas.</h2>
                <ul class="err-404-navigation-links wow fadeIn mt-4" data-wow-delay="0.6s">
                    <li>
                        <a href="/" class="indigo-text">Revenir à la page d'acceuil</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.Second row -->

    </div>

    <!--/.Main layout-->
</main>

</body>

