@extends('layouts.default')
@section('content')
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

                    <!-- Form with header -->
                    <form action="">

                    <div class="card wow fadeIn" data-wow-delay="0.3s">
                        <div class="card-body">

                            <!-- Header -->
                            <div class="form-header indigo darken-4">
                                <h3 class="font-weight-500 my-2 py-1"><i class="fas fa-user"></i> Connexion </h3>
                            </div>

                            <!-- Body -->
                            <div class="md-form">
                                <i class="fas fa-envelope prefix indigo-text darken-4"></i>
                                <input type="text" id="orangeForm-name" class="form-control" placeholder="Votre email">
                            </div>

                            <div class="md-form">
                                <i class="fas fa-lock prefix indigo-text darken-4"></i>
                                <input type="password" id="orangeForm-pass" class="form-control" placeholder="Votre mot de passe">
                            </div>

                            <div class="text-center">
                                <button  class=" btn indigo btn-lg darken-4" type="submit">Valider</button>
                                <hr class="mt-4">
                                <div class="inline-ul text-center d-flex justify-content-center">
                                    <a class="p-2 m-2 fa-lg darken-4 indigo-text" style="font-size: 15px;" id="submit"><span>Mot de passe oublié ?</span></a>
                                </div>
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

        $("#submit").on('click', function () {
            window.location.href = "{{route("password_forgotten")}}"
        })


    });
</script>

@stop

