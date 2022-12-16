@extends('client.master')

@section('title', 'Trang chủ')

@section('content-title', 'Trang chủ')

@section('content')

<!-- Bất động sản theo địa điểm -->
{{-- <section class="property-city pb70">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3">
              <div class="main-title text-center">
                  <h2>Bất động sản theo địa điểm</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
              <div class="explore_city custom_class_from_520 fl-520">
                  <div class="thumb"><img class="img-fluid" src="images/cities/1.jpg" alt="1.jpg">
                  </div>
                  <div class="details">
                      <h4 class="title"><a href="page-listing-single-v3.html">Los Angeles</a></h4>
                      <p>15 Properties</p>
                  </div>
              </div>
              <div class="explore_city custom_class_from_520 fr-520">
                  <div class="thumb"><img class="img-fluid" src="images/cities/2.jpg" alt="2.jpg">
                  </div>
                  <div class="details">
                      <h4 class="title"><a href="page-listing-single-v3.html">London</a></h4>
                      <p>23 Properties</p>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
              <div class="explore_city custom_class_from_520 fl-520">
                  <div class="thumb"><img class="img-fluid" src="images/cities/3.jpg" alt="3.jpg">
                  </div>
                  <div class="details">
                      <h4 class="title"><a href="page-listing-single-v3.html">New York</a></h4>
                      <p>7543 Properties</p>
                  </div>
              </div>
              <div class="explore_city custom_class_from_520 fr-520">
                  <div class="thumb"><img class="img-fluid" src="images/cities/4.jpg" alt="4.jpg">
                  </div>
                  <div class="details">
                      <h4 class="title"><a href="page-listing-single-v3.html">Paris</a></h4>
                      <p>821 Properties</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 col-xl-6">
              <div class="explore_city style2">
                  <div class="thumb"><img class="img-fluid" src="images/cities/5.jpg" alt="5.jpg">
                  </div>
                  <div class="details">
                      <h4 class="title"><a href="page-listing-single-v3.html">Florida</a></h4>
                      <p>411 Properties</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 col-xl-2">
              <div class="explore_city custom_class_from_767 fl-767">
                  <div class="thumb"><img class="img-fluid" src="images/cities/6.jpg" alt="6.jpg">
                  </div>
                  <div class="details">
                      <h4 class="title"><a href="page-listing-single-v3.html">Miami</a></h4>
                      <p>42 Properties</p>
                  </div>
              </div>
              <div class="explore_city custom_class_from_767 fr-767">
                  <div class="thumb"><img class="img-fluid" src="images/cities/7.jpg" alt="7.jpg">
                  </div>
                  <div class="details">
                      <h4 class="title"><a href="page-listing-single-v3.html">Istanbul</a></h4>
                      <p>392 Properties</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section> --}}

<!-- Bất động sản -->
<section class="feature-property bgc-alice-blue">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="main-title text-center">
                  <h2>Bất động sản dành cho bạn</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="col-lg-12">
                  <div class="popular_listing_slider1">
                      @foreach ($bds as $item)
                          <div class="item">
                              <div class="feat_property">
                                  <div class="thumb"> <img class="img-whp"
                                          src="{{ $item->images ? '' . Storage::url($item->images) : 'http://placehold.it/100x100' }}"
                                          alt="" height="200">
                                      <div class="thmb_cntnt">
                                          <ul class="tag mb0">
                                              <li class="list-inline-item"><a href="{{ route('route_FrontEnd_detail', ['id' => $item->id]) }}">{{ $item->cateName }}</a></li>
                                          </ul>
                                          <ul class="tag2 mb0">
                                              <li class="list-inline-item"><a href="#">FOR SALE</a>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="thmb_cntnt2">
                                          <ul class="listing_gallery mb0">
                                              <li class="list-inline-item"><a class="text-white"
                                                      href="#"><span
                                                          class="flaticon-photo-camera mr5"></span> 22</a>
                                              </li>
                                              <li class="list-inline-item"><a class="text-white"
                                                      href="#"><span
                                                          class="flaticon-play-button mr5"></span> 3</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="details">
                                      <div class="tc_content">
                                          <div class="badge_icon"><a href="#"><img
                                                      src="{{ $item->images ? '' . Storage::url($item->images) : 'http://placehold.it/100x100' }}"
                                                      alt=""></a></div>
                                          <h4><a href="{{ route('route_FrontEnd_detail', ['id' => $item->id]) }}l">{{ $item->name }}</a>
                                          </h4>
                                          <p>{{ $item->address }}</p>
                                          <ul class="prop_details mb0">
                                              <li class="list-inline-item"><a href="#"><span
                                                          class="flaticon-bed pr5"></span>
                                                      <br>{{ $item->so_phong }}</a></li>
                                              <li class="list-inline-item"><a href="#"><span
                                                          class="flaticon-bath pr5"></span>
                                                      <br>{{ $item->so_tollet }}</a></li>
                                              <li class="list-inline-item"><a href="#"><span
                                                          class="flaticon-home pr5"></span>
                                                      <br>{{ $item->huong_nha }}</a></li>
                                              <li class="list-inline-item"><a href="#"><span
                                                          class="flaticon-ruler pr5"></span>
                                                      <br>{{ $item->spread }}
                                                      m²</a></li>
                                          </ul>
                                      </div>
                                      <div class="fp_footer">
                                          <ul class="fp_meta float-left mb0">
                                              <li class="list-inline-item"><a href="#">
                                                      <span class="heading-color fw600">
                                                          {{ number_format($item->price) }} VND</span></a>
                                              </li>
                                          </ul>
                                          <ul class="fp_meta float-right mb0">
                                              <li class="list-inline-item"><a class="icon"
                                                      href="#"><span
                                                          class="flaticon-resize"></span></a></li>
                                              <li class="list-inline-item"><a class="icon"
                                                      href="#"><span class="flaticon-add"></span></a>
                                              </li>
                                              <li class="list-inline-item"><a class="icon"
                                                      href="#"><span
                                                          class="flaticon-heart-shape-outline"></span></a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
