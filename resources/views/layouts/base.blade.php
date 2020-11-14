<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <title>Dashboard</title>

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../Static/img/Logoblanco.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../Static/img/Logoblanco.png') }}">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- CSS Files -->
    <link href="{{ asset('../Static/css/material-kit.min.css')}}" rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
        @include('../includes/sidebar')

        <div class="container-fluid" style="padding-left: 0px; padding-right:0px;">
            @include('../includes/navbar')

            <div class="container-fluid">
                @section('contains')

                @endsection
            </div>


            @include('../includes/footer')
        </div>
    </div>

    @include('../includes/scripts')
</body>

</html>
