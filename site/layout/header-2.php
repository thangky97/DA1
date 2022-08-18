<div class="input col-sm-1"></div>
<div class="row col-sm-8">
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
    <div>
        <ul class="nav navbar-nav" style="height: 40px; margin-top: 5px; color:white;">
            <a href="#" style="color:white; margin-left: 2px; font-size: 36px;"> <?php echo $text ?></a>
        </ul>
    </div>
</div>
<div class="input col-sm-2">
    <ul class="nav navbar-nav" style="height: 40px; margin-top: 20px; color:white;">
        <a href="#" style="color:white; margin-right: 2px;"> Bạn cần trợ giúp ? </a>

    </ul>
</div>