</section>


<!-- Dự án nổi bật -->
{{-- <section class="recent-property">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3">
              <div class="main-title text-center">
                  <h2>Dự án nổi bật</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-xl">
              <div class="feat_property all_listing_style3">
                  <div class="thumb">
                      <img class="img-whp" src="images/property/lls31.jpg" alt="lls31.jpg">
                      <div class="thmb_cntnt">
                          <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">SOLD</a></li>
                          </ul>
                      </div>
                      <div class="thmb_cntnt2 top">
                          <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-play-button mr5"></span> 3</a></li>
                          </ul>
                      </div>
                      <div class="fp_footer all_listing_style3">
                          <ul class="fp_meta float-left mb0 mt5">
                              <li class="list-inline-item">
                                  <a href="#"><span class="fw600">$7,500/mo</span></a>
                              </li>
                          </ul>
                          <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-heart-shape-outline"></span></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="details">
                      <div class="tc_content">
                          <h4><a href="page-listing-single-v8.html">Diamond Manor Apartment</a></h4>
                          <p>Quincy St, Brooklyn, NY, USA</p>
                          <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bed vab pr5"></span> 4</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bath vab pr5"></span> 5</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-car vab pr5"></span> 1</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-ruler vab pr5"></span> 1200 Sq Ft</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl">
              <div class="feat_property all_listing_style3">
                  <div class="thumb">
                      <img class="img-whp" src="images/property/lls32.jpg" alt="lls32.jpg">
                      <div class="thmb_cntnt">
                          <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">SOLD</a></li>
                          </ul>
                      </div>
                      <div class="thmb_cntnt2 top">
                          <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-play-button mr5"></span> 3</a></li>
                          </ul>
                      </div>
                      <div class="fp_footer all_listing_style3">
                          <ul class="fp_meta float-left mb0 mt5">
                              <li class="list-inline-item">
                                  <a href="#"><span class="fw600">$7,500/mo</span></a>
                              </li>
                          </ul>
                          <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-heart-shape-outline"></span></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="details">
                      <div class="tc_content">
                          <h4><a href="page-listing-single-v8.html">Gorgeous Villa Bay</a></h4>
                          <p>Quincy St, Brooklyn, NY, USA</p>
                          <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bed vab pr5"></span> 4</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bath vab pr5"></span> 5</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-car vab pr5"></span> 1</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-ruler vab pr5"></span> 1200 Sq Ft</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl">
              <div class="feat_property all_listing_style3">
                  <div class="thumb">
                      <img class="img-whp" src="images/property/lls33.jpg" alt="lls33.jpg">
                      <div class="thmb_cntnt">
                          <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">SOLD</a></li>
                          </ul>
                      </div>
                      <div class="thmb_cntnt2 top">
                          <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-play-button mr5"></span> 3</a></li>
                          </ul>
                      </div>
                      <div class="fp_footer all_listing_style3">
                          <ul class="fp_meta float-left mb0 mt5">
                              <li class="list-inline-item">
                                  <a href="#"><span class="fw600">$7,500/mo</span></a>
                              </li>
                          </ul>
                          <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-heart-shape-outline"></span></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="details">
                      <div class="tc_content">
                          <h4><a href="page-listing-single-v8.html">Selway Apartments</a></h4>
                          <p>Quincy St, Brooklyn, NY, USA</p>
                          <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bed vab pr5"></span> 4</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bath vab pr5"></span> 5</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-car vab pr5"></span> 1</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-ruler vab pr5"></span> 1200 Sq Ft</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl">
              <div class="feat_property all_listing_style3">
                  <div class="thumb">
                      <img class="img-whp" src="images/property/lls34.jpg" alt="lls34.jpg">
                      <div class="thmb_cntnt">
                          <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">SOLD</a></li>
                          </ul>
                      </div>
                      <div class="thmb_cntnt2 top">
                          <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-play-button mr5"></span> 3</a></li>
                          </ul>
                      </div>
                      <div class="fp_footer all_listing_style3">
                          <ul class="fp_meta float-left mb0 mt5">
                              <li class="list-inline-item">
                                  <a href="#"><span class="fw600">$7,500/mo</span></a>
                              </li>
                          </ul>
                          <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-heart-shape-outline"></span></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="details">
                      <div class="tc_content">
                          <h4><a href="page-listing-single-v8.html">Luxury Family Home</a></h4>
                          <p>Quincy St, Brooklyn, NY, USA</p>
                          <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bed vab pr5"></span> 4</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bath vab pr5"></span> 5</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-car vab pr5"></span> 1</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-ruler vab pr5"></span> 1200 Sq Ft</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl">
              <div class="feat_property all_listing_style3">
                  <div class="thumb">
                      <img class="img-whp" src="images/property/lls35.jpg" alt="lls35.jpg">
                      <div class="thmb_cntnt">
                          <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">SOLD</a></li>
                          </ul>
                      </div>
                      <div class="thmb_cntnt2 top">
                          <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span
                                          class="flaticon-play-button mr5"></span> 3</a></li>
                          </ul>
                      </div>
                      <div class="fp_footer all_listing_style3">
                          <ul class="fp_meta float-left mb0 mt5">
                              <li class="list-inline-item">
                                  <a href="#"><span class="fw600">$7,500/mo</span></a>
                              </li>
                          </ul>
                          <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span
                                          class="flaticon-heart-shape-outline"></span></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="details">
                      <div class="tc_content">
                          <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                          <p>Quincy St, Brooklyn, NY, USA</p>
                          <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bed vab pr5"></span> 4</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-bath vab pr5"></span> 5</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-car vab pr5"></span> 1</a></li>
                              <li class="list-inline-item"><a href="#"><span
                                          class="flaticon-ruler vab pr5"></span> 1200 Sq Ft</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section> --}}

