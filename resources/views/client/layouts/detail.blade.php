@extends('client.master')

@section('title', 'Chi tiết bất động sản')

@section('content-title', 'Chi tiết bất động sản')

@section('content')

<!-- Listing Single Property -->
<section class="listing-title-area pb50">
    <div class="container">
      <div class="row mb30">
        <div class="col-lg-7 col-xl-7">
          <div class="single_property_title mt30-767">
            <div class="media">
              <div class="media-body">
                <h2 class="mt-0">{{ $objItem->name }}</h2>
                <p>{{ $objItem->address }}</p>
                <ul class="prop_details mb0">
                  <li class="list-inline-item mr20"><a class="mr20" href="#"><span class="flaticon-bed pr5 vam"></span>{{ $objItem->so_phong }} Phòng</a></li>
                  <li class="list-inline-item mr20"><a class="mr20" href="#"><span class="flaticon-bath pr5 vam"></span>{{ $objItem->so_tollet }} Tollet</a></li>
                  <li class="list-inline-item mr20"><a class="mr20" href="#"><span class="flaticon-home pr5"></span>{{ $objItem->huong_nha }} </a></li>
                  <li class="list-inline-item mr20"><a class="mr20" href="#"><span class="flaticon-ruler pr5 vam"></span>{{ $objItem->spread }} m²</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-5">
          <div class="single_property_social_share_content text-right tal-md">
            <div class="spss style2 mt30">
              <ul class="mb0">
                <li class="list-inline-item icon"><a href="#"><span class="flaticon-share"></span></a></li>
                <li class="list-inline-item"><a href="#">Share</a></li>
                <li class="list-inline-item icon"><a href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                <li class="list-inline-item"><a href="#">Save</a></li>
              </ul>
            </div>
            <div class="price mt20 mb10"><h3><small class="mr10"></small>{{ number_format($objItem->price) }} VND</h3></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-12 pr0 pl15-767 pr15-767">
              <div class="spls_style_two mb30-md">
                <a class="popup-img" href="images/property/1.jpg">
                  <img class="img-fluid first-img" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="1.jpg">
                </a>
                <a href="#"><span class="baddge_left">FEATURED</span></a>
                <a href="#"><span class="baddge_right">FOR SALE</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="row">
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="images/property/2.jpg"><img class="img-fluid w100" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="2.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="images/property/3.jpg"><img class="img-fluid w100" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="3.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="images/property/4.jpg"><img class="img-fluid w100" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="4.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="images/property/5.jpg"><img class="img-fluid w100" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="5.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="images/property/6.jpg"><img class="img-fluid w100" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="6.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="images/property/7.jpg"><img class="img-fluid w100" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="7.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="images/property/8.jpg"><img class="img-fluid w100" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="8.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="images/property/9.jpg"><img class="img-fluid w100" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="9.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="images/property/10.jpg"><img class="img-fluid w100" src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}" alt="10.jpg"></a>
                <div class="overlay popup-img">
                  <h3 class="title">+4</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Agent Single Grid View -->
  <section class="our-agent-single pt0 pb70">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-9">
          <div class="row">
            <div class="col-lg-12">
              <div class="listing_single_description mb60">
                <h4 class="mb30">Mô tả</h4>
                <p class="gpara second_para white_goverlay mt10 mb20">{{ $objItem->content }}</p>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    <p class="mt10 mb10">{{ $objItem->content }}</p>
                  </div>
                </div>
                <p class="overlay_close"><a class="text-thm fz15 tdu" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Hiển thị thêm</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature Properties -->
  <section class="feature-property bgc-alice-blue">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Similar Listings</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="popular_listing_slider1">
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl1.jpg" alt="fl1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/1.png" alt="1.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                    <p>Quincy St, Brooklyn, NY, USA</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                        <span class="heading-color fw600">$7,500/mo</span></a></li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl2.jpg" alt="fl2.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/2.png" alt="2.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                    <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$5,250/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl3.jpg" alt="fl3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/3.png" alt="3.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">New Caledonian Wharf</a></h4>
                    <p>251 SW 6th Ln Florida City, FL</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$2,300/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl4.jpg" alt="fl4.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/4.png" alt="4.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                    <p>4 W 21st St Flatiron District, New York, NY</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$1,900/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl1.jpg" alt="fl1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/1.png" alt="1.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                    <p>Quincy St, Brooklyn, NY, USA</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                        <span class="heading-color fw600">$7,500/mo</span></a></li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl2.jpg" alt="fl2.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/2.png" alt="2.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                    <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$5,250/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl3.jpg" alt="fl3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/3.png" alt="3.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">New Caledonian Wharf</a></h4>
                    <p>251 SW 6th Ln Florida City, FL</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$2,300/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl4.jpg" alt="fl4.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/4.png" alt="4.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                    <p>4 W 21st St Flatiron District, New York, NY</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$1,900/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl1.jpg" alt="fl1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/1.png" alt="1.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                    <p>Quincy St, Brooklyn, NY, USA</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                        <span class="heading-color fw600">$7,500/mo</span></a></li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl2.jpg" alt="fl2.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/2.png" alt="2.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                    <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$5,250/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl3.jpg" alt="fl3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/3.png" alt="3.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">New Caledonian Wharf</a></h4>
                    <p>251 SW 6th Ln Florida City, FL</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$2,300/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl4.jpg" alt="fl4.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/4.png" alt="4.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                    <p>4 W 21st St Flatiron District, New York, NY</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$1,900/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl1.jpg" alt="fl1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/1.png" alt="1.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                    <p>Quincy St, Brooklyn, NY, USA</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                        <span class="heading-color fw600">$7,500/mo</span></a></li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl2.jpg" alt="fl2.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/2.png" alt="2.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                    <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$5,250/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl3.jpg" alt="fl3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/3.png" alt="3.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">New Caledonian Wharf</a></h4>
                    <p>251 SW 6th Ln Florida City, FL</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$2,300/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl4.jpg" alt="fl4.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="images/agent/4.png" alt="4.png"></a></div>
                    <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                    <p>4 W 21st St Flatiron District, New York, NY</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">$2,800/mo</del></small><br>
                          <span class="heading-color fw600">$1,900/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection