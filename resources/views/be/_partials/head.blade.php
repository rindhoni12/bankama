<title>Data {{ ucfirst(Request::segment(1)) }} - {{ config('app.name') }}</title>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Main CSS-->
<link rel="stylesheet" type="text/css" {{-- href="{{ asset('assets/css/main.css') }}" -- ini sama bawahnya sama, tp yg
    bawah lbh simple. gunakan yg ini kalau ambil gambar aja --}} href="/assets/css/main.css" />
<!-- Font-icon css-->
<link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<link rel="shortcut icon" href="{{ asset('/assets/bankama-logo.png') }}" />