<!-- Why -->
{{-- <section class="divider home-style9 parallax" data-stellar-background-ratio="0.2">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3">
              <div class="main-title text-center">
                  <h2 class="text-white">Tại sao bạn lại chọn chúng tôi</h2>
                  <p class="text-white">We provide full service at every step.</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-6 col-xl">
              <div class="why_chose_us home3">
                  <div class="icon"> <span class="flaticon-home"></span> </div>
                  <div class="details">
                      <h4 class="text-white">Houses</h4>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-xl">
              <div class="why_chose_us home3">
                  <div class="icon"> <span class="flaticon-apartment"></span> </div>
                  <div class="details">
                      <h4 class="text-white">Apartment</h4>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-xl">
              <div class="why_chose_us home3">
                  <div class="icon"> <span class="flaticon-business-and-trade"></span> </div>
                  <div class="details">
                      <h4 class="text-white">Office</h4>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-xl">
              <div class="why_chose_us home3">
                  <div class="icon"> <span class="flaticon-villa"></span> </div>
                  <div class="details">
                      <h4 class="text-white">Villa</h4>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-xl">
              <div class="why_chose_us home3">
                  <div class="icon"> <span class="flaticon-living-room"></span> </div>
                  <div class="details">
                      <h4 class="text-white">Room</h4>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section> --}}

<!-- Tin tức -->
<section class="our-blog pb70">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3">
              <div class="main-title text-center">
                  <h2>Tin Nổi Bật</h2>
              </div>
          </div>
      </div>
      <div class="row">
        @foreach ($news as $new)
          <div class="col-md-6 col-xl-3">
              <div class="for_blog feat_property">
                  <div class="thumb"> <img class="img-whp" src="{{ $new->thumbnail_url ? '' . Storage::url($new->thumbnail_url) : 'http://placehold.it/100x100' }}" height="250" alt="1.jpg">
                      <div class="tag bgc-thm"><a class="text-white" href="{{ route('route_FrontEnd_detail_new', ['id' => $new->id]) }}">{{ $new->cateName }}</a></div>
                  </div>
                  <div class="details">
                      <div class="tc_content">
                          <div class="bp_meta">
                              <ul>
                                  <li class="list-inline-item"><a href="{{ route('route_FrontEnd_detail_new', ['id' => $new->id]) }}"><span
                                              class="flaticon-user fz15 mr10"></span> Thắng</a></li>
                                  <li class="list-inline-item"><a href="#"><span
                                              class="flaticon-calendar fz15 mr10"></span> 06 - 12 - 2021</a>
                                  </li>
                              </ul>
                          </div>
                          <h4>{{ $new->title }}</h4>
                          <p>{{ $new->description}}
                          </p>
                          <a class="text-thm tdu read_more_btn" href="page-blog-single.html">Xem thêm</a>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</section>



@endsection
