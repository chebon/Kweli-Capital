@extends('app')

@section('content')
    <div class="home-search">
        <div class="swiper-container item-listing grid featured-gallery featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="item">
                        <div class="item-image"><a href="/property-single">
                                <div class="image" style="background-image:url('/img/demo/property/13.jpg');"></div>
                                <div class="item-meta">
                                    <div class="item-info">
                                        <h3 class="item-title">3 bed semi-detached house</h3>
                                        <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                    </div>
                                    <div class="item-price">KES420,000 <small>KES777 / sq m</small> </div>
                                </div>
                                <div class="item-badges">
                                </div>
                            </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item">
                        <div class="item-image"><a href="/property-single">
                                <div class="image" style="background-image:url('/img/demo/property/2.jpg');"></div>
                                <div class="item-meta">
                                    <div class="item-info">
                                        <h3 class="item-title">3 bed semi-detached house</h3>
                                        <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                    </div>
                                    <div class="item-price">KES420,000 <small>KES777 / sq m</small> </div>
                                </div>
                                <div class="item-badges">
                                </div>
                            </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item">
                        <div class="item-image"><a href="/property-single">
                                <div class="image" style="background-image:url('/img/demo/property/3.jpg');"></div>
                                <div class="item-meta">
                                    <div class="item-info">
                                        <h3 class="item-title">3 bed semi-detached house</h3>
                                        <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                    </div>
                                    <div class="item-price">KES420,000 <small>KES777 / sq m</small> </div>
                                </div>
                                <div class="item-badges">
                                </div>
                            </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item">
                        <div class="item-image"><a href="/property-single">
                                <div class="image" style="background-image:url('/img/demo/property/4.jpg');"></div>
                                <div class="item-meta">
                                    <div class="item-info">
                                        <h3 class="item-title">3 bed semi-detached house</h3>
                                        <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                    </div>
                                    <div class="item-price">KES420,000 <small>KES777 / sq m</small> </div>
                                </div>

                            </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item">
                        <div class="item-image"><a href="/property-single">
                                <div class="image" style="background-image:url('/img/demo/property/5.jpg');"></div>
                                <div class="item-meta">
                                    <div class="item-info">
                                        <h3 class="item-title">3 bed semi-detached house</h3>
                                        <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                    </div>
                                    <div class="item-price">KES420,000 <small>KES777 / sq m</small> </div>
                                </div>
                                <div class="item-badges">
                                </div>
                            </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <script>
            var swiper = new Swiper('.featured-slider', {
                slidesPerView: 2,
                centeredSlides: true,
                spaceBetween: 0,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    991: {
                        slidesPerView: 3,
                        centeredSlides: true,
                    },
                    768: {
                        slidesPerView: 2,
                        centeredSlides: true,
                    },
                    640: {
                        slidesPerView: 1,
                        centeredSlides: false,
                    },
                    320: {
                        slidesPerView: 1,
                        centeredSlides: false,
                    }
                }
            });
        </script>
        <div class="search-form v4">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Location">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="pt0 pb0">
        <div class="feature-box centered gray">
            <div>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col col-lg-12 col-xl-10">
                            <div class="item-listing grid">
                                <div class="main-title"><span>Latest Properties</span></div>
                                <div class="main-title-description">Check out some of our recent properties.</div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item">
                                            <div class="item-image"><a href="/property-single"><img src="/img/demo/property/1.jpg" class="img-fluid" alt="">
                                                    <div class="item-meta">
                                                        <div class="item-price">KES420,000 <small>KES777 / sq m</small> </div>
                                                    </div>
                                                    <div class="item-badges">
                                                    </div>
                                                </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                                            <div class="item-info">
                                                <h3 class="item-title">3 bed semi-detached house</h3>
                                                <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                                <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item">
                                            <div class="item-image"><a href="/property-single"><img src="/img/demo/property/2.jpg" class="img-fluid" alt="">
                                                    <div class="item-meta">
                                                        <div class="item-price">KES420,000 <small>KES777 / sq m</small> </div>
                                                    </div>
                                                    <div class="item-badges">
                                                    </div>
                                                </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                                            <div class="item-info">
                                                <h3 class="item-title">3 bed semi-detached house</h3>
                                                <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                                <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item">
                                            <div class="item-image"><a href="/property-single"><img src="/img/demo/property/3.jpg" class="img-fluid" alt="">
                                                    <div class="item-meta">
                                                        <div class="item-price">KES420,000 <small>KES777 / sq m</small> </div>
                                                    </div>
                                                    <div class="item-badges">
                                                    </div>
                                                </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                                            <div class="item-info">
                                                <h3 class="item-title">3 bed semi-detached house</h3>
                                                <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                                <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
