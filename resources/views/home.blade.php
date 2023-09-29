@extends('layouts.app')
@section('content')

        
        <!-- More Categories For You -->
        <section>
            <div class="container-fluid">
                <h3 class="secTitle">More Categories For You</h3>

                <div class="moreCatemain">
                    <div class="swiper moreCatemainSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="moreCateCard">
                                    <div class="moreCateCardImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/categoryimage.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="moreCateCard">
                                    <div class="moreCateCardImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/categoryimage.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="moreCateCard">
                                    <div class="moreCateCardImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/categoryimage.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="moreCateCard">
                                    <div class="moreCateCardImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/categoryimage.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="moreCateCard">
                                    <div class="moreCateCardImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/categoryimage.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="moreCateCard">
                                    <div class="moreCateCardImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/categoryimage.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="moreCateCard">
                                    <div class="moreCateCardImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/categoryimage.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="moreCateCard">
                                    <div class="moreCateCardImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/categoryimage.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-button-next custNavbtn"></div>
                        <div class="swiper-button-prev custNavbtn"></div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <h3 class="secTitle">Best In Beauty</h3>
                <div class="beautyslidemain">
                    <div class="swiper beautySlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide beautySliderslide">
                                <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                <div class="beautySlideTitle">
                                    <h3>Slider Title</h3>
                                    <a href="#!"><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="swiper-slide beautySliderslide">
                                <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                <div class="beautySlideTitle">
                                    <h3>Slider Title</h3>
                                    <a href="#!"><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="swiper-slide beautySliderslide">
                                <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                <div class="beautySlideTitle">
                                    <h3>Slider Title</h3>
                                    <a href="#!"><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="swiper-slide beautySliderslide">
                                <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                <div class="beautySlideTitle">
                                    <h3>Slider Title</h3>
                                    <a href="#!"><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="swiper-slide beautySliderslide">
                                <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                <div class="beautySlideTitle">
                                    <h3>Slider Title</h3>
                                    <a href="#!"><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next custNavbtn"></div>
                        <div class="swiper-button-prev custNavbtn"></div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <h3 class="secTitle text-center">Best Offers For You</h3>
                <div class="row">
                    <div class="col-lg-3 px-2">
                        <a href="product-detail.html" class="text-decoration-none">
                            <div class="brandLoveMain">
                                <div class="brandLoveImg">
                                    <span class="pdbadge">10% OFF</span>
                                    <img src="{{asset('assets/images/luxe-3.jpeg')}}" alt="">
                                </div>
                                <div class="brandLoveInfo">
                                    <p>Flat 10% Off</p>
                                    <span>On Haircare Regimes</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 px-2">
                        <a href="#!" class="text-decoration-none">
                            <div class="brandLoveMain">
                                <div class="brandLoveImg">
                                    <span class="pdbadge">20% OFF</span>
                                    <img src="{{asset('assets/images/luxe-3.jpeg')}}" alt="">
                                </div>
                                <div class="brandLoveInfo">
                                    <p>Flat 10% Off</p>
                                    <span>On Haircare Regimes</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 px-2">
                        <a href="#!" class="text-decoration-none">
                            <div class="brandLoveMain">
                                <div class="brandLoveImg">
                                    <span class="pdbadge">BestSeller</span>
                                    <img src="{{asset('assets/images/luxe-3.jpeg')}}" alt="">
                                </div>
                                <div class="brandLoveInfo">
                                    <p>Flat 10% Off</p>
                                    <span>On Haircare Regimes</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 px-2">
                        <a href="#!" class="text-decoration-none">
                            <div class="brandLoveMain">
                                <div class="brandLoveImg">
                                    <img src="{{asset('assets/images/luxe-3.jpeg')}}" alt="">
                                </div>
                                <div class="brandLoveInfo">
                                    <p>Flat 10% Off</p>
                                    <span>On Haircare Regimes</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop By COncern -->
        <section>
            <div class="container-fluid">
                <h3 class="secTitle">Shop By Concern</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="boxesRow">
                            <div class="boxesCol">
                                <img src="{{asset('assets/images/smallbanner.webp')}}" alt="">
                                <a href="#!">Title</a>
                            </div>
                            <div class="boxesCol">
                                <img src="{{asset('assets/images/smallbanner.webp')}}" alt="">
                                <a href="#!">Title</a>
                            </div>
                            <div class="boxesCol">
                                <img src="{{asset('assets/images/smallbanner.webp')}}" alt="">
                                <a href="#!">Title</a>
                            </div>
                            <div class="boxesCol">
                                <img src="{{asset('assets/images/smallbanner.webp')}}" alt="">
                                <a href="#!">Title</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="largeBanner">
                                    <img src="{{asset('assets/images/smallbanner.webp')}}" alt="">
                                    <a href="#!">Title</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="boxesRow">
                                    <div class="boxesCol w-100">
                                        <img src="{{asset('assets/images/smallbanner.webp')}}" alt="">
                                        <a href="#!">Title</a>
                                    </div>
                                    <div class="boxesCol w-100">
                                        <img src="{{asset('assets/images/smallbanner.webp')}}" alt="">
                                        <a href="#!">Title</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Shop By COncern -->
        <section>
            <div class="container-fluid">
                <h3 class="secTitle">Top Brands</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="brandsCard">
                            <a href="#!">
                                <div class="brandsCardimg">
                                    <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                </div>
                                <div class="brandsCardinfo">
                                    <h3>Title</h3>
                                    <p>Description</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="brandsCard">
                            <a href="#!">
                                <div class="brandsCardimg">
                                    <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                </div>
                                <div class="brandsCardinfo">
                                    <h3>Title</h3>
                                    <p>Description</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="brandsCard">
                            <a href="#!">
                                <div class="brandsCardimg">
                                    <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                </div>
                                <div class="brandsCardinfo">
                                    <h3>Title</h3>
                                    <p>Description</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="brandsCard">
                            <a href="#!">
                                <div class="brandsCardimg">
                                    <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                </div>
                                <div class="brandsCardinfo">
                                    <h3>Title</h3>
                                    <p>Description</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="brandsCard">
                            <a href="#!">
                                <div class="brandsCardimg">
                                    <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                </div>
                                <div class="brandsCardinfo">
                                    <h3>Title</h3>
                                    <p>Description</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="brandsCard">
                            <a href="#!">
                                <div class="brandsCardimg">
                                    <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                </div>
                                <div class="brandsCardinfo">
                                    <h3>Title</h3>
                                    <p>Description</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 2 banner -->
        <section>
            <div class="container-fluid">
                <!-- <h3 class="secTitle">Top Brands</h3> -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="bannersCard">
                            <a href="#!">
                                <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bannersCard">
                            <a href="#!">
                                <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Only at winnigkart -->
        <section>
            <div class="container-fluid">
                <h3 class="secTitle">Only At WinningKart</h3>
                <div class="beautyslidemain">
                    <div class="swiper onlyAtWinningSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="onlyAtWinningcard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/slide.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next custNavbtn"></div>
                        <div class="swiper-button-prev custNavbtn"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Only at winnigkart -->
        <section>
            <div class="container-fluid">
                <h3 class="secTitle">Best Seller Products</h3>

                <div class="bannersCard">
                    <a href="#!">
                        <!-- <img src="{{asset('assets/images/slide.jpg')}}" alt=""> -->
                        <img src="{{asset('assets/images/best.avif')}}" alt="">
                    </a>
                </div>


                <div class="bestsellerMain">
                    <div class="swiper bestsellerSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bestsellerCard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/bestsmall.avif')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bestsellerCard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/bestsmall.avif')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bestsellerCard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/bestsmall.avif')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bestsellerCard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/bestsmall.avif')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bestsellerCard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/bestsmall.avif')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bestsellerCard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/bestsmall.avif')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bestsellerCard">
                                    <a href="#!">
                                        <img src="{{asset('assets/images/bestsmall.avif')}}" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-button-next custNavbtn"></div>
                        <div class="swiper-button-prev custNavbtn"></div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Brand Featured In -->
        <section>
            <div class="container-fluid">
                <h3 class="secTitle">Brand Featured In</h3>

                <div class="brandfeatInmain">
                    <div class="swiper brandfeatInSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="swiper-button-next custNavbtn"></div>
                        <div class="swiper-button-prev custNavbtn"></div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Influencer Picks -->
        <section>
            <div class="container-fluid">
                <h3 class="secTitle">Influencer's Picks</h3>

                <div class="influenceMain">
                    <div class="swiper influenceSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="influenceCard">
                                    <div class="influenceImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/influencer.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="influenceInfo">
                                        <h3>Himadri's </h3>
                                        <p>Glam Must-Haves </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="influenceCard">
                                    <div class="influenceImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/influencer.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="influenceInfo">
                                        <h3>Himadri's </h3>
                                        <p>Glam Must-Haves </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="influenceCard">
                                    <div class="influenceImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/influencer.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="influenceInfo">
                                        <h3>Himadri's </h3>
                                        <p>Glam Must-Haves </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="influenceCard">
                                    <div class="influenceImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/influencer.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="influenceInfo">
                                        <h3>Himadri's </h3>
                                        <p>Glam Must-Haves </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="influenceCard">
                                    <div class="influenceImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/influencer.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="influenceInfo">
                                        <h3>Himadri's </h3>
                                        <p>Glam Must-Haves </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next custNavbtn"></div>
                        <div class="swiper-button-prev custNavbtn"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Categories Peoduct -->
        <section>
            <div class="container-fluid">
                <h3 class="secTitle">Top Categories Products</h3>

                <div class="brandfeatInmain">
                    <div class="swiper brandfeatInSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productSlideCard">
                                    <div class="productslideImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/product.avif')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="productslideinfo">
                                        <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof
                                                Mascara</a></h3>
                                        <div class="pdPricecard">
                                            <p>₹699<del>₹799</del><span>15%</span></p>
                                            <div class="pdSize">
                                                <span>6 ml</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="swiper-button-next custNavbtn"></div>
                        <div class="swiper-button-prev custNavbtn"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Discover More at winning kart -->
        <section>
            <div class="container-fluid">
                <h3 class="secTitle">Best Discount</h3>

                <div class="discovermoreMain">
                    <div class="swiper discovermoreSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="discovermoreCard">
                                    <div class="discovermoreImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/best-discount.avif')}}" alt="">
                                            <div class="discovermoreInfo">
                                                <h3>Exciting Brands and Latest Launches</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="discovermoreCard">
                                    <div class="discovermoreImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/best-discount.avif')}}" alt="">
                                            <div class="discovermoreInfo">
                                                <h3>Exciting Brands and Latest Launches</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="discovermoreCard">
                                    <div class="discovermoreImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/best-discount.avif')}}" alt="">
                                            <div class="discovermoreInfo">
                                                <h3>Exciting Brands and Latest Launches</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="discovermoreCard">
                                    <div class="discovermoreImg">
                                        <a href="#!">
                                            <img src="{{asset('assets/images/best-discount.avif')}}" alt="">
                                            <div class="discovermoreInfo">
                                                <h3>Exciting Brands and Latest Launches</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next custNavbtn"></div>
                        <div class="swiper-button-prev custNavbtn"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fixcart -->
        <section class="fixedCart">
            <div class="row mr-0 justify-content-end">
                <div class="col-lg-4 px-0">
                    <div class="fixedCartMain position-relative">
                        <div class="fixedCartInner ">
                            <div class="cartCalcmainbx">
                                <div class="fixCartHead">
                                    <h2>Shopping Cart</h2>
                                    <a class="fxCloseCart pointer text-decoration-none text-dark"><i
                                            class="bi bi-x-lg"></i></a>
                                </div>
                                <div class="fixCartproductsmain">
                                    <div class="fixCartproductslist">
                                        <div class="fixCartproductscard">
                                            <div class="fixCartimgcol">
                                                <div class="fixCartimg">
                                                    <img src="{{asset('assets/images/product.avif')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="fixCartinfo">
                                                <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                                <div class="fixCartqty">
                                                    <span>Qty: </span>
                                                    <div class="cartQtybx">
                                                        <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button>
                                                    </div>
                                                </div>
                                                <span class="fixCartprice">₹1663</span>
                                                <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="fixCartproductscard">
                                            <div class="fixCartimgcol">
                                                <div class="fixCartimg">
                                                    <img src="{{asset('assets/images/product.avif')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="fixCartinfo">
                                                <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                                <div class="fixCartqty">
                                                    <span>Qty: </span>
                                                    <div class="cartQtybx">
                                                        <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button>
                                                    </div>
                                                </div>
                                                <span class="fixCartprice">₹1663</span>
                                                <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="fixCartproductscard">
                                            <div class="fixCartimgcol">
                                                <div class="fixCartimg">
                                                    <img src="{{asset('assets/images/product.avif')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="fixCartinfo">
                                                <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                                <div class="fixCartqty">
                                                    <span>Qty: </span>
                                                    <div class="cartQtybx">
                                                        <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button>
                                                    </div>
                                                </div>
                                                <span class="fixCartprice">₹1663</span>
                                                <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="fixCartproductscard">
                                            <div class="fixCartimgcol">
                                                <div class="fixCartimg">
                                                    <img src="{{asset('assets/images/product.avif')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="fixCartinfo">
                                                <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                                <div class="fixCartqty">
                                                    <span>Qty: </span>
                                                    <div class="cartQtybx">
                                                        <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button>
                                                    </div>
                                                </div>
                                                <span class="fixCartprice">₹1663</span>
                                                <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="fixCartproductscard">
                                            <div class="fixCartimgcol">
                                                <div class="fixCartimg">
                                                    <img src="{{asset('assets/images/product.avif')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="fixCartinfo">
                                                <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                                <div class="fixCartqty">
                                                    <span>Qty: </span>
                                                    <div class="cartQtybx">
                                                        <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button>
                                                    </div>
                                                </div>
                                                <span class="fixCartprice">₹1663</span>
                                                <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="fixCartproductscard">
                                            <div class="fixCartimgcol">
                                                <div class="fixCartimg">
                                                    <img src="{{asset('assets/images/product.avif')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="fixCartinfo">
                                                <a href="#!">SP Luxe Oil Keratin Restore Mask</a>
                                                <div class="fixCartqty">
                                                    <span>Qty: </span>
                                                    <div class="cartQtybx">
                                                        <button class="Qtybtn"><i class="bi bi-dash-lg"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="Qtybtn"><i class="bi bi-plus-lg"></i></button>
                                                    </div>
                                                </div>
                                                <span class="fixCartprice">₹1663</span>
                                                <button class="fixCartDelete"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="fixCartButton">
                                    <div class="fxCartCoupanmain">
                                        <div class="fxCartCoupaninner">
                                            <!-- <input type="checkbox" name="coupanApply" id="coupanApply" class="d-none"> -->
                                            <label for="coupanApply" class="ApplycoupanBtn"><i
                                                    class="bi bi-percent"></i> Apply Coupan</label>
                                        </div>
                                    </div>
                                    <div class="fxCartCalcmain">
                                        <div class="fxCartCalcinner">
                                            <h3>Price Details</h3>
                                            <p>
                                                <span>Bag MRP (3 items)</span>
                                                <span>₹3060</span>
                                            </p>
                                            <p>
                                                <span>Bag Discount</span>
                                                <span>₹349</span>
                                            </p>
                                            <p>
                                                <span>Shipping</span>
                                                <span>Free</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="fxproductcalc">
                                        <h3>Subtotal</h3>
                                        <span>₹2000</span>
                                    </div>
                                    <!-- <a href="#!" class="cartView">VIEW CART</a> -->
                                    <a href="cart.html" class="cartProceed">CHECKOUT</a>
                                </div>
                            </div>

                            <!-- Apply Coupan Box -->
                            <div class="applyCoupanMain">
                                <div class="applyCoupanInner">
                                    <div class="fixCartHead">
                                        <h2>Apply Coupan</h2>
                                        <a class="fxCloseapplycoupan pointer text-decoration-none text-dark"><i
                                                class="bi bi-x-lg"></i></a>
                                    </div>
                                    <div class="fxCartCoupanmain">
                                        <div class="fxCartCoupaninner">
                                            <div class="coupanBox">
                                                <div class="position-relative">
                                                    <input type="text" placeholder="Apply Coupan" class="form-control">
                                                    <button class="btn coupanApplyBtn">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="coupanListMain">
                                        <div class="noCoupanFound">
                                            <div class="noCoupanFoundinner">
                                                <img src="{{asset('assets/images/promo-code.png')}}" alt="">
                                                <p>You seem to have no Coupons. Please try again after some time.</p>
                                            </div>
                                        </div>
                                        <div class="coupanListinner">
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                            <div class="coupanListCard">
                                                <div class="coupanicon">
                                                    <i class="bi bi-percent"></i>
                                                </div>
                                                <div class="couapnDetails">
                                                    <h3>COUPANCODE</h3>
                                                    <P>Lorem ipsum dolor sit amet consectetur.</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fixCartButton">
                                        <!-- <a href="#!" class="cartView">VIEW CART</a> -->
                                        <button type="button" class="cartProceed fxCloseapplycoupan">PROCEED</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
