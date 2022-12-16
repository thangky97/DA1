<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Trang chủ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('route_FrontEnd_new') }}" class="nav-link">Tin tức</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('route_FrontEnd_contact') }}" class="nav-link">Tư vấn</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
  </a>

  <div class="navbar-custom-menu" style="margin-left: 790px">
      <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Đăng xuất: {{ $objUser->name }} </span>
              </a>
              <ul class="dropdown-menu">
                  <li>
                      <p style="padding: 10px;">
                          <i class="fa fa-user"></i> Email: {{ $objUser->email }}<br>

                      </p>
                  </li>
                  <li class="user-footer">
                      <div class="pull-right">
                          <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Đăng xuất</a>
                      </div>
                  </li>
              </ul>
          </li>
      </ul>
  </div>
  </nav>