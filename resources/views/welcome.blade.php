<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Admin - Artha Mas Abadi</title>
    <link rel="shortcut icon" href="{{ asset('/assets/bankama-logo.png') }}" />
</head>

<body>
    <section class="material-half-bg">
        <div class="cover-admin"></div>
    </section>
    <section class="login-content">
        <div class="logo d-flex justify-content-center">
            {{-- <h1>Artha Mas Abadi</h1> --}}
            <img src="{{ asset('/assets/logo-full.png') }}" alt="logo" width="300px" style="object-fit: cover">
        </div>

        <div class="form-group btn-container">
            <a href="{{ route('login') }}" class="btn btn-primary btn-block">
                <i class="fa fa-sign-in fa-lg fa-fw"></i>Login sebagai Admin
            </a>
        </div>

    </section>
    <!-- Essential javascripts for application to work-->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="/assets/js/plugins/pace.min.js"></script>
    <!-- <script type="text/javascript">
            // Login Page Flipbox control
            $('.login-content [data-toggle="flip"]').click(function () {
                $('.login-box').toggleClass('flipped');
                return false;
            });
        </script> -->
</body>

</html>