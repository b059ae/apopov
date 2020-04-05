<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts/app/head')
</head>
<body data-spy="scroll" data-target=".wrapper-spy">
<div role="main" class="main">
        <!-- Nav -->
            @section('nav')
                @include('layouts/app/nav/float')
            @show
        <!-- /Nav -->
        <!-- Header -->
            @include('layouts/app/header')
        <!-- /Header -->
        <!-- Content -->
            <main class="content">
                @yield('content')
            </main>
        <!-- /Content -->
        <!-- Footer -->
            @include('layouts/app/footer')
        <!-- /Footer -->
</div>
@include('layouts/app/js')
@stack('inline-scripts')
</body>
</html>
