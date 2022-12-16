<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="advanced search, agency, agent, classified, directory, google maps, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
    <meta name="description" content="Houzing - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">

    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/responsive.css') }}">

    <title>@yield('title')</title>

    <link href="{{ asset('client/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('client/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />
</head>

<body>
    <div class="wrapper">

        <!-- Header -->
        @include('client.header')

        <!-- Search -->
        <div class="header_top home9 dn-992">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="home9-advnc-search mt10">
                            <ul class="h1ads_1st_list mb0">
                                <li class="list-inline-item">
                                    <div class="home_form_input home9">
                                        <div class="input-group">
                                            <div class="home2_befor_icon"><span class="flaticon-houses"></span></div>
                                            <div class="select-wrap style1-dropdown">
                                                <select name="lang" class="form-control js-searchBox">
                                                    <option value="">Nhập tên, địa chỉ, thành phố</option>
                                                    <option value="EatonGarthPenthouse1">Chung cư</option>
                                                    <option value="EatonGarthPenthouse2">Căn hộ</option>
                                                    <option value="Hotels">Xem tất cả</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item float-right fn-lg">
                                    <div class="search_option_button home9">
                                        <button type="submit" class="btn btn-thm"><span
                                                class="flaticon-magnifiying-glass"></span> Tìm kiếm</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider -->
        <div class="home9-mainslider mt0 mt70-992">
            <div class="container-fluid p0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-banner-wrapper home10">
                            <div class="banner-style-one owl-theme owl-carousel">
                                <div class="slide slide-one"
                                    style="background-image: url({{ asset('client/images/home/8.jpg') }});height: 690px;">
                                    <div class="container">
                                        <div class="row home-content">
                                            <div class="col-lg-12 text-center p0">
                                                <h3 class="banner-title">Skyper Pool Apartment</h3>
                                                <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                                                <ul class="mb0 property_details">
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-bed"></span><br> <span
                                                            class="text">4 Beds</span></li>
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-bath"></span><br> <span
                                                            class="text">5 Baths</span></li>
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-car"></span><br> <span
                                                            class="text">1 Garage</span></li>
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-ruler"></span><br> <span
                                                            class="text">1200 Sq Ft</span></li>
                                                </ul>
                                                <h2 class="banner_top_title">$5,250<small>/mo</small></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide slide-one"
                                    style="background-image: url({{ asset('client/images/home/8.jpg') }});height: 690px;">
                                    <div class="container">
                                        <div class="row home-content">
                                            <div class="col-lg-12 text-center p0">
                                                <h3 class="banner-title">Gorgeous Villa Bay View</h3>
                                                <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                                                <ul class="mb0 property_details">
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-bed"></span><br> <span
                                                            class="text">4 Beds</span></li>
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-bath"></span><br> <span
                                                            class="text">5 Baths</span></li>
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-car"></span><br> <span
                                                            class="text">1 Garage</span></li>
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-ruler"></span><br> <span
                                                            class="text">1200 Sq Ft</span></li>
                                                </ul>
                                                <h2 class="banner_top_title">$5,250<small>/mo</small></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide slide-one"
                                    style="background-image: url(images/home/5.jpg);height: 690px;">
                                    <div class="container">
                                        <div class="row home-content">
                                            <div class="col-lg-12 text-center p0">
                                                <h3 class="banner-title">Gorgeous Villa Bay View</h3>
                                                <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                                                <ul class="mb0 property_details">
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-bed"></span><br> <span
                                                            class="text">4 Beds</span></li>
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-bath"></span><br> <span
                                                            class="text">5 Baths</span></li>
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-car"></span><br> <span
                                                            class="text">1 Garage</span></li>
                                                    <li class="list-inline-item"><span
                                                            class="icon flaticon-ruler"></span><br> <span
                                                            class="text">1200 Sq Ft</span></li>
                                                </ul>
                                                <h2 class="banner_top_title">$5,250<small>/mo</small></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-btn-block banner-carousel-btn">
                                <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i></span>
                                <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                            </div><!-- /.carousel-btn-block banner-carousel-btn -->
                        </div><!-- /.main-banner-wrapper -->
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
          <div class="mobile-menu">
              <div class="header stylehome1">
                  <div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10"
                          src="images/header-logo.svg" alt="header-logo.svg"> <span class="mt15">Houzing</span>
                  </div>
                  <ul class="menu_bar_home2">
                      <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon"
                              href="#"></a></li>
                      <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal"
                              data-target="#logInModal"><span class="flaticon-user"></span></a></li>
                      <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
                  </ul>
              </div>
          </div>
          <!-- /.mobile-menu -->
          <nav id="menu" class="stylehome1">
              <ul>
                  <li><span>Home</span></li>
                  <li><span>Pages</span>
                      <ul>
                          <li><span>Shop</span>
                              <ul>
                                  <li><a href="page-shop.html">Shop Pages</a></li>
                                  <li><a href="page-shop-single.html">Shop Single</a></li>
                                  <li><a href="page-shop-cart.html">Cart</a></li>
                                  <li><a href="page-shop-checkout.html">Checkout</a></li>
                                  <li><a href="page-shop-order.html">Order</a></li>
                              </ul>
                          </li>
                          <li><a href="page-about.html">About Us</a></li>
                          <li><span>Blog</span>
                              <ul>
                                  <li><a href="page-blog-grid.html">Blog Grid</a></li>
                                  <li><a href="page-blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                  <li><a href="page-blog-details.html">Blog Details</a></li>
                                  <li><a href="page-blog-list.html">Blog List</a></li>
                                  <li><a href="page-blog-single.html">Blog Single</a></li>
                                  <li><a href="page-blog-single2.html">Blog Single v2</a></li>
                              </ul>
                          </li>
                          <li><a href="page-coming-soon.html">Coming Soon</a></li>
                          <li><a href="page-gallery.html">Gallery</a></li>
                          <li><a href="page-faq.html">Faq</a></li>
                          <li><a href="page-login.html">My Account</a></li>
                          <li><a href="page-pricing.html">Pricing V1</a></li>
                          <li><a href="page-compare.html">Compare</a></li>
                          <li><a href="page-error.html">404 Page</a></li>
                          <li><a href="page-terms.html">Terms and Conditions</a></li>
                          <li><a href="page-ui-element.html">UI Elements</a></li>
                      </ul>
                  </li>
                  <li><a href="page-contact.html">Contact</a></li>
                  <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="#"><span
                              class="icon flaticon-button mr5"></span> Create Listing</a></li>
              </ul>
          </nav>
        </div>

        <!-- Footer -->
        @include('client.footer')
        <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    
    <script src="{{ asset('client/js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('client/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('client/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('client/js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('client/js/isotop.js') }}"></script>
    <script src="{{ asset('client/js/snackbar.min.js') }}"></script>
    <script src="{{ asset('client/js/simplebar.js') }}"></script>
    <script src="{{ asset('client/js/parallax.js') }}"></script>
    <script src="{{ asset('client/js/scrollto.js') }}"></script>
    <script src="{{ asset('client/js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('client/js/wow.min.js') }}"></script>
    <script src="{{ asset('client/js/progressbar.js') }}"></script>
    <script src="{{ asset('client/js/slider.js') }}"></script>
    <script src="{{ asset('client/js/pricing-slider.js') }}"></script>
    <script src="{{ asset('client/js/timepicker.js') }}"></script>
    <script src="{{ asset('client/js/wow.min.js') }}"></script>
    <!-- Custom script for all pages -->
    <script src="{{ asset('client/js/script.js') }}"></script>
</body>

</html>
