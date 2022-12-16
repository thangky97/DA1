<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Nov 2022 00:31:37 GMT -->
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

  <title>Liên hệ</title>

  <link href="{{ asset('client/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
  <link href="{{ asset('client/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

<style>
.contact_icon_box{
  position: relative;
}
.contact_icon_box .icon{
  background-color: rgba(0, 97, 223, .03);
  border-radius: 50%;
  height: 70px;
  line-height: 70px;
  margin-right: 20px;
  text-align: center;
  width: 70px;
}
.contact_icon_box .icon span{
  color: #0061DF;
  font-size: 24px;
}
.contact_icon_box .details .title{
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
}
.contact_icon_box .details p{
  font-size: 14px;
  line-height: 30px;
}
</style>
</head>
<body>
<div class="wrapper">

	<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one home9_style navbar-scrolltofixed stricky main-menu">
  <div class="container"> 
    <!-- Ace Responsive Menu -->
    <nav> 
      <!-- Menu Toggle btn-->
      <div class="menu-toggle">
        <img class="nav_logo_img img-fluid" src="{{ asset('client/images/header-logo.svg') }}" alt="header-logo.svg">
        <button type="button" id="menu-btn">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <a href="index.html" class="navbar_brand float-left dn-md">
        <img class="logo1 img-fluid" src="{{ asset('client/images/header-logo.svg') }}" alt="header-logo.svg">
        <img class="logo2 img-fluid" src="{{ asset('client/images/header-logo.svg') }}" alt="header-logo.svg">
        <span>Houzing</span>
      </a> 
      <!-- Responsive Menu Structure-->
      <ul id="respMenu" class="ace-responsive-menu float-left wa" data-menu-style="horizontal">
        <li> <a href="{{ route('route_FrontEnd_home') }}"><span class="title">Trang chủ</span></a></li>
        <li> <a href="{{ route('route_FrontEnd_list') }}"><span class="title">Danh sách</span></a></li>
        <li> <a href="{{ route('route_FrontEnd_new') }}"><span class="title">Tin tức</span></a></li>
        <li><a href="{{ route('route_FrontEnd_contact') }}">Liên hệ</a></li>
      </ul>
      <ul id="respMenu2" class="ace-responsive-menu float-right wa" data-menu-style="horizontal">
        <li class="list-inline-item list_s"><a href="{{ url('/login') }}" class="btn" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user mr7"></span> Đăng nhập</a></li>
      </ul>
    </nav>
  </div>
</header>

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">Liên hệ với chúng tôi</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Contact -->
  <section class="our-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Chúng tôi ở đây</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-map"></span></div>
            <div class="details">
              <h5 class="title">Địa chỉ</h5>
              <p>329 Hồ Tùng Mậu, Cầu Giấy<br> Hà Nội.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-phone"></span></div>
            <div class="details">
              <h5 class="title">Liên hệ</h5>
              <p>Mobile: 0348 097 982<br>Mail: support@houzing.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-clock"></span></div>
            <div class="details">
              <h5 class="title">Giờ làm việc</h5>
              <p>Thứ 2 - Thứ 6: 08:00 - 18:00<br>Thứ 7 & Chủ nhật: 09:30 - 17:00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="form_grid mt100">
            <h2 class="text-center mb50">Gửi email cho chúng tôi</h2>
            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="form_name" class="form-control" required="required" type="text" placeholder="Tên">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="form_email" class="form-control required email" required="required" type="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <textarea name="form_message" class="form-control required" rows="6" required placeholder="Nội dung"></textarea>
                  </div>
                  <div class="form-group mb0">
                    <button type="button" class="btn btn-thm">Gửi</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

	<!-- Our Footer -->
  <section class="footer_one home4">
    <div class="container pb90">
      <div class="row">
        <div class="col-sm-5 col-md-5 col-lg-3 col-xl-2">
          <div class="footer_contact_widget home4">
            <h4>Liên hệ</h4>
            <ul class="list-unstyled">
              <li class="df"><span class="flaticon-map mr15"></span><a href="#">329 Hồ Tùng Mậu, Cầu Giấy, Hà Nội.</a></li>
              <li><span class="flaticon-phone mr15"></span><a href="#">0348 097 982</a></li>
              <li><span class="flaticon-mail-inbox-app mr15"></span><a href="#">support@houzing.com</a></li>
            </ul>
          </div>
          <div class="footer_social_widget home4 mt20">
            <ul class="mb0">
              <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2">
          <div class="footer_qlink_widget home4">
            <h4>Khu vực</h4>
            <ul class="list-unstyled">
              <li><a href="#">Hà Nội</a></li>
              <li><a href="#">Thành phố HCM</a></li>
              <li><a href="#">Nha Trang</a></li>
              <li><a href="#">Quảng Ninh</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2">
          <div class="footer_qlink_widget home4 pl0">
            <h4>Danh mục</h4>
            <ul class="list-unstyled">
              <li><a href="#">Chung cư</a></li>
              <li><a href="#">Căn hộ</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-5 col-md-2 col-lg-2 col-xl-2">
          <div class="footer_qlink_widget home4 pl0">
            <h4>Liên kết</h4>
            <ul class="list-unstyled">
              <li><a href="#">Về chúng tôi</a></li>
              <li><a href="#">Điều khoản</a></li>
              <li><a href="#">Hỗ trợ</a></li>
              <li><a href="#">Thông tin</a></li>
              <li><a href="#">Liên hệ</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-7 col-md-6 col-lg-3 col-xl-4">
          <div class="footer_social_widget home4">
            <h4>Đăng kí</h4>
            <p class="mb30">Chúng tôi không gửi spam, nên đừng lo lắng.</p>
            <form class="footer_mailchimp_form home5">
              <div class="form-row align-items-center">
                <div class="col-auto">
                  <input type="email" class="form-control" id="inlineFormInput" placeholder="Email">
                  <button type="submit" class="flaticon-email"></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container pt10 pb30">
      <div class="row">
        <div class="col-md-4 col-lg-4">
          <div class="copyright-widget home4 mt10 mb15-767">
            <p>Copyright © 2021 CreativeLayers. All Right Reserved.</p>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="footer_logo_widget home4 text-center mb15-767">
            <div class="wrapper">
              <div class="logo text-center"> <img src="images/footer-logo3.svg" alt="footer-logo3.svg"> <span class="logo_title pl15">Houzing</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="footer_menu_widget home4 text-right tac-md mt15">
            <ul>
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Site Map</a></li>
              <li class="list-inline-item"><a href="#">Privacy policy</a></li>
              <li class="list-inline-item"><a href="#">Cookie Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/snackbar.min.js') }}"></script>
<script src="{{ asset('js/simplebar.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/scrollto.js') }}"></script>
<script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/progressbar.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/timepicker.js') }}"></script>
<script src="{{ asset('js/googlemaps1.js') }}"></script>
<!-- Custom script for all pages --> 
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>