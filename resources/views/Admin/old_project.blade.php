<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Espace Administration</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset("css/mdb.min.css")}}">
    <!-- Your custom styles (optional) -->
    <style>

    </style>
</head>

<body class="fixed-sn white-skin">

<!-- Main Navigation -->
<header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav fixed">
        <ul class="custom-scrollbar">

            <!-- Logo -->
            <li class="logo-sn waves-effect py-3">
                <div class="text-center">
                    <a href="#" class="pl-0"><img src="{{asset("img/starter.png")}} " width="100"></a>
                </div>
            </li>

            <hr>

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">

                {{--                    <li>--}}
                {{--                        <a class="collapsible-header waves-effect arrow-r">--}}
                {{--                            <i class="w-fa far fa-check-square"></i>Forms<i class="fas fa-angle-down rotate-icon"></i>--}}
                {{--                        </a>--}}
                {{--                        <div class="collapsible-body">--}}
                {{--                            <ul>--}}
                {{--                                <li>--}}
                {{--                                    <a href="../forms/basic.html" class="waves-effect">Basic</a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="../forms/extended.html" class="waves-effect">Extended</a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                    <li>--}}
                {{--                        <a class="collapsible-header waves-effect arrow-r">--}}
                {{--                            <i class="w-fa fas fa-table"></i>Tables<i class="fas fa-angle-down rotate-icon"></i>--}}
                {{--                        </a>--}}
                {{--                        <div class="collapsible-body">--}}
                {{--                            <ul>--}}
                {{--                                <li>--}}
                {{--                                    <a href="../tables/basic.html" class="waves-effect">Basic</a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="../tables/extended.html" class="waves-effect">Extended</a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="../tables/datatables.html" class="waves-effect">DataTables.net</a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                    <li>--}}
                {{--                        <a class="collapsible-header waves-effect arrow-r">--}}
                {{--                            <i class="w-fa fas fa-map"></i>Maps<i class="fas fa-angle-down rotate-icon"></i>--}}
                {{--                        </a>--}}
                {{--                        <div class="collapsible-body">--}}
                {{--                            <ul>--}}
                {{--                                <li>--}}
                {{--                                    <a href="../maps/google.html" class="waves-effect">Google Maps</a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="../maps/full.html" class="waves-effect">Full screen map</a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="../maps/vector.html" class="waves-effect">Vector world map</a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}

                <!-- Simple link -->
                    <li>
                        <a href="{{route("old_project")}}" class="collapsible-header waves-effect black-text"><i class=" fas fa-list"></i>Ancien Projet Tutoré</a>
                    </li>


                </ul>
            </li>
            <!-- Side navigation links -->

        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top  scrolling-navbar double-nav indigo darken-4 white-text">

        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse white-text"><i class="fas fa-bars"></i></a>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb-dn mr-auto">
            <a href="{{route("dashboard")}}" class="white-text"><p>Espace Administration</p></a>
        </div>

        <div class="d-flex change-mode">

            <!-- Navbar links -->
            <ul class="nav navbar-nav nav-flex-icons ml-auto white-text">
                <!-- Dropdown -->
                <li class="nav-item dropdown notifications-nav white-text">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cog white-text"></i>
                        <span class="d-none d-md-inline-block white-text">Paramètre</span>
                    </a>
                    <div class="dropdown-menu dropdown-dark white-text" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_admin">
                            <i class="fas fa-plus mr-2" aria-hidden="true"></i>
                            <span>Nouveau compte Admin</span>
                        </a>

                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#mod_data">
                            <i class="fas fa-user mr-2" aria-hidden="true"></i>
                            <span>Données de connexion</span>
                        </a>
                        <a class="dropdown-item" href="{{route("list")}}">
                            <i class="fas fa-list mr-2" aria-hidden="true"></i>
                            <span>Liste des Admins</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link waves-effect"><i class="fas fa-user white-text"></i> <span class="clearfix d-none d-sm-inline-block white-text">Déconnexion</span></a>
                </li>
            </ul>
            <!-- Navbar links -->

        </div>

    </nav>
    <!-- Navbar -->


</header>
<!-- Main Navigation -->

<!-- Main layout -->
<main>

    <div class="container-fluid">
        <section>
             <h4 class="text-center pb-2"><strong>Année Académique : 2019-2020</strong></h4>
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-6">

                        <!-- Accordion wrapper -->
                        <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                            <span  class="indigo-text"><strong>Spécialité : SRS</strong></span>

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header white " role="tab" id="headingTwo1">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#SRS1"
                                       aria-expanded="false" aria-controls="collapseTwo1">
                                        <h6 class="mb-0 black-text">
                                             Groupe #1 <i class="fas fa-angle-down rotate-icon"></i>
                                        </h6>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="SRS1" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                     data-parent="#accordionEx1">
                                    <div class="card-body text-white">
                                            <ul class="list-group z-depth-1">
                                                <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                    <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                                    <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                                </li>

                                                <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                    <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                                </li>

                                                <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                    <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                                </li>

                                                <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                    <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                                </li>

                                            </ul>
                                        <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                        </p>
                                        <!-- Grid column -->
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header white " role="tab" id="headingTwo1">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#SRS2"
                                       aria-expanded="false" aria-controls="collapseTwo1">
                                        <h6 class="mb-0 black-text">
                                            Groupe #2 <i class="fas fa-angle-down rotate-icon"></i>
                                        </h6>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="SRS2" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                     data-parent="#accordionEx1">
                                    <div class="card-body text-white">
                                        <ul class="list-group z-depth-1">
                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                                <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                        </ul>
                                        <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                        </p>
                                        <!-- Grid column -->
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header white " role="tab" id="headingTwo1">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#SRS3"
                                       aria-expanded="false" aria-controls="collapseTwo1">
                                        <h6 class="mb-0 black-text">
                                            Groupe #3 <i class="fas fa-angle-down rotate-icon"></i>
                                        </h6>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="SRS3" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                     data-parent="#accordionEx1">
                                    <div class="card-body text-white">
                                        <ul class="list-group z-depth-1">
                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                                <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                        </ul>
                                        <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                        </p>
                                        <!-- Grid column -->
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                        </div>
                        <!-- Accordion wrapper -->

                    </div>
                    <div class="col-md-6">

                        <!-- Accordion wrapper -->
                        <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                            <span  class="indigo-text"><strong>Spécialité : AL</strong></span>

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header white " role="tab" id="headingTwo1">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#AL1"
                                       aria-expanded="false" aria-controls="collapseTwo1">
                                        <h6 class="mb-0 black-text">
                                            Groupe #1 <i class="fas fa-angle-down rotate-icon"></i>
                                        </h6>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="AL1" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                     data-parent="#accordionEx1">
                                    <div class="card-body text-white">
                                        <ul class="list-group z-depth-1">
                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                                <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                        </ul>
                                        <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                        </p>
                                        <!-- Grid column -->
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header white " role="tab" id="headingTwo1">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#AL2"
                                       aria-expanded="false" aria-controls="collapseTwo1">
                                        <h6 class="mb-0 black-text">
                                            Groupe #2 <i class="fas fa-angle-down rotate-icon"></i>
                                        </h6>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="AL2" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                     data-parent="#accordionEx1">
                                    <div class="card-body text-white">
                                        <ul class="list-group z-depth-1">
                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                                <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                        </ul>
                                        <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                        </p>
                                        <!-- Grid column -->
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header white " role="tab" id="headingTwo1">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#AL3"
                                       aria-expanded="false" aria-controls="collapseTwo1">
                                        <h6 class="mb-0 black-text">
                                            Groupe #3 <i class="fas fa-angle-down rotate-icon"></i>
                                        </h6>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="AL3" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                     data-parent="#accordionEx1">
                                    <div class="card-body text-white">
                                        <ul class="list-group z-depth-1">
                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                                <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                                <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            </li>

                                        </ul>
                                        <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                        </p>
                                        <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                        </p>
                                        <!-- Grid column -->
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                        </div>
                        <!-- Accordion wrapper -->

                    </div>
                    <!-- Grid column -->
                </div>
            </section>
        <hr>
        <section>
            <h4 class="text-center pb-2"><strong>Année Académique : 2019-2020</strong></h4>
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6">

                    <!-- Accordion wrapper -->
                    <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                        <span  class="indigo-text"><strong>Spécialité : SRS</strong></span>

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header white " role="tab" id="headingTwo1">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#SRS1"
                                   aria-expanded="false" aria-controls="collapseTwo1">
                                    <h6 class="mb-0 black-text">
                                        Groupe #1 <i class="fas fa-angle-down rotate-icon"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="SRS1" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                 data-parent="#accordionEx1">
                                <div class="card-body text-white">
                                    <ul class="list-group z-depth-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                    </ul>
                                    <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                    </p>
                                    <!-- Grid column -->
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header white " role="tab" id="headingTwo1">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#SRS2"
                                   aria-expanded="false" aria-controls="collapseTwo1">
                                    <h6 class="mb-0 black-text">
                                        Groupe #2 <i class="fas fa-angle-down rotate-icon"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="SRS2" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                 data-parent="#accordionEx1">
                                <div class="card-body text-white">
                                    <ul class="list-group z-depth-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                    </ul>
                                    <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                    </p>
                                    <!-- Grid column -->
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header white " role="tab" id="headingTwo1">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#SRS3"
                                   aria-expanded="false" aria-controls="collapseTwo1">
                                    <h6 class="mb-0 black-text">
                                        Groupe #3 <i class="fas fa-angle-down rotate-icon"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="SRS3" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                 data-parent="#accordionEx1">
                                <div class="card-body text-white">
                                    <ul class="list-group z-depth-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                    </ul>
                                    <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                    </p>
                                    <!-- Grid column -->
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                    </div>
                    <!-- Accordion wrapper -->

                </div>
                <div class="col-md-6">

                    <!-- Accordion wrapper -->
                    <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                        <span  class="indigo-text"><strong>Spécialité : AL</strong></span>

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header white " role="tab" id="headingTwo1">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#AL1"
                                   aria-expanded="false" aria-controls="collapseTwo1">
                                    <h6 class="mb-0 black-text">
                                        Groupe #1 <i class="fas fa-angle-down rotate-icon"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="AL1" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                 data-parent="#accordionEx1">
                                <div class="card-body text-white">
                                    <ul class="list-group z-depth-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                    </ul>
                                    <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                    </p>
                                    <!-- Grid column -->
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header white " role="tab" id="headingTwo1">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#AL2"
                                   aria-expanded="false" aria-controls="collapseTwo1">
                                    <h6 class="mb-0 black-text">
                                        Groupe #2 <i class="fas fa-angle-down rotate-icon"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="AL2" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                 data-parent="#accordionEx1">
                                <div class="card-body text-white">
                                    <ul class="list-group z-depth-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                    </ul>
                                    <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                    </p>
                                    <!-- Grid column -->
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header white " role="tab" id="headingTwo1">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#AL3"
                                   aria-expanded="false" aria-controls="collapseTwo1">
                                    <h6 class="mb-0 black-text">
                                        Groupe #3 <i class="fas fa-angle-down rotate-icon"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="AL3" class="collapse white " role="tabpanel" aria-labelledby="headingTwo1"
                                 data-parent="#accordionEx1">
                                <div class="card-body text-white">
                                    <ul class="list-group z-depth-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                            <span class="badge badge-dark darken-4 badge-pill">Chef de groupe</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center indigo-text font-weight-bold">
                                            <span class="text-uppercase font-weight-bold" style="padding-left: 10%">GNACADJA Lucas</span>
                                        </li>

                                    </ul>
                                    <p class="black-text mt-2" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                            Thème : "Le thème du groupe 1"
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le cachier des charges </a>
                                             </span>
                                    </p>
                                    <p class="black-text mt-1" style="margin-left: 14%">
                                            <span style="font-size: 15px;">
                                                Voir <a href="" class="indigo-text darken-4"> le document final </a>
                                             </span>
                                    </p>
                                    <!-- Grid column -->
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                    </div>
                    <!-- Accordion wrapper -->

                </div>
                <!-- Grid column -->
            </div>
        </section>
        <!-- Section: Close by default -->
    </div>


</main>
<!-- Main layout -->

<!-- Footer -->
<footer class="page-footer pt-0 mt-5 rgba-stylish-light grey darken-3">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © {{$year}} Copyright: Tout droit réservé </a>
        </div>
    </div>

</footer>
<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset("js/popper.min.js")}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset("js/bootstrap.js")}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset("js/mdb.min.js")}}"></script>

<!-- Initializations -->
<script>

    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>

<!-- Charts -->
<script>
    $(document).ready(function () {

    });
    // Small chart
    $(function () {
        $('.min-chart#chart-sales').easyPieChart({
            barColor: "#FF5252",
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });
    });

    // Main chart
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                fillColor: "#fff",
                backgroundColor: 'rgba(255, 255, 255, .3)',
                borderColor: 'rgba(255, 255, 255)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        },
        options: {
            legend: {
                labels: {
                    fontColor: "#fff",
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: true,
                        color: "rgba(255,255,255,.25)"
                    },
                    ticks: {
                        fontColor: "#fff",
                    },
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        display: true,
                        color: "rgba(255,255,255,.25)"
                    },
                    ticks: {
                        fontColor: "#fff",
                    },
                }],
            }
        }
    });

</script>

</body>

</html>
