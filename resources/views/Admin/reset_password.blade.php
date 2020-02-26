@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

            <!-- Form with header -->
            <form action="">

                <div class="card wow fadeIn" data-wow-delay="0.3s">
                    <div class="card-body">

                        <!-- Header -->
                        <div class="form-header indigo">
                            <h3 class="font-weight-500 my-2 py-1"><i class="fas fa-lock"></i> Réinitialiser le mot de passe </h3>
                        </div>

                        <!-- Body -->
                        <div class="md-form">
                            <i class="fas fa-envelope prefix indigo-text"></i>
                            <input type="text" id="orangeForm-name" class="form-control" placeholder="Votre email">
                        </div>

                        <div class="md-form">
                            <i class="fas fa-lock prefix indigo-text"></i>
                            <input type="password" id="orangeForm-pass" class="form-control" placeholder="Nouveau mot de passe">
                        </div>

                        <div class="md-form">
                            <i class="fas fa-lock prefix indigo-text"></i>
                            <input type="password" id="orangeForm-pass" class="form-control" placeholder="Confirmer le mot de passe">
                        </div>

                        <div class="text-center">
                            <button id="submit" class=" btn indigo btn-lg " type="submit">Valider</button>
                            <hr class="mt-4">
                        </div>

                    </div>
                </div>
            </form>
            <!-- Form with header -->
        </div>
    </div>

    <!-- Custom scripts -->
    <script>
        // Material Select Initialization
        $(document).ready(function () {

        });
    </script>

@stop

