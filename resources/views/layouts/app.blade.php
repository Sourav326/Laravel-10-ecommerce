<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.jpg">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>{{ config('app.name', 'Winning Kart') }}</title>
</head>

<body>
    <div class="main">
    <header class="desktopHeader">
    <div class="topBar">
                <div class="topBar-BG">
                    <img src="assets/images/topbarbg.webp">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <ul class="topBarlinks">
                                <li class="topBarlinksitem">
                                    <a href="#!">
                                        <i class="bi bi-phone"></i>
                                        <span>Get App</span></a>
                                </li>
                                <li class="topBarlinksitem">
                                    <a href="#!"><i class="bi bi-geo-alt"></i><span>Store & Events</span></a>
                                </li>
                                <li class="topBarlinksitem">
                                    <a href="#!"><i class="bi bi-gift"></i><span>Gift Card</span></a>
                                </li>
                                <li class="topBarlinksitem">
                                    <a href="#!"><i class="bi bi-question-circle"></i><span>Help</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middleHeader">
                <div class="container">
                    <div class="middleHeader-row row position-relative">
                        <div class="col-lg-7" style="position: un;">
                            <div class="middleHeaderLeft">
                                <div class="logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('assets/images/win-logo.png')}}" alt="logo">
                                    </a>
                                </div>
                                <div class="mainNav">
                                    <ul>
                                        <li><a href="javascript:void(0)">Brand</a>
                                            <div class="megaSubmenumain">
                                                <div class="row bandMenu mx-0">
                                                    <div class="col-lg-4">
                                                        <div class="brandSearchmain">
                                                            <div class="brandSearchinner">
                                                                <div class="position-relative">
                                                                    <i class="bi bi-search"></i>
                                                                    <input class="form-control"
                                                                        placeholder="Search Brands" id="search">
                                                                    <i class="bi bi-x-circle"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="topBrandListmain position-relative">
                                                            <div class="aplabetSelect">
                                                                <div class="aplabetSelectScroll">
                                                                    <a href="#!">.</a>
                                                                    <a href="#!">A</a>
                                                                    <a href="#!">B</a>
                                                                    <a href="#!">C</a>
                                                                    <a href="#!">D</a>
                                                                    <a href="#!">E</a>
                                                                    <a href="#!">F</a>
                                                                    <a href="#!">G</a>
                                                                    <a href="#!">H</a>
                                                                    <a href="#!">I</a>
                                                                    <a href="#!">J</a>
                                                                    <a href="#!">K</a>
                                                                    <a href="#!">L</a>
                                                                    <a href="#!">M</a>
                                                                    <a href="#!">N</a>
                                                                    <a href="#!">O</a>
                                                                    <a href="#!">P</a>
                                                                    <a href="#!">Q</a>
                                                                    <a href="#!">R</a>
                                                                    <a href="#!">S</a>
                                                                    <a href="#!">T</a>
                                                                    <a href="#!">U</a>
                                                                    <a href="#!">V</a>
                                                                    <a href="#!">W</a>
                                                                    <a href="#!">X</a>
                                                                    <a href="#!">Y</a>
                                                                    <a href="#!">Z</a>
                                                                </div>
                                                            </div>
                                                            <h3>Topbrands</h3>
                                                            <div class="topBrandListinner" id="list">
                                                                <h4>#</h4>
                                                                @foreach($menuItemsBrands as $menuItemsBrand)
                                                                <a href="{{route('brand.show',['id' => $menuItemsBrand->id])}}">{{$menuItemsBrand->title}}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 px-0">
                                                        <div class="bransLaunchesmain">
                                                            <ul class="nav nav-pills brandPills" id="pills-tab"
                                                                role="tablist">
                                                                @foreach($menuItemsCategoryBrands as $menuItemsCategoryBrand)
                                                                    <li class="nav-item brandItem" role="presentation">
                                                                        <button class="nav-link brandLink"
                                                                            id="pills-popular-tab" data-toggle="pill"
                                                                            data-target="#pills-{{$menuItemsCategoryBrand->id}}" type="button"
                                                                            role="tab" aria-controls="pills-{{$menuItemsCategoryBrand->id}}"
                                                                            aria-selected="true">{{$menuItemsCategoryBrand->title}}</button>
                                                                    </li>
                                                                    @endforeach
                                                            </ul>
                                                            <div class="tab-content" id="pills-tabContent">
                                                            @foreach($menuItemsCategoryBrands as $menuItemsCategoryBrand)
                                                                <div class="tab-pane" id="pills-{{$menuItemsCategoryBrand->id}}"
                                                                    role="tabpanel" aria-labelledby="pills-{{$menuItemsCategoryBrand->id}}-tab">
                                                                    <div class="brnadimgbxrow">
                                                                        @foreach($menuItemsCategoryBrand->brands as $brand)
                                                                            <div class="brnadimgbxcol">
                                                                                <a href="{{route('brand.show',['id' => $brand->id])}}">
                                                                                <img src="{{asset('storage/images/brands').'/'.$brand->logo}}" alt="{{$brand->logo}}">
                                                                                </a>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                             @endforeach
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="offers.html">Offer</a>
                                        </li>
                                        <li><a href="winning-kart-fashion.html">Winning Kart</a>
                                            <div class="megaSubmenumain">
                                                <div class="winkartsubmenumain">
                                                    <div class="row mx-0">
                                                        <div class="col-lg-8 pr-0">
                                                            <div class="row winkartlinks">
                                                                <div class="col-lg-3 px-2">
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="category.html">Child
                                                                                    Categpry</a></li>
                                                                            <li><a href="category.html">Child
                                                                                    Categpry</a></li>
                                                                            <li><a href="category.html">Child
                                                                                    Categpry</a></li>
                                                                            <li><a href="category.html">Child
                                                                                    Categpry</a></li>
                                                                            <li><a href="category.html">Child
                                                                                    Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 px-2">
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 px-2">
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 px-2">
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="winkartlinkbx">
                                                                        <a href="#!">Main Category</a>
                                                                        <ul>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                            <li><a href="#!">Child Categpry</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 pr-0">
                                                            <div class="winkartmenubanner">
                                                                <img src="{{asset('https://www.nykaa.com/media/wysiwyg/2022/Fashion-mega-menu-a.jpeg')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="luxe-range.html">Luxe Range</a></li>
                                        <li><a href="shop-all.html">Shop All Products</a></li>
                                        <li><a href="combos.html">Combos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 my-auto">
                            <div class="middleHeaderRight">
                                <div class="headSearchmain">
                                    <div class="searchInput position-relative">
                                        <i class="bi bi-search"></i>
                                        <input type="text" placeholder="Search on Winning Kart" class="form-control">

                                        @if (Route::has('login'))
                                            @auth
                                                <div class="cart">
                                                    <div class="userLoginhead">
                                                        <div class="profileLabel">
                                                            <i class="bi bi-person"></i>
                                                            <span>Mr.{{auth()->user()->name}}</span>
                                                        </div>
                                                        <div class="userLogindropdown">
                                                            <a href="{{route('user.profile')}}"><i class="bi bi-person"></i> Profile</a>
                                                            <a href="my-orders.html"><i class="bi bi-box-seam"></i> Orders</a>
                                                            <a href="wishlist.html"><i class="bi bi-heart"></i> Wishlist</a>
                                                            <a href="{{route('user.logout')}}"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                                        </div>
                                                    </div>
                                                    <button class="btn cartBtn">
                                                        <i class="bi bi-bag"></i>
                                                        <span class="cartcounter">10</span>
                                                    </button>
                                                </div>
                                            @else
                                                <a href="{{ route('login') }}"><button type="button" class="btn signInBtn">Sign
                                                        in</button></a>
                                                        <div class="cart" title="Login to see your cart">
                                                            <button class="btn cartBtn">
                                                                <i class="bi bi-bag"></i>
                                                            </button>
                                                        </div>

                                                <!-- @if (Route::has('register'))
                                                                <a href="{{ route('register') }}"><button type="button" class="btn signInBtn">Register</button></a>
                                                            @endif -->
                                            @endauth
                                        @endif

                                        <div class="searchSuggest">
                                            <h3>Trending Searches</h3>
                                            <div class="searchesLink">
                                                <a href="#!"><i class="bi bi-arrow-up-right"></i>Cosmetics</a>
                                                <a href="#!"><i class="bi bi-arrow-up-right"></i>Face Mask</a>
                                                <a href="#!"><i class="bi bi-arrow-up-right"></i>Lipsticks</a>
                                                <a href="#!"><i class="bi bi-arrow-up-right"></i>Hand Sanitisers</a>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @if(Route::currentRouteName() === 'home')
    
            <div class="bottomHeader">
                <div class="container">
                    <div class="bottomHeaderinner">
                        <ul>
                            <li class="navLink">
                                <a href="#!">Makeup</a>
                                <div class="subMenu">
                                    <div class="row subMenuRow">
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="navLink">
                                <a href="#!">Hair</a>
                                <div class="subMenu">
                                    <div class="row subMenuRow">
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="navLink">
                                <a href="#!">Skin</a>
                                <div class="subMenu">
                                    <div class="row subMenuRow">
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="navLink">
                                <a href="#!">Appliances</a>
                                <div class="subMenu">
                                    <div class="row subMenuRow">
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 px-2">
                                            <div class="subMenuLinks" style="background-color: #f7f7f7">
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                                <div class="subMenuLinksinner">
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                    <a href="#!">Child Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="navLink">
                                <a href="#!">Bath & Body</a>
                            </li>
                            <li class="navLink">
                                <a href="#!">Natural</a>
                            </li>
                            <li class="navLink">
                                <a href="#!">Mom & Baby</a>
                            </li>
                            <li class="navLink">
                                <a href="#!">Health & Wellness</a>
                            </li>
                            <li class="navLink">
                                <a href="#!">Men</a>
                            </li>
                            <li class="navLink">
                                <a href="#!">Fragrance</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        @endif

        </header>


        @if(Session::has('danger'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('danger')}}
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif




        @yield('content')




        <footer>
            <div class="container">
                <div class="row footerRow">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">

                        <div class="footerLinkBox">
                            <div class="footerLogo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/images/win-logo-white.png')}}" alt="logo"
                                        style="max-width: 100%;">
                                </a>
                            </div>
                            <p class="footerAbtus">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga hic est obcaecati veniam
                                libero deleniti ex odio sunt nostrum vitae!
                            </p>

                            <div class="socailLinks">
                                <a href="#!"><i class="bi bi-facebook"></i></a>
                                <a href="#!"><i class="bi bi-instagram"></i></a>
                                <a href="#!"><i class="bi bi-linkedin"></i></a>
                                <a href="#!"><i class="bi bi-youtube"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="footerLinkBox">
                            <h3>Quick Links</h3>
                            <a href="about-us.html" class="footerLink">About Us</a>
                            <a href="about-us.html#aboutWin" class="footerLink">Who We Are</a>
                            <a href="about-us.html#testimonial-id" class="footerLink">Testimonials</a>
                            <a href="faq.html" class="footerLink">FAQ</a>
                            <a href="about-us.html#carrerFormId" class="footerLink">Career</a>
                            <a href="sell-on-winningkart.html" class="footerLink">Sell On Winning Kart</a>
                            <a href="faq.html" class="footerLink">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="footerLinkBox">
                            <h3>Shop By Category</h3>
                            <a href="shop-all.html" class="footerLink">New Arrivals</a>
                            <a href="brands.html" class="footerLink">Brands</a>
                            <a href="offers.html" class="footerLink">Offers</a>
                            <a href="winning-kart-fashion.html" class="footerLink">Winning Kart</a>
                            <a href="luxe-range.html" class="footerLink">Luxe Range</a>
                            <a href="combos.html" class="footerLink">Combos</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="footerLinkBox">
                            <h3>Informational</h3>
                            <a href="{{route('privacyPolicy')}}" class="footerLink">Privacy Policy</a>
                            <a href="shipping-policy.html" class="footerLink">Shipping & Returns</a>
                            <a href="terms-condition.html" class="footerLink">Terms & Condition</a>
                            <a href="cancelletion-return.html" class="footerLink">Cancelletion & Return</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="preFooter">
                <!-- <div class="infoLinks">
                    <a href="#!">Terms & Condition</a>
                    <a href="#!">Shipping Policy</a>
                    <a href="#!">Cancelletion Policy</a>
                    <a href="#!">Privacy Policy</a>
                </div> -->
                <div class="copyrights">
                    <p>© 2023 Winning Kart | All Rights Reserved | Handcrafted with ♡ by Sachdeva Technologies</p>
                </div>
            </div>

        </footer>




    </div>

    <script>
function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}
</script>

<script>
        const searchInput = document.getElementById('search');
        const list = document.getElementById('list').getElementsByTagName('a');

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase();
            
            for (let i = 0; i < list.length; i++) {
                const item = list[i].textContent.toLowerCase();
                if (item.includes(searchTerm)) {
                    list[i].style.display = 'block';
                } else {
                    list[i].style.display = 'none';
                }
            }
        });
    </script>
<script src="{{asset('assets/js/jquery.slim.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Swiper JS -->
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>
<html>