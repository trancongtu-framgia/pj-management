<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="../assets/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png">
    <link rel="stylesheet" href="{{ asset('../css/template-css.css') }}" />
</head>
<body>
    @include('shared.menu')
    @include('shared.sidebar')
    <div class="page-container">
        <div class="main-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('js/template-js.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/template-jquery.js') }}"></script>
    <script src="{{ asset('js/default.js') }}"></script>
</body>
</html>
