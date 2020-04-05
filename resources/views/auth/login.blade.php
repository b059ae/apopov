@extends('layouts.app')

@section('nav')
@endsection

@section('content')
    <section id="skills" class="section section-no-border bg-color-light m-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 mb-4 mb-md-0">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="featured-box featured-box-primary text-left mt-5">
                                <div class="box-content">
                                    <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Sign in</h4>
                                    <form action="{{route('login')}}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="font-weight-bold text-dark text-2" for="username">
                                                    Username
                                                </label>
                                                <input type="text" name="username" id="username" class="form-control form-control-lg" required="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="font-weight-bold text-dark text-2" for="password">
                                                    Password
                                                </label>
                                                <input type="password" name="password" id="password" class="form-control form-control-lg" required="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col text-center">
                                                <input type="submit" value="Sign in" class="btn btn-primary btn-modern">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

{{--                            <h2 class="login__title">--}}
{{--                                Личный кабинет--}}
{{--                            </h2>--}}
{{--                            <form class="login__form" method="POST" action="{{route('login')}}" id="login-form">--}}
{{--                                @csrf--}}
{{--                                @if ($errors->has('phone') || $errors->has('password'))--}}
{{--                                    <span class="register__description algn-center">--}}
{{--                {{ $errors->first('phone') }}--}}
{{--                                        {{ $errors->first('password') }}--}}
{{--                <br/>--}}
{{--                <br/>--}}
{{--                Для получения доступа в личный кабинет свяжитесь по телефону <a href="tel:+78005513686">8 800 551 36 86</a> или оставьте заявку, мы с Вами свяжемся.--}}
{{--            </span>--}}
{{--                                @endif--}}

{{--                                <label class="login__label login__label-phone main-label">--}}
{{--                                    <input type="text" class="main-input phone-mask" name="phone">--}}
{{--                                    <span class="login__placeholder main-label__placeholder">--}}
{{--                Номер телефона--}}
{{--            </span>--}}
{{--                                </label>--}}

{{--                                <label class="login__label login__label-password main-label">--}}
{{--                                    <input type="password" class="main-input" name="password">--}}
{{--                                    <span class="login__placeholder main-label__placeholder">--}}
{{--                Пароль--}}
{{--            </span>--}}
{{--                                </label>--}}

{{--                                <button class="btn-yellow login__submit" type="submit">Войти</button>--}}

{{--                                --}}{{--        <a href="#" class="main-link login__forgot">Я забыл пароль</a>--}}
{{--                            </form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

