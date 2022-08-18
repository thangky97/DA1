<head>
    <link rel="stylesheet" href="../../dist/css-chi-tiet-ui.css">
</head>
<div class="container ">
    <div class="row">
        <div class="panel panel-default">

            <form action="../cart/cart.php" method="post">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <img src="../../images/<?= $ct_sp['anh'] ?>" width="500px" height="500px">
                </div>
                <div class="row ">
                    <article class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-top: 5.5%; ">

                        <ui class="nav">
                            <li style="margin-top: 5px;">Hãng: <?= $ten_hang ?></li>
                            <li style="margin-top: 5px;">Tên sản phẩm: <?= $ten_sp ?></li>
                            <li style="margin-top: 5px;">Mùi hương: <?= $ten_mh ?></li>
                            <li style="margin-top: 5px;">Dung tích: <?= $size ?> ml</li>
                            <li style="margin-top: 5px;">Giới tính: <?php
                                                                    if ($gioi_tinh == 0) {
                                                                        echo "Nam";
                                                                    } else {
                                                                        echo "Nữ";
                                                                    }
                                                                    ?></li>
                            <?php
                            if ($giam_gia != 0) { ?>
                                <li style="text-decoration-line: line-through; color: red; line-height: 20px;margin-top: 5px;">Giá gốc: <?= number_format($gia_sp) ?></li>
                                <li style="margin-top: 5px;">Giá sell: <?= number_format($gia_sp - ($gia_sp * ($giam_gia / 100))) ?></li>
                                <li style="margin-top: 5px;">Giảm giá: <?= $giam_gia ?>%</li>
                            <?php } else {
                            ?>
                                <li style="margin-top: 5px;">Giá: <?= number_format($gia_sp) ?> VNĐ</li>
                                <input type="hidden" value="1" name="giam_gia">
                            <?php } ?> 
                        </ui>
                        <form action="../cart/cart.php" method="post">
                            <ul class="nav">
                                <div class="buttons_added">
                                    <li style="margin-top: 5px;">
                                        Số lượng:
                                        <input class="minus is-form" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="100" min="1" name="so_luong" type="number" value="1">
                                        <input class="plus is-form" type="button" value="+">
                                    </li>
                                </div>
                            </ul>
                            <input class="btn btn-success" style="margin-top: 5px;" type="submit" name="add-cart" value="Thêm vào giỏ hàng">
                            <input type="hidden" name="ma_sp" value="<?= $ma_sp ?>">
                            <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                            <input type="hidden" name="gia_sp" value="<?= $gia_sp = $gia_sp - ($gia_sp * ($giam_gia / 100)) ?>">
                            <input type="hidden" name="anh" value="<?= $ct_sp['anh'] ?>">
                        </form>
                        <!-- <input class="btn btn-success " style="margin-top: 5px;" type="submit" name="thanh-toan-form" value="Mua ngay">
                        <input type="hidden" name="ma_sp" value="<?= $ma_sp ?>">
                            <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                            <input type="hidden" name="gia_sp" value="<?= $gia_sp = $gia_sp - ($gia_sp * ($giam_gia / 100)) ?>">
                            <input type="hidden" name="anh" value="<?= $anh ?>"> -->
                    </article>
                </div>
            </form>
            <div class="panel panel-default" style="margin-top: 20px;">
                <div class="panel-heading">
                    <h3>Chi tiết sản phẩm</h3>
                </div>
                <div class="panel-body"><?= $mo_ta ?></div>
            </div>

            <?php require 'binh-luan.php'; ?>

            <?php require 'hang-cung-loai.php'; ?>
        </div>
    </div>
</div>
</div>
<script>
    $('input.input-qty').each(function() {
        var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
        if (min == 0) {
            var d = 0
        } else d = min
        $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
                if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
                var x = Number($this.val()) + 1
                if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
        })
    })
</script>