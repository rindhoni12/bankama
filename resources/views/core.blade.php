<!DOCTYPE html>
<html lang="en">

<head>
    @include('be._partials.head')
</head>

<body class="app sidebar-mini">
    @include('be._partials.navbar')
    @include('be._partials.sidebar')
    <main class="app-content">
        @include('be._partials.breadcrumb')
        @yield('main')
    </main>
    @include('be._partials.script')
    @yield('ext_script')
</body>

</html>