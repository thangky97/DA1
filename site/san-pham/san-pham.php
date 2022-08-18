<div class="row" style="margin-left: 5px;">
    <main>
        <aside class="form-group">
            <div class="row">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>Sản phẩm</h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php require '../layout/bo_loc.php'; ?>
                    </div>
                </div>
                <?php foreach ($ds_sp as $sanpham) :
                    extract($sanpham) ?>
                    <div class="col-sm-6 col-md-4 ">
                        <div class="thumbnail text-center">
                            <a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>">
                                <img src="../../images/<?= $sanpham['anh'] ?>" alt="" style="width: 180px; height: 180px; text-algin:center">
                            </a>
                            <h4><a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>&ma_hang=<?= $ma_hang ?>"><?= $ten_sp ?></a></h4>
                            <span style="color:red;"><?= number_format($sanpham['gia_sp'], 0, '', ',') ?> <u>đ</u></span>
                            <form action="../cart/cart.php" method="post">
                                <div class="wrapper " style=" text-align: left;">
                                    <input class="btn btn-success " style="width: 100%; margin-top: 5px;" type="submit" name="add-cart" value="Mua ngay">
                                </div>
                                <input type="hidden" name="ten_sp" value="<?= $sanpham['ten_sp'] ?>">
                                <input type="hidden" name="ma_sp" value="<?= $sanpham['ma_sp'] ?>">
                                <input type="hidden" name="so_luong" value="1">
                                <input type="hidden" name="gia_sp" value="<?= $sanpham['gia_sp'] ?>">
                                <input type="hidden" name="anh" value="<?= $sanpham['anh'] ?>">
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </aside>
    </main>
</div>