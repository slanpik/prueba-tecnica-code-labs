<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap CSS  --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- Custom CSS --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('css/styles.css')}}">
    {{-- FA CSS --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>{{ config('app.name', 'CODE-TEST') }}</title>

</head>

<body>

    <header>
        {{-- Navbar template --}}
        @include('layouts.template.navbar')
    </header>

    <main class="main-container">
        {{-- Main content --}}
        <div class="container main-container">
            @yield('content')
        </div>
    </main>

    {{-- footer  --}}
    <footer class=" color-used footer">

        <!-- Copyright -->
        <div class="footer-copyright center py-3">
            ▲▼ 2019 Francisco Sánchez -
            <a target="_blank" href="https://testbv.000webhostapp.com/"> Sitio Web para pruebas de captcha</a> ▼▲
        </div>


    </footer>

    {{-- Jquery SCRIPT --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    {{-- Popper SCRIPT --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    {{-- Bootstrap SCRIPT --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    {{-- DATATABLES SCRIPTS --}}
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    {{-- Custom SCRIPT --}}
    @yield('script')
</body>

</html>