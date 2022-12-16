<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{ $objUser->avatar ? '' . Storage::url($objUser->avatar) : 'http://placehold.it/100x100' }}"
                        alt="your image" style="max-width: 180px; height:80px;"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Trang quản trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ $objUser->avatar ? '' . Storage::url($objUser->avatar) : 'http://placehold.it/100x100' }}"
                         style="max-width: 100px; height:30px;" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin" class="d-block">{{ $objUser->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Bất động sản
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/bds" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách bất động sản</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/type_bds" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loại BDS</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-mobile"></i>
              <p>
                Tin tức
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/news" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tin tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/cate_new" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục tin tức</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/admin/users" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>Danh sách user</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/tu_van" class="nav-link ">
              <i class="nav-icon fas fa-calendar"></i>
              <p>Lịch hẹn</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/tu_van" class="nav-link ">
              <i class="nav-icon fas fa-tv"></i>
              <p>Banner</p>
            </a>
          </li>
        </ul>

        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>