@extends('layouts.app')

@section('content')
    @include('home/about_links')
    @include('home/skills')
    @include('home/portfolio')
    @include('home/blog')
    {{--    @include('home/portfolio')--}}
    {{--    @include('home/blog')--}}
    {{--<script src="{{ asset('js/home.js') }}"></script>--}}
@endsection
