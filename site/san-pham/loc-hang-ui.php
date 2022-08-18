<div class="alert alert-success" style="font-size: 19px;">Sản phẩm </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php require '../layout/bo_loc.php'; ?>
                    </div>
                </div>
<div class="row">
    <?php foreach ($dshang as $hang) {
        extract($hang); ?>
        <div class="col-sm6 col-md-4">
            <div class="thumbnail text-center">
                <a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>">
                    <img src="../../images/<?= $anh ?>" alt="" width="180px" height="180px">
                </a>
                <div class="caption text-center">
                    <h4><a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>"><?= $ten_sp ?></a></h4>
                    <span style="color:red;"><?= number_format($gia_sp) ?> đ</span>
                </div>
            </div>
        </div>
    <?php } ?>
</div>