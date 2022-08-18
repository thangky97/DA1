<div class="panel-heading">
    <div class="input col-sm-1"></div>
    <div class="input col-sm-2">
        <a href="../trang-chinh/index.php">
            <?php
            require_once "../../dao/ql_anh.php";
            $kich_hoat = 3;
            $anh = anh_select_by_kh2($kich_hoat);
            foreach ($anh as $ds) : ?>
                <img class="img-rounded" src="../../images/logo/<?= $ds['anh'] ?>" alt="Logo Image" width="60px" height="60px" style="margin-bottom: 10px;margin-left: 25px ">
            <?php endforeach; ?>
        </a>
    </div>
    <form class=" col-sm-6" action="../san-pham/loc-hang.php">
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Search" style="height: 40px; margin-top: 10px;">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" style="height: 40px; width: 40px; margin-top: 10px;">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
    </form>
    <div class="input col-sm-1"></div>
    <?php
    if (!isset($_SESSION['user'])) { ?>
        <div>
            <ul class="nav navbar-nav" style="height: 40px; margin-top: 20px; color:white;">
                <a href="../tai-khoan/dang-ky.php" style="color:white; margin-right: 2px;"> Đăng ký </a>
                |
                <a href="../dang-nhap/index.php?dang-nhap" style="color:white; margin-left: 2px;"> Đăng nhập </a>
                <a href="../cart/cart.php" style="color:white; margin-left: 10px;"> <i class="fas fa-shopping-cart"></i></a>
            </ul>
        </div>
    <?php } else { ?>
        <div>
            <ul class="nav navbar-nav" style="height: 40px; margin-top: 20px; color:white;">
                <a href="../tai-khoan/quan-ly.php" style="color:white; margin-left: 10px;"> <i class="fas fa-user"></i> <?= $_SESSION['user']['ten_tk'] ?></a>
                <a href="../cart/cart.php" style="color:white; margin-left: 10px;"> <i class="fas fa-shopping-cart"></i></a>
            </ul>
        </div>
    <?php } ?>
    </nav>
</div>