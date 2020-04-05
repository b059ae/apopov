<?php
/** @var $posts App\Models\Post[] */
?>
@extends('layouts.app')
@section('content')
    <section id="blog" class="section section-no-border bg-color-light m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Blog</h2>

                    <div class="row blog-wrapper">
                        @foreach($posts as $post)
                            <div class="col-lg-6">
                                <article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                                    <div class="thumb-info-wrapper">
                                        <a href="#">
                                            <img src="{{$post->image}}" alt class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="thumb-info-caption">
                                        <div class="thumb-info-caption-text">
                                            <h4 class="mb-2">
                                                <a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
                                                    {{$post->title}}
                                                </a>
                                            </h4>
                                            <p class="custom-text-color-2">{{$post->short_description}}</p>
                                        </div>
                                        <hr class="solid m-0 mt-4 mb-2">
                                        <div class="row justify-content-between">
                                            <div class="col-auto custom-blog-post-date text-uppercase font-weight-semibold text-color-dark text-2">
                                                {{$post->posted_at->format('Y-m-d')}}
                                            </div>
                                            <div class="col-auto custom-blog-post-share text-uppercase font-weight-semibold text-color-dark text-2">
                                                {{--Share:
                                                <ul class="mb-0">
                                                    <li>
                                                        <a class="item-facebook text-decoration-none text-uppercase" href="#" title="Share on Facebook">Facebook</a>
                                                    </li>
                                                    <li>
                                                        <a class="item-twitter text-decoration-none text-uppercase" href="#" title="Share on Twitter">Twitter</a>
                                                    </li>
                                                    <li>
                                                        <a class="item-google-plus text-decoration-none text-uppercase" href="#" title="Share on Google Plus">Google Plus</a>
                                                    </li>
                                                </ul>--}}
                                                <a class="text-color-dark font-weight-bold text-uppercase" href="#">Continue reading →</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
