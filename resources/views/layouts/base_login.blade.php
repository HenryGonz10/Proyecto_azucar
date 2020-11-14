<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <meta name="description" content="Proyecto Analisis" />
    <link rel="stylesheet" href="{{ asset('/Static/bootstrap-4.5.0-dist/css/bootstrap.min.css')}} " />
    <link href="{{ asset('../Static/css/material-kit.min.css')}}" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../Static/img/Logoblanco.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../Static/img/Logoblanco.png') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Sans Pro Regular';
            color: #fff;
            background: url(/Static/img/fondologin.JPG) no-repeat;
            background-size: cover;
            height: 100vh;
            backdrop-filter: blur(2.5px);
        }
    </style>
</head>

<body style="overflow:hidden;">

    @include('includes.navbar_login')

    @yield('content')

    @include('../includes/footer_login')
    @include('includes.scripts')

</body>
</html>

