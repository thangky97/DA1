<body>
    <div class="panel panel-default">
        <div class="panel-heading">BÌNH LUẬN</div>
        <div class="panel-body">
            <?php
            if (exist_param("noi_dung_bl")) {
                $ten_tk = $_SESSION['user']['ten_tk'];
                $ngay_bl = date_format(date_create(), 'Y-m-d');
                bl_insert($ten_tk, $ma_sp, $noi_dung_bl, $ngay_bl);
            }
            require_once '../../dao/binh-luan.php';
            $binh_luan_list = bl_select_by_sp($ma_sp);
            foreach ($binh_luan_list as $bl) {
                extract($bl);
            ?>
                <div class="row" style="margin-bottom: 20px !important;">
                    <div class="col-xs-7">
                        <ul class="nav navbar-nav">
                            <li><b><?= $ten_tk ?><b>: <?= $noi_dung_bl ?></li>
                            <ul></ul>
                    </div>
                    <div class="col-xs-4 text-right"><i><?= $ngay_bl ?></i></div>
                    <?php  if (!isset($_SESSION['user']['ma_tk'])) {
                    } else {
                    ?>
                        <?php if ($_SESSION['user']['ten_tk'] == $ten_tk) { ?>
                            <a onclick="return confirm('bạn có chắc muốn xóa không?')" href="chi-tiet.php?btn_xoa&ma_bl=<?= $ma_bl ?>&ma_sp=<?= $ma_sp ?>" class="btn btn-default">xóa</a>
                        <?php } else { ?>
                        <?php } ?>
                    <?php } ?>

                </div>
            <?php }
            ?>
        </div>
        <div class="panel-footer">
            <?php
            if (!isset($_SESSION['user']['ma_tk'])) {
                echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
            } else {
            ?>
                <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                    <div class="form-group">
                        <input name="noi_dung_bl" class="form-control" />
                        <input type="submit" style="margin-top: 5px;" class="btn btn-success " value="Gửi">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</body>