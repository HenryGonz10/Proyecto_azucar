<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <meta name="description" content="Proyecto Analisis" />
    <link rel="stylesheet" href="{{ asset('/Static/bootstrap-4.5.0-dist/css/bootstrap.min.css')}} " />
    <link rel="stylesheet" href="{{ asset('/Static/css/login.css') }}">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../Static/img/Logoblanco.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../Static/img/Logoblanco.png') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body style="overflow:hidden;">

    @include('includes.navbar_login')

    <div style="display:flex; justify-content: center; align-items:center;">
        <div class="col-lg-3 col-md-5 col-sm-5 vertical-center">
            <div class="card bg-white" style="display:flex; justify-content: center; align-items:center;">
                <div class="card-header bg-white">
                    <img id="logo" src="{{ asset('/Static/img/logo.png') }}" alt="logo de empresa">
                </div>
                <div class="card-body">
                    <form class="flex-column">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-white"><i class="far fa-envelope"></i></div>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-white"><i class="fas fa-lock"></i></div>
                                </div>
                                <input type="Password" class="form-control" placeholder="Contraseña">
                            </div>
                        </div>

                        <div class="col-auto my-1 float-right" style="padding-top: 5%;">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label text-black-50" for="customControlAutosizing">Recordarme</label>
                            </div>
                        </div>

                        <br><br>

                        <center><button class="btn btn-success my-2" type="submit">Entrar</button></center>
                    </form>

                    <a class="text-small my-4 text-center" href="#">Olvidaste tu Contraseña?</a>
                </div>

            </div>
        </div>
    </div>

    @include('../includes/footer_login')

</body>
</html>

