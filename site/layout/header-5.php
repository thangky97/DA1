<div class="input col-sm-1"></div>
<div class="row col-sm-6">
    <div class="col-sm-2">
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
    <div class="col-sm-3">
        <?php
        if (exist_param("thanh-toan")) { ?>
            <div>
                <ul class="nav navbar-nav" style="height: 40px; margin-top: 5px; color:white;">
                    <p href="#" style="color:white; margin-left: 2px; font-size: 36px;"> Thanh toán </p>
                </ul>
            </div>
        <?php } else { ?>
            <div>
                <ul class="nav navbar-nav" style="height: 40px; margin-top: 5px; color:white;">
                    <p href="#" style="color:white; margin-left: 2px; font-size: 36px;"> Giỏ hàng </p>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>
<form class="col-sm-5">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" style="height: 40px; width: 100%; margin-top: 10px;">
    </div>
</form>