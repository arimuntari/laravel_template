<!DOCTYPE html>
<html lang="en">
@php
$appName = config('app.name');
@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$appName}} | Log in </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css?v=3.2.0')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="index2.html" class="h1"><b>Admin</b>{{$appName}}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan login dengan akun anda</p>
                @include("block.error")
                <form action='{{ URL::to("/login") }}' method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="username" type="text" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>


    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('template/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>

</html>