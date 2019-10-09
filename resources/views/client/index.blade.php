@extends('layout')

<!-- ================ start banner area ================= -->

@section('banner')
    <section class="hero-banner">
        <div class="container">
            <div class="row no-gutters align-items-center pt-60px">
                <div class="col-5 d-none d-sm-block">
                    <div class="hero-banner__img">
                        <img class="img-fluid" src="{{URL::asset('img/home/hero-banner.png')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                    <div class="hero-banner__content">
                        <h4>Shop is fun</h4>
                        <h1>MiKi Shop </br> Reliable Choice</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at deserunt facilis itaque
                            rerum soluta ullam. Aut consequatur dolorem et, fuga id ipsum iure molestiae nihil odit
                            porro ullam voluptatem!</p>
                        <a class="button button-hero" href="{{url('/category')}}">Browse Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- ================ end banner area ================= -->

<!--================Blog Area =================-->

@section('content')

    <!--================ Hero Carousel start =================-->
    <section class="section-margin mt-0">
        <div class="owl-carousel owl-theme hero-carousel">
            <div class="hero-carousel__slide">
                <img src="{{URL::asset('img/home/bag.png')}}" alt="" class="img-fluid">
                <a href="#" class="hero-carousel__slideOverlay">
                    <h3>Bag</h3>
                    <p>Accessories Item</p>
                </a>
            </div>
            <div class="hero-carousel__slide">
                <img src="{{URL::asset('img/home/book.png')}}" alt="" class="img-fluid">
                <a href="#" class="hero-carousel__slideOverlay">
                    <h3>Campus</h3>
                    <p>Notebook Item</p>
                </a>
            </div>
            <div class="hero-carousel__slide">
                <img src="{{URL::asset('img/home/pencil.png')}}" alt="" class="img-fluid">
                <a href="#" class="hero-carousel__slideOverlay">
                    <h3>Crayons</h3>
                    <p>School supplies Item</p>
                </a>
            </div>
        </div>
    </section>
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Popular Item in the market</p>
                <h2>Trending <span class="section-intro__style">Product</span></h2>
            </div>
            <div class="row">
                @foreach($trending as $trending_product)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="card-img" src="http://res.cloudinary.com/thaocute2906/image/upload/c_fit,h_550,w_550/{{ $trending_product['image'] }}.png" alt="">
                            <ul class="card-product__imgOverlay">
                                <input id="sst{{$trending_product->id}}" type="hidden" min="1" value="1">
                                <li><button onclick="addToCart({{$trending_product->id}})"><i class="ti-shopping-cart"> Cart</i></button></li>

                            </ul>
                        </div>
                        <div class="card-body">

                            <h4 class="card-product__title"><a href="{{url('/detail_product/'.$trending_product->id)}}">{{$trending_product->name}}</a></h4>
                            <p class="card-product__price">${{$trending_product->price}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================ trending product section end ================= -->


    <!-- ================ offer section start ================= -->
    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="offer__content text-center">
                        <h3>Business technology</h3>
                        <h5>High-quality products</h5>
                        <p>Search by your own choice</p>
                        <a class="button button--active mt-3 mt-xl-4" href="{{url('/category')}}">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ offer section end ================= -->

    <!-- ================ Best Selling item  carousel ================= -->
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Popular Item in the market</p>
                <h2>Best <span class="section-intro__style">Sellers</span></h2>
            </div>
            <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                @foreach($best_seller as $best)
                <div class="card text-center card-product">
                    <div class="card-product__img">
                        <img class="img-fluid" src="http://res.cloudinary.com/thaocute2906/image/upload/c_fit,h_550,w_550/{{ $best['image'] }}.png" alt="">
                        <ul class="card-product__imgOverlay">
                            <input id="sst{{$best->id}}" type="hidden" min="1" value="1">
                            <li><button onclick="addToCart({{$best->id}})"><i class="ti-shopping-cart"> Cart</i></button></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="card-product__title"><a href="{{url('/detail_product/'.$best->id)}}">{{$best->name}}</a></h4>
                        <p class="card-product__price">${{$best->price}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================ Best Selling item  carousel end ================= -->

    <!-- ================ Blog section start ================= -->
    <section class="blog">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Popular Item in the market</p>
                <h2> <span class="section-intro__style">News</span></h2>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card card-blog">
                        <div class="card-blog__img">
                            <img class="card-img rounded-0" src="{{URL::asset('img/blog/blog.jpg')}}" alt="">
                        </div>
                        <div class="card-body">
                            <ul class="card-blog__info">
                                <li><a href="#">By Admin</a></li>
                                <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                            </ul>
                            <h4 class="card-blog__title"><a href="single-blog.html">The Richland Center Shooping News and weekly shooper</a></h4>
                            <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                            <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card card-blog">
                        <div class="card-blog__img">
                            <img class="card-img rounded-0" src="{{URL::asset('img/blog/blog.jpg')}}" alt="">
                        </div>
                        <div class="card-body">
                            <ul class="card-blog__info">
                                <li><a href="#">By Admin</a></li>
                                <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                            </ul>
                            <h4 class="card-blog__title"><a href="single-blog.html">The Shopping News also offers top-quality printing services</a></h4>
                            <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                            <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card card-blog">
                        <div class="card-blog__img">
                            <img class="card-img rounded-0" src="{{URL::asset('img/blog/blog.jpg')}}" alt="">
                        </div>
                        <div class="card-body">
                            <ul class="card-blog__info">
                                <li><a href="#">By Admin</a></li>
                                <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                            </ul>
                            <h4 class="card-blog__title"><a href="single-blog.html">Professional design staff and efficient equipment you’ll find we offer</a></h4>
                            <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                            <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Blog section end ================= -->

    <!-- ================ Subscribe section start ================= -->
    <section class="subscribe-position">
        <div class="container">
            <div class="subscribe text-center">
                <h3 class="subscribe__title">Get Update From Anywhere</h3>
                <p>Bearing Void gathering light light his eavening unto dont afraid</p>
                <div id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
                        <div class="form-group ml-sm-auto">
                            <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                            <div class="info"></div>
                        </div>
                        <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ Subscribe section end ================= -->

@endsection

<!--================End Blog Area =================-->