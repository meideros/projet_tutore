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

        <div class="container">
                <div class="card">
                    <div class="card-body">
                        <!-- Table -->
                        <table class="table table-striped">
                            <!-- Table head -->
                            <thead class="black-text">
                            <tr>
                                <th>#</th>
                                <th class="indigo-text darken-4">Email</th>
                                <th class="indigo-text darken-4">Année accadémique</th>
                                <th class="indigo-text darken-4">Option</th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            </tbody>
                            <!-- Table body -->
                        </table>
                        <!-- Table -->
                    </div>
                </div>
            <!-- Modal: Ajout admin -->
            <div class="modal fade" id="add_admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog cascading-modal" role="document">

                    <!-- Content -->
                    <div class="modal-content">

                        <!-- Header -->
                        <div class="modal-header indigo darken-3 white-text">
                            <h4 class=""><i class="fas fa-plus"></i> Ajout d'un admin</h4>
                            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Body -->
                        <div class="modal-body mb-0">
                            <form action="">
                                <div class="md-form">
                                    <i class="fas fa-envelope prefix indigo-text"></i>
                                    <input type="text" id="orangeForm-name" class="form-control" placeholder="Email">
                                </div>

                                <div class="md-form">
                                    <i class="fas fa-lock prefix indigo-text"></i>
                                    <input type="password" id="orangeForm-name" class="form-control" placeholder="Mot de passe">
                                </div>

                                <div class="md-form">
                                    <i class="fas fa-lock prefix indigo-text"></i>
                                    <input type="password" id="orangeForm-name" class="form-control" placeholder="Confirmation">
                                </div>

                                <div class="text-center mt-1-half">
                                    <button  type="submit" class="btn btn-indigo mb-1">Valider<i class="fas fa-check ml-1"></i></button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Modal: Subscription -->
            </div>

            <!-- Modal: Modifier donné de connexion -->
            <div class="modal fade" id="mod_data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog cascading-modal" role="document">

                    <!-- Content -->
                    <div class="modal-content">

                        <!-- Header -->
                        <div class="modal-header indigo darken-3 white-text">
                            <h4 class=""><i class="fas fa-edit"></i> Modification des données de connexion</h4>
                            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Body -->
                        <div class="modal-body mb-0">
                            <form action="">
                                <div class="md-form">
                                    <i class="fas fa-envelope prefix indigo-text"></i>
                                    <input value="admin@gmail.com" type="text" id="orangeForm-name" class="form-control" placeholder="Email">
                                </div>

                                <div class="md-form">
                                    <i class="fas fa-lock prefix indigo-text"></i>
                                    <input type="password" id="orangeForm-name" class="form-control" placeholder="Nouveau mot de passe">
                                </div>

                                <div class="md-form">
                                    <i class="fas fa-lock prefix indigo-text"></i>
                                    <input type="password" id="orangeForm-name" class="form-control" placeholder="Confirmation">
                                </div>

                                <div class="text-center mt-1-half">
                                    <button  type="submit" class="btn btn-indigo mb-1">Valider<i class="fas fa-check ml-1"></i></button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Modal: Subscription -->
            </div>

        </div>

    </div>


</main>
<!-- Main layout -->

<!-- Footer -->
<footer class="page-footer pt-0 mt-5 rgba-stylish-light grey darken-3 fixed-bottom">

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
