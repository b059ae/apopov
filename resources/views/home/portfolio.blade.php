<?php
/** @var \App\Models\Portfolio[] $portfolio */
/** @var array $tags */
?>
<section id="portfolio" class="section section-no-border bg-color-secondary m-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Portfolio</h2>
                <ul class="nav nav-pills sort-source custom-nav-sort mb-4" data-sort-id="portfolio" data-option-key="filter">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link text-dark active" href="#">Show All</a></li>
                    @foreach ($tags as $tag)
                        <li class="nav-item" data-option-value=".{{$tag}}"><a class="nav-link text-dark" href="#">{{$tag}}</a></li>
                    @endforeach
                </ul>
                <div class="sort-destination-loader sort-destination-loader-showing">
                    <div class="row image-gallery sort-destination popup-gallery-ajax" data-sort-id="portfolio">

                        @foreach ($portfolio as $item)
                        <!-- portfolio item -->
                            <div class="col-12 col-sm-6 col-lg-3 isotope-item {{App\Helpers\TagsHelper::asString($item->tags, ' ')}}">
                                <div class="image-gallery-item mb-4 pb-3">
                                    <a href="{{route('portfolio',['id'=>$item->id])}}" data-ajax-on-modal>
                                    <span class="thumb-info custom-thumb-info-1">
                                        <span class="thumb-info-wrapper">
                                            <span class="thumb-info-plus"></span>
                                            <img src="{{$item->image}}" class="img-fluid" alt="">
                                        </span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        <!-- end: portfolio item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
