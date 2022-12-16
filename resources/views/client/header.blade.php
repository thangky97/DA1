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