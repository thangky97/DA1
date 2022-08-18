<div class="alert alert-success">Sản phẩm liên quan</div>
<div class="container" style="margin-bottom: 15px; padding-right: 4.3%">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- các page --> 
        <!-- các trang trong slide -->
        <div class="carousel-inner">
            <div class="item active">
                <?php foreach ($sp_cung_hang as $sanpham) :
                    extract($sanpham) ?>
                    <div class="col-md-3" style="padding: 15px;">
                        <div class="thumbnail text-center">
                            <a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>">
                                <img src="../../images/<?= $sanpham['anh'] ?>" alt="" style="width: 180px; height: 180px;">
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4><a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>"><?= $ten_sp ?></a></h4>
                            <span style="color:red;"><?= number_format($sanpham['gia_sp'], 0, '', ',') ?> <u>đ</u></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="item">
                <?php foreach ($sp_cung_gt as $sanpham) :
                    extract($sanpham) ?>
                    <div class="col-md-3" style="padding: 15px;">
                        <div class="thumbnail text-center">
                            <a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>">
                                <img src="../../images/<?= $sanpham['anh'] ?>" alt="" style="width: 180px; height: 180px;">
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4><a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>"><?= $ten_sp ?></a></h4>
                            <span style="color:red;"><?= number_format($sanpham['gia_sp'], 0, '', ',') ?> <u>đ</u></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="item">
                <?php foreach ($sp_cung_hang_desc as $sanpham) :
                    extract($sanpham) ?>
                    <div class="col-md-3" style="padding: 15px;">
                        <div class="thumbnail text-center">
                            <a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>">
                                <img src="../../images/<?= $sanpham['anh'] ?>" alt="" style="width: 180px; height: 180px;">
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4><a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>"><?= $ten_sp ?></a></h4>
                            <span style="color:red;"><?= number_format($sanpham['gia_sp'], 0, '', ',') ?> <u>đ</u></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>