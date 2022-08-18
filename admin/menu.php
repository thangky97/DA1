<!-- Brand Logo -->
<a href="../../site/trang-chinh/index.php" class="brand-link">
  <?php 
  require_once "../../dao/ql_anh.php";
  require_once "../../dao/pdo.php";
  $kich_hoat = 3;
  $anh = anh_select_by_kh2($kich_hoat);
  foreach ($anh as $ds) : ?>
    <img src="../../images/logo/<?= $ds['anh'] ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <?php endforeach; ?>
  <span class="brand-text font-weight-light">ADMIN</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="../../images/avatar/<?= $_SESSION['user']['anh'] ?>" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block"><?= $_SESSION['user']['ten_tk'] ?></a>
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
      <li class="nav-item">
        <a href="../danh-muc/index.php" class="nav-link">
          <i class="nav-icon fas fa-archive"></i>
          <p> Quản lý danh mục <i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../danh-muc/index.php?btn_list-hang" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Hãng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../danh-muc/index.php?btn_list-hang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách hãng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../danh-muc/index.php?new-hang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm hãng</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- danh mục hãng -->
          <li class="nav-item">
            <a href="../danh-muc/index.php?btn_list-mh" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Mùi hương
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../danh-muc/index.php?btn_list-mh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách mùi hương</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../danh-muc/index.php?new-mh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mùi hương</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- danh mục mùi hương -->
        </ul>
      </li>
      <!-- quản lý danh mục -->
      <li class="nav-item">
        <a href="../san-pham/index.php" class="nav-link">
          <i class="nav-icon fas fa-calendar-alt"></i>
          <p> Quản lý sản phẩm <i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../san-pham/index.php?new" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm sản phẩm</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../san-pham/index.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách sản phẩm </p>
            </a>
          </li>
        </ul>
      </li>
      <!-- quản lý sản phẩm -->
      <li class="nav-item">
        <a href="../don-hang/index.php" class="nav-link">
          <i class="nav-icon fas fa-cart-arrow-down"></i>
          <p> Quản lý đơn hàng <i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../don-hang/index.php?btn_list&trang_thai=0" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Đơn hàng chưa xác nhận</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../don-hang/index.php?btn_list&trang_thai=1" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Đơn hàng đã xác nhận</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../don-hang/index.php?btn_list&trang_thai=2" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Đơn hàng đã hoàn thành</p>
            </a>
          </li>
        </ul>
      </li>
      <!-- quản lý đơn hàng -->
      <?php if ($_SESSION['user']['vai_tro'] == 2) { ?>
        <li class="nav-item">
          <a href="../tai-khoan/index.php" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p> Quản lý tài khoản <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../tai-khoan/index.php?new" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  thêm tài khoản
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../tai-khoan/index.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>danh sách tài khoản
                </p>
              </a>
            </li>
          </ul>
        </li>
      <?php } else if ($_SESSION['user']['vai_tro']) { ?>
      <?php } ?>
      <!-- quản lý tài khoản -->
      <li class="nav-item">
        <a href="../ql_anh/index.php" class="nav-link">
          <i class="nav-icon fas fa-images"></i>
          <p> Quản lý ảnh <i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../ql_anh/index.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                logo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../ql_anh/index.php?vai_tro=0" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../ql_anh/index.php?new-logo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm logo</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- danh mục hãng -->
          <li class="nav-item">
            <a href="../ql_anh/index.php?btn_list-mh" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Banner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../ql_anh/index.php?vai_tro=1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../ql_anh/index.php?new-banner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Banner</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- danh mục mùi hương -->
        </ul>
      </li>
      <!-- quản lý ảnh -->
      <li class="nav-item">
        <a href="../binh-luan/index.php" class="nav-link">
          <i class="nav-icon fas fa-comment-alt"></i>
          <p> Quản lý bình luận</p>
        </a>
      </li>
      <!-- quản lý bình luận -->
      <li class="nav-item">
        <a href="../lien-he/index.php" class="nav-link">
          <i class="nav-icon fas fa-envelope-open"></i>
          <p>Quản lý liên hệ</p>
        </a>
      </li>
      <!-- quản lý liên hệ -->
      <li class="nav-item">
        <a href="../thong-ke/index.php" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Quản lý thống kê
          </p>
        </a>
      </li>
      <!-- quản lý thống kê -->
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->