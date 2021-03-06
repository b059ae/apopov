<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
{!! SEOMeta::generate() !!}

<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
      rel="stylesheet" type="text/css">

<!-- Styles -->
{{--    <link href="{{ asset('css/home.css') }}" rel="stylesheet">--}}

<!-- Vendor CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/animate/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css')}}">

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('css/theme.css')}}">
<link rel="stylesheet" href="{{ asset('css/theme-elements.css')}}">
<link rel="stylesheet" href="{{ asset('css/theme-blog.css')}}">
<link rel="stylesheet" href="{{ asset('css/theme-shop.css')}}">

<!-- Current Page CSS -->
<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.css')}}">

<!-- Demo CSS -->
<link rel="stylesheet" href="{{ asset('css/demos/demo-resume.css')}}">

<!-- Skin CSS -->
<link rel="stylesheet" href="{{ asset('css/skins/skin-resume.css')}}">

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/custom.css')}}">

<!-- Head Libs -->
<script src="{{ asset('vendor/modernizr/modernizr.min.js')}}"></script>
