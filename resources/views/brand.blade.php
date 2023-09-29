@extends('layouts.app')
@section('content')

    
        <div class="categoryBg">
            <div class="container">
                <div class="breadcrumbMain">
                    <div class="breadcrumbInner">
                        <a href="#!">Home <i class="bi bi-chevron-right"></i></a>
                        <a href="#!">Brand <i class="bi bi-chevron-right"></i></a>
                        <a href="#!">{{$brand->title}}</a>
                    </div>
                </div>
            </div>
    
            <section class="categorbannerMain">
                <div class="container">
                    <!-- <h3 class="secTitle text-center">Category Title</h3> -->
                    <div class="categoryslidemain">
                        <div class="swiper categorySlider">
                            <div class="swiper-wrapper">
                            @foreach($brand->images as $image)
                              <div class="swiper-slide">
                                <div class="categorySliderCard">
                                    <a href="#!">
                                        <img src="{{asset('storage/images/brands/banner').'/'.$image->url}}" alt="{{$image->url}}">
                                    </a>
                                </div>
                              </div>
                            @endforeach
                            </div>
                            <div class="swiper-button-next custNavbtn"></div>
                            <div class="swiper-button-prev custNavbtn"></div>
                          </div>
                    </div>
                </div>
            </section>

            <!-- More Categories For You -->
            <section class="mb-3">
                <div class="container">
                    <h3 class="secTitle text-center">Shop By Categories</h3>

                    <div class="brandSmallmain">
                        <div class="swiper brandSmallSlider">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brandSmallCard">
                                    <div class="brandSmallCardImg">
                                        <a href="#!">
                                            <img src="assets/images/categoryimage.avif" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brandSmallCard">
                                    <div class="brandSmallCardImg">
                                        <a href="#!">
                                            <img src="assets/images/categoryimage.avif" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brandSmallCard">
                                    <div class="brandSmallCardImg">
                                        <a href="#!">
                                            <img src="assets/images/categoryimage.avif" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brandSmallCard">
                                    <div class="brandSmallCardImg">
                                        <a href="#!">
                                            <img src="assets/images/categoryimage.avif" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brandSmallCard">
                                    <div class="brandSmallCardImg">
                                        <a href="#!">
                                            <img src="assets/images/categoryimage.avif" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brandSmallCard">
                                    <div class="brandSmallCardImg">
                                        <a href="#!">
                                            <img src="assets/images/categoryimage.avif" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brandSmallCard">
                                    <div class="brandSmallCardImg">
                                        <a href="#!">
                                            <img src="assets/images/categoryimage.avif" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brandSmallCard">
                                    <div class="brandSmallCardImg">
                                        <a href="#!">
                                            <img src="assets/images/categoryimage.avif" alt="">
                                        </a>
                                    </div>
                                    <h3>Category Title</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brandSmallCard">
                                    <div class="brandSmallCardImg">
                                        <a href="#!">
                                            <img src="assets/images/categoryimage.avif" alt="">
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

            <!-- Discover More at winning kart -->
        <section class="mb-3">
            <div class="container">
                <h3 class="secTitle text-center">Best offer at Winning Kart</h3>

                <div class="discovermoreMain">
                    <div class="swiper discovermoreSlider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="discovermoreCard">
                                <div class="discovermoreImg">
                                    <a href="#!">
                                        <img src="assets/images/best-discount.avif" alt="">
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
                                        <img src="assets/images/best-discount.avif" alt="">
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
                                        <img src="assets/images/best-discount.avif" alt="">
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
                                        <img src="assets/images/best-discount.avif" alt="">
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

        <section>
            <div class="container">
                <h3 class="secTitle text-center">BESTSELLERS</h3>
                <div class="brandfeatInmain">
                    <div class="swiper brandfeatInSlider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="productSlideCard">
                                <div class="productslideImg">
                                    <a href="#!">
                                        <img src="assets/images/product.avif" alt="">
                                    </a>
                                </div>
                                <div class="productslideinfo">
                                    <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof Mascara</a></h3>
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
                                        <img src="assets/images/product.avif" alt="">
                                    </a>
                                </div>
                                <div class="productslideinfo">
                                    <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof Mascara</a></h3>
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
                                        <img src="assets/images/product.avif" alt="">
                                    </a>
                                </div>
                                <div class="productslideinfo">
                                    <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof Mascara</a></h3>
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
                                        <img src="assets/images/product.avif" alt="">
                                    </a>
                                </div>
                                <div class="productslideinfo">
                                    <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof Mascara</a></h3>
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
                                        <img src="assets/images/product.avif" alt="">
                                    </a>
                                </div>
                                <div class="productslideinfo">
                                    <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof Mascara</a></h3>
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
                                        <img src="assets/images/product.avif" alt="">
                                    </a>
                                </div>
                                <div class="productslideinfo">
                                    <h3><a href="#!">Maybelline New York Lash Sensational Sky High Waterproof Mascara</a></h3>
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
            <section class="categorbannerMain">
                <div class="container">
                    <h3 class="secTitle text-center">All Products</h3>
                    <div class="row">
                        <div class="col-lg-3 pl-2">

                            <div class="sideFilters">
                                <div id="popularityaccordion">
                                    <!-- Sort By Popularuty -->
                                    <div class="popCard card">
                                      <div class="popHeader card-header" id="popularityaccord">
                                          <div class="popHeaderbtn collapsed" data-toggle="collapse" 
                                          data-target="#collapsepopularity" aria-expanded="true" aria-controls="collapsepopularity">
                                            <h3 class="mb-0">Sort By : Popularity </h3>
                                            <i class="bi bi-chevron-down"></i>
                                          </div>
                                      </div>
                                  
                                      <div id="collapsepopularity" class="popcollapse collapse " 
                                      aria-labelledby="popularityaccord" data-parent="#popularityaccordion">
                                        <div class="popCardBody card-body">
                                            <div class="popFilterlist">
                                                <div class="popFiltercard">
                                                    <input type="checkbox" id="popFilter1">
                                                    <label for="popFilter1">
                                                        <p class="mb-0">Popularity</p>
                                                        <span><i class="bi bi-check-lg"></i></span>
                                                    </label>
                                                </div>
                                                <div class="popFiltercard">
                                                    <input type="checkbox" id="popFilter2">
                                                    <label for="popFilter2">
                                                        <p class="mb-0">Discount</p>
                                                        <span><i class="bi bi-check-lg"></i></span>
                                                    </label>
                                                </div>
                                                <div class="popFiltercard">
                                                    <input type="checkbox" id="popFilter3">
                                                    <label for="popFilter3">
                                                        <p class="mb-0">Name</p>
                                                        <span><i class="bi bi-check-lg"></i></span>
                                                    </label>
                                                </div>
                                                <div class="popFiltercard">
                                                    <input type="checkbox" id="popFilter4">
                                                    <label for="popFilter4">
                                                        <p class="mb-0">Customer Top Rated</p>
                                                        <span><i class="bi bi-check-lg"></i></span>
                                                    </label>
                                                </div>
                                                <div class="popFiltercard">
                                                    <input type="checkbox" id="popFilter5">
                                                    <label for="popFilter5">
                                                        <p class="mb-0">New Arrivals</p>
                                                        <span><i class="bi bi-check-lg"></i></span>
                                                    </label>
                                                </div>
                                                <div class="popFiltercard">
                                                    <input type="checkbox" id="popFilter6">
                                                    <label for="popFilter6">
                                                        <p class="mb-0">Price: High To Low</p>
                                                        <span><i class="bi bi-check-lg"></i></span>
                                                    </label>
                                                </div>
                                                <div class="popFiltercard">
                                                    <input type="checkbox" id="popFilter7">
                                                    <label for="popFilter7">
                                                        <p class="mb-0">Price: Low To High</p>
                                                        <span><i class="bi bi-check-lg"></i></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Price Filter -->
                                    <div class="popCard card">
                                        <div class="popHeader card-header" id="Priceaccord">
                                            <div class="popHeaderbtn collapsed" data-toggle="collapse" 
                                            data-target="#collapsePrice" aria-expanded="true" aria-controls="collapsePrice">
                                              <h3 class="mb-0">Price </h3>
                                              <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </div>    
                                    
                                        <div id="collapsePrice" class="popcollapse collapse " 
                                        aria-labelledby="Priceaccord" data-parent="#popularityaccordion">
                                          <div class="popCardBody card-body">
                                              <div class="brandFiltermain">
                                                  <div class="brandfilterSelect mt-0">
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">Rs. 0 - Rs. 499 <strong>(100)</strong></p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">Rs. 500 - Rs. 999 <strong>(100)</strong></p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">Rs. 1000 - Rs. 1999 <strong>(100)</strong></p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">Rs. 2000 - Rs. 3999 <strong>(100)</strong></p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">Rs. 4000 & Above <strong>(100)</strong></p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      
                                                  </div>
                                                  
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Brand Filter -->
                                    <div class="popCard card">
                                      <div class="popHeader card-header" id="Brandaccord">
                                          <div class="popHeaderbtn collapsed" data-toggle="collapse" 
                                          data-target="#collapseBrand" aria-expanded="true" aria-controls="collapseBrand">
                                            <h3 class="mb-0">Brand </h3>
                                            <i class="bi bi-chevron-down"></i>
                                          </div>
                                      </div>    
                                  
                                      <div id="collapseBrand" class="popcollapse collapse " 
                                      aria-labelledby="Brandaccord" data-parent="#popularityaccordion">
                                        <div class="popCardBody card-body">
                                            <div class="brandFiltermain">
                                                <div class="brandSearch">
                                                    <input type="text" placeholder="Search" class="form-control">
                                                </div>
                                                <div class="brandfilterSelect">
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="popFiltercard">
                                                        <input type="checkbox" id="popFilter1">
                                                        <label for="popFilter1">
                                                            <p class="mb-0">Brand <strong>(100)</strong></p>
                                                            <span><i class="bi bi-check-lg"></i></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Gender Filter -->
                                    <div class="popCard card">
                                        <div class="popHeader card-header" id="Genderaccord">
                                            <div class="popHeaderbtn collapsed" data-toggle="collapse" 
                                            data-target="#collapseGender" aria-expanded="true" aria-controls="collapseGender">
                                              <h3 class="mb-0">Gender </h3>
                                              <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </div>    
                                    
                                        <div id="collapseGender" class="popcollapse collapse " 
                                        aria-labelledby="Genderaccord" data-parent="#popularityaccordion">
                                          <div class="popCardBody card-body">
                                              <div class="brandFiltermain">
                                                  <div class="brandfilterSelect mt-0">
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">Male <strong>(100)</strong></p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">Female <strong>(100)</strong></p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      
                                                  </div>
                                                  
                                              </div>
                                          </div>
                                        </div>
                                      </div>

                                      <!-- Discount -->
                                      <div class="popCard card">
                                        <div class="popHeader card-header" id="Discointaccord">
                                            <div class="popHeaderbtn collapsed" data-toggle="collapse" 
                                            data-target="#collapseDiscoint" aria-expanded="true" aria-controls="collapseDiscoint">
                                              <h3 class="mb-0">Discount </h3>
                                              <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </div>    
                                    
                                        <div id="collapseDiscoint" class="popcollapse collapse " 
                                        aria-labelledby="Discointaccord" data-parent="#popularityaccordion">
                                          <div class="popCardBody card-body">
                                              <div class="brandFiltermain">
                                                  <div class="brandfilterSelect mt-0">
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="disFilter1">
                                                          <label for="disFilter1">
                                                              <p class="mb-0">70% And Above</p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="disFilter2">
                                                          <label for="disFilter2">
                                                              <p class="mb-0">60% And Above</p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="disFilter3">
                                                          <label for="disFilter3">
                                                              <p class="mb-0">50% And Above</p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter4">
                                                          <label for="popFilter4">
                                                              <p class="mb-0">40% And Above</p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter5">
                                                          <label for="popFilter5">
                                                              <p class="mb-0">30% And Above</p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">20% And Above</p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">10% And Above</p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                      <div class="popFiltercard">
                                                          <input type="checkbox" id="popFilter1">
                                                          <label for="popFilter1">
                                                              <p class="mb-0">All Discounted Products</p>
                                                              <span><i class="bi bi-check-lg"></i></span>
                                                          </label>
                                                      </div>
                                                  </div>
                                                  
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-9 px-2">
                            <div class="productrow row">
                                <div class="productCol col-lg-4 px-2">
                                    <div class="productCardMain">
                                        <div class="productCardimage position-relative">
                                            <span class="pdtag">Featured</span>
                                            <a href="#!">
                                                <img src="assets/images/productImg.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="productCardinfo">
                                            <h3><a href="#!">Smashbox The Original Photo Finish Smooth & Blur Foundation</a></h3>
                                            <p class="pdprice">MRP:<strong>₹3600</strong></p>
                                            <div class="pdstarrating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <sapn>(5)</sapn>
                                            </div>
                                            <p class="pdsizes">10 Shades</p>
                                        </div>
                                        <div class="pdaddtocart">
                                            <button class="pdwishlistbtn">
                                                <i class="bi bi-heart"></i>
                                                <!-- <i class="bi bi-heart-fill"></i> -->
                                            </button>
                                            <button class="addtocartbtn">Add to Bag</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="productCol col-lg-4 px-2">
                                    <div class="productCardMain">
                                        <div class="productCardimage position-relative">
                                            <span class="pdtag">Featured</span>
                                            <a href="#!">
                                                <img src="assets/images/productImg.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="productCardinfo">
                                            <h3><a href="#!">Smashbox The Original Photo Finish Smooth & Blur Foundation</a></h3>
                                            <p class="pdprice">MRP:<strong>₹3600</strong></p>
                                            <div class="pdstarrating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <sapn>(5)</sapn>
                                            </div>
                                            <p class="pdsizes">10 Shades</p>
                                        </div>
                                        <div class="pdaddtocart">
                                            <button class="pdwishlistbtn">
                                                <i class="bi bi-heart"></i>
                                                <!-- <i class="bi bi-heart-fill"></i> -->
                                            </button>
                                            <button class="addtocartbtn">Add to Bag</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="productCol col-lg-4 px-2">
                                    <div class="productCardMain">
                                        <div class="productCardimage position-relative">
                                            <span class="pdtag">Featured</span>
                                            <a href="#!">
                                                <img src="assets/images/productImg.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="productCardinfo">
                                            <h3><a href="#!">Smashbox The Original Photo Finish Smooth & Blur Foundation</a></h3>
                                            <p class="pdprice">MRP:<strong>₹3600</strong></p>
                                            <div class="pdstarrating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <sapn>(5)</sapn>
                                            </div>
                                            <p class="pdsizes">10 Shades</p>
                                        </div>
                                        <div class="pdaddtocart">
                                            <button class="pdwishlistbtn">
                                                <i class="bi bi-heart"></i>
                                                <!-- <i class="bi bi-heart-fill"></i> -->
                                            </button>
                                            <button class="addtocartbtn">Add to Bag</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="productCol col-lg-4 px-2">
                                    <div class="productCardMain">
                                        <div class="productCardimage position-relative">
                                            <span class="pdtag">Featured</span>
                                            <a href="#!">
                                                <img src="assets/images/productImg.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="productCardinfo">
                                            <h3><a href="#!">Smashbox The Original Photo Finish Smooth & Blur Foundation</a></h3>
                                            <p class="pdprice">MRP:<strong>₹3600</strong></p>
                                            <div class="pdstarrating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <sapn>(5)</sapn>
                                            </div>
                                            <p class="pdsizes">10 Shades</p>
                                        </div>
                                        <div class="pdaddtocart">
                                            <button class="pdwishlistbtn">
                                                <i class="bi bi-heart"></i>
                                                <!-- <i class="bi bi-heart-fill"></i> -->
                                            </button>
                                            <button class="addtocartbtn">Add to Bag</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="productCol col-lg-4 px-2">
                                    <div class="productCardMain">
                                        <div class="productCardimage position-relative">
                                            <span class="pdtag">Featured</span>
                                            <a href="#!">
                                                <img src="assets/images/productImg.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="productCardinfo">
                                            <h3><a href="#!">Smashbox The Original Photo Finish Smooth & Blur Foundation</a></h3>
                                            <p class="pdprice">MRP:<strong>₹3600</strong></p>
                                            <div class="pdstarrating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <sapn>(5)</sapn>
                                            </div>
                                            <p class="pdsizes">10 Shades</p>
                                        </div>
                                        <div class="pdaddtocart">
                                            <button class="pdwishlistbtn">
                                                <i class="bi bi-heart"></i>
                                                <!-- <i class="bi bi-heart-fill"></i> -->
                                            </button>
                                            <button class="addtocartbtn">Add to Bag</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="productCol col-lg-4 px-2">
                                    <div class="productCardMain">
                                        <div class="productCardimage position-relative">
                                            <span class="pdtag">Featured</span>
                                            <a href="#!">
                                                <img src="assets/images/productImg.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="productCardinfo">
                                            <h3><a href="#!">Smashbox The Original Photo Finish Smooth & Blur Foundation</a></h3>
                                            <p class="pdprice">MRP:<strong>₹3600</strong></p>
                                            <div class="pdstarrating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <sapn>(5)</sapn>
                                            </div>
                                            <p class="pdsizes">10 Shades</p>
                                        </div>
                                        <div class="pdaddtocart">
                                            <button class="pdwishlistbtn">
                                                <i class="bi bi-heart"></i>
                                                <!-- <i class="bi bi-heart-fill"></i> -->
                                            </button>
                                            <button class="addtocartbtn">Add to Bag</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- Brand Description -->
        <div class="container">
            <div class="brandDesc">
                <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio? Dolores quia libero atque repellat mollitia ex distinctio vel quo?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio? Dolores quia libero atque repellat mollitia ex distinctio vel quo?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio? Dolores quia libero atque repellat mollitia ex distinctio vel quo?
                </p>
                <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio? Dolores quia libero atque repellat mollitia ex distinctio vel quo?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio? Dolores quia libero atque repellat mollitia ex distinctio vel quo?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio? Dolores quia libero atque repellat mollitia ex distinctio vel quo?
                </p>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio? Dolores quia libero atque repellat mollitia ex distinctio vel quo?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio? Dolores quia libero atque repellat mollitia ex distinctio vel quo?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio? Dolores quia libero atque repellat mollitia ex distinctio vel quo?
                </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, voluptatum!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, voluptatum!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, voluptatum!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, voluptatum!</li>
                </ul>
            </div>
        </div>
@endsection