@extends('client.master')

@section('title', 'Danh sách bất động sản')

@section('content-title', 'Danh sách bất động sản')

@section('content')

    <section class="our-listing pb30-991">
        <div class="container">
            {{-- <div class="row">
        <div class="col-lg-12">
          <div class="listing_sidebar dn db-lg">
            <div class="sidebar_content_details style3">
              <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
              <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                <div class="siderbar_widget_header">
                  <h4 class="title mb0">Tìm ngôi nhà mới của bạn<a class="filter_closed_btn float-right" href="#"><small>x</small><span class="flaticon-close"></span></a></h4>
                </div>
                <div class="sidebar_advanced_search_widget">
                  <ul class="sasw_list mb0">
                    <li class="search_area">
                      <div class="form-group">
                        <input type="text" class="form-control form_control" placeholder="Enter Keyword">
                      </div>
                    </li>
                    <li>
                      <div class="search_option_two">
                        <div class="sidebar_select_options">
                          <select class="selectpicker w100 show-tick">
                            <option value="">Status</option>
                            <option value="Active">Active</option>
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="search_option_two">
                        <div class="sidebar_select_options">
                          <select class="selectpicker w100 show-tick">
                            <option>Type</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Condo">Condo</option>
                            <option value="Studio">Studio</option>
                            <option value="Villa">Villa</option>
                          </select>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="search_option_two">
                        <div class="sidebar_select_options">
                          <select class="selectpicker w100 show-tick">
                            <option>All Cities</option>
                            <option value="London">London</option>
                            <option value="NewYork">New York</option>
                            <option value="Paris">Paris</option>
                            <option value="Istanbul">Istanbul</option>
                            <option value="Amsterdam">Amsterdam</option>
                            <option value="Rome">Rome</option>
                            <option value="LogAngeles">Log Angeles</option>
                          </select>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="search_option_two">
                        <div class="sidebar_select_options">
                          <select class="selectpicker w100 show-tick">
                            <option>Bedrooms</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="sidebar_priceing_slider_mobile">
                        <div class="wrapper">
                          <p class="mb0">Price Range</p>
                          <div class="mt20 ml10" id="slider"></div>
                          <span id="slider-range-value1"></span>
                          <span id="slider-range-value2"></span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="sidebar_accordion_widget mt40">
                        <div id="accordion2" class="panel-group">
                          <div class="panel">
                            <div class="panel-heading">
                              <h4 class="panel-title other_fet">
                                <a href="#panelBodyRating2" class="accordion-toggle link text-thm" data-toggle="collapse" data-parent="#accordion"><i class="icon fa fa-plus"></i> Other Features</a>
                              </h4>
                            </div>
                            <div id="panelBodyRating2" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul class="ui_kit_checkbox selectable-list">
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck10">
                                      <label class="custom-control-label mb0" for="customCheck10">Air Conditioning</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck11">
                                      <label class="custom-control-label mb0" for="customCheck11">Barbeque</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck12">
                                      <label class="custom-control-label mb0" for="customCheck12">Dryer</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck13">
                                      <label class="custom-control-label mb0" for="customCheck13">Gym</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck14">
                                      <label class="custom-control-label mb0" for="customCheck14">Laundry</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck15">
                                      <label class="custom-control-label mb0" for="customCheck15">Lawn</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck16">
                                      <label class="custom-control-label mb0" for="customCheck16">Microwave</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck17">
                                      <label class="custom-control-label mb0" for="customCheck17">Outdoor Shower</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck18">
                                      <label class="custom-control-label mb0" for="customCheck18">Refrigerator</label>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="search_option_button text-center mt25">
                        <button type="submit" class="btn btn-block btn-thm mb25">Search</button>
                        <ul class="mb0">
                          <li class="list-inline-item mb0"><a href="#"><span class="vam flaticon-return mr10"></span> Reset Search</a></li>
                          <li class="list-inline-item mb0 ml30"><a href="#"><span class="vam flaticon-heart-shape-outline mr10"></span> Saved Search</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_content style2 mb100">
                        <h2 class="breadcrumb_title">Danh sách bất động sản</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="dn db-lg mb30-md text-center">
                        <div id="main2"><a id="open2" class="filter_open_btn btn-thm" href="#">Show Filter <span
                                    class="flaticon-setting-lines ml10"></span></a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <div class="sidebar_listing_grid1 mb30 dn-lg">
                        <div class="sidebar_listing_list">
                            <div class="sidebar_advanced_search_widget">
                                <ul class="sasw_list mb0">
                                    <li>
                                        <h4 class="mb0">Tìm ngôi nhà mới của bạn</h4>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input type="text" class="form-control form_control"
                                                placeholder="Enter Keyword">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="sidebar_select_options">
                                                <select class="selectpicker w100 show-tick">
                                                    <option value="">Trạng thái</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="sidebar_select_options">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Type</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Condo">Condo</option>
                                                    <option value="Studio">Studio</option>
                                                    <option value="Villa">Villa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="sidebar_select_options">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>All Cities</option>
                                                    <option value="London">London</option>
                                                    <option value="NewYork">New York</option>
                                                    <option value="Paris">Paris</option>
                                                    <option value="Istanbul">Istanbul</option>
                                                    <option value="Amsterdam">Amsterdam</option>
                                                    <option value="Rome">Rome</option>
                                                    <option value="LogAngeles">Log Angeles</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="sidebar_select_options">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Phòng</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar_priceing_slider_desktop">
                                            <div class="wrapper">
                                                <p class="mb0">Giá</p>
                                                <div class="slider-range"></div>
                                                <input type="text" class="amount" placeholder="$11,200">
                                                <input type="text" class="amount2" placeholder="$15,200">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_button text-center mt25">
                                            <button type="submit" class="btn btn-block btn-thm mb25">Search</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="terms_condition_widget">
                            <h4 class="title mb10">Featured Properties</h4>
                            <div class="sidebar_feature_property_slider">
                                <div class="item">
                                    <div class="feat_property sidebar mb10">
                                        <div class="thumb">
                                            <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                            <div class="thmb_cntnt">
                                                <ul class="tag mb0">
                                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                                </ul>
                                                <h4 class="title posr color-white">New Apartment Nice Wiew</h4>
                                                <a class="fp_price" href="#">$7,500/mo
                                                    <small><del>$2,800/mo</del></small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feat_property sidebar mb10">
                                        <div class="thumb">
                                            <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                            <div class="thmb_cntnt">
                                                <ul class="tag mb0">
                                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                                </ul>
                                                <h4 class="title posr color-white">New Apartment Nice Wiew</h4>
                                                <a class="fp_price" href="#">$7,500/mo
                                                    <small><del>$2,800/mo</del></small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feat_property sidebar mb10">
                                        <div class="thumb">
                                            <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                            <div class="thmb_cntnt">
                                                <ul class="tag mb0">
                                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                                </ul>
                                                <h4 class="title posr color-white">New Apartment Nice Wiew</h4>
                                                <a class="fp_price" href="#">$7,500/mo
                                                    <small><del>$2,800/mo</del></small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feat_property sidebar mb10">
                                        <div class="thumb">
                                            <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                            <div class="thmb_cntnt">
                                                <ul class="tag mb0">
                                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                                </ul>
                                                <h4 class="title posr color-white">New Apartment Nice Wiew</h4>
                                                <a class="fp_price" href="#">$7,500/mo
                                                    <small><del>$2,800/mo</del></small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feat_property sidebar mb10">
                                        <div class="thumb">
                                            <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                            <div class="thmb_cntnt">
                                                <ul class="tag mb0">
                                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                                </ul>
                                                <h4 class="title posr color-white">New Apartment Nice Wiew</h4>
                                                <a class="fp_price" href="#">$7,500/mo
                                                    <small><del>$2,800/mo</del></small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="listing_filter_row dif db-767">
                            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                                <div class="listing_list_style tac-767">
                                    <ul class="mb0">
                                        <li class="list-inline-item dropdown text-left bb2"><span class="stts">Short
                                                by:</span>
                                            <select class="selectpicker">
                                                <option>Newest Listings</option>
                                                <option>Most Recent</option>
                                                <option>Recent</option>
                                                <option>Best Selling</option>
                                                <option>Old Review</option>
                                            </select>
                                        </li>
                                        <li class="list-inline-item gird"><a href="#"><span
                                                    class="fa fa-th-large"></span></a></li>
                                        <li class="list-inline-item list"><a href="#"><span
                                                    class="fa fa-th-list"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      @foreach ($list as $item)
                        <div class="col-lg-6 col-xl-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp"
                                        src="{{ $item->images ? '' . Storage::url($item->images) : 'http://placehold.it/100x100' }}"
                                        alt="" height="200">
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
                                            <li class="list-inline-item"><a class="text-white" href="#"><span
                                                        class="flaticon-photo-camera mr5"></span> 22</a></li>
                                            <li class="list-inline-item"><a class="text-white" href="#"><span
                                                        class="flaticon-play-button mr5"></span> 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                      <div class="badge_icon"><a href="#"><img
                                        src="{{ $item->images ? '' . Storage::url($item->images) : 'http://placehold.it/100x100' }}"
                                        alt="" ></a></div>
                                        <h4><a href="{{ route('route_FrontEnd_detail', ['id' => $item->id]) }}">{{ $item->name }}</a></h4>
                                        <p>{{ $item->address }}</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#"><span
                                                        class="flaticon-bed"></span> <br>{{ $item->so_phong }} Phòng</a></li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                          class="flaticon-bath pr5"></span>
                                                      <br>{{ $item->so_tollet }} Tollet</a></li>
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
                                            <li class="list-inline-item"><a class="icon" href="#"><span
                                                        class="flaticon-resize"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span
                                                        class="flaticon-add"></span></a></li>
                                            <li class="list-inline-item"><a class="icon" href="#"><span
                                                        class="flaticon-heart-shape-outline"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          </div>
                          @endforeach
                        <div class="col-lg-12">
                            <div class="mbp_pagination mt10">
                                <ul class="page_navigation">
                                    <li class="page-item"><a class="page-link" href="#" tabindex="-1"><span
                                                class="fa fa-arrow-left"></span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item active" aria-current="page"><a class="page-link"
                                            href="#">3<span class="sr-only">(current)</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="fa fa-arrow-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
