<?php
if (isset($_POST['yes']) && ($_POST['yes'])) {
    // lấy thông tin khách hàng từ form để tạo đơn hàng
    $ho_ten = $_POST['ho_ten'];
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];
    $email = $_POST['email'];
    $ghi_chu = $_POST['ghi_chu'];
    $trang_thai = $_POST['trang_thai'];
    $ngay_them = date_format(date_create(), 'Y-m-d');
    $don_gia = tong();
    $ma_tk = $_SESSION['user']['ma_tk'];
    //insert đơn hàng - tạo đơn hàng mới
    $ma_dh = dh_insert($ma_tk,$ho_ten, $email, $sdt, $dia_chi, $don_gia, $ngay_them, $ghi_chu, $trang_thai);

    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
        $anh = $_SESSION['cart'][$i][0];
        $ten_sp = $_SESSION['cart'][$i][1];
        $gia_sp = $_SESSION['cart'][$i][2];
        $so_luong = $_SESSION['cart'][$i][3];
        $ma_sp = $_SESSION['cart'][$i][4];
        $thanh_tien = $gia_sp * $so_luong;
        ct_dh_insert($anh, $ten_sp, $gia_sp, $so_luong, $ma_sp, $thanh_tien, $ma_dh);
    }

    $ttdh = '
     <div class="panel panel-info">
    <div class="panel-heading">Thông tin nhận hàng</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="my-input">Họ tên:</label>
            ' . $ho_ten . '
        </div>
        <div class="form-group">
            <label for="my-input">Số điện thoại: </label>
            ' . $sdt . '
        </div>
        <div class="form-group">
            <label for="my-input">Địa chỉ: </label>
            ' . $dia_chi . '
        </div>
        <div class="form-group">
            <label for="my-input">Email: </label>
            ' . $email . '
        </div>
        <div class="form-group">
            <label for="my-input">Ghi chú: </label>
            ' . $ghi_chu . '
        </div>
        <div class="form-group">
            <label for="my-input">Ngày đặt: </label>
            ' . $ngay_them . '
        </div>
    </div>
</div> ';
    $ttgh = show(); 
    unset($_SESSION['cart']);
}
?>
<div class="container wrapper">
    <h2>Đơn hàng: <?=$ma_dh?></h2>
    <h2>Thông tin đơn hàng</h2>
    <hr>
    <div style="margin: 30px 0;">
        <div class="row cart-body">
            <form action="cart.php?bill" class="container" method="post" style="margin-top: 15px;">
                <div class="col-sm-6">
                    <!--SHIPPING METHOD-->
                    <?php echo $ttdh; ?>

                </div>
                <div class="col-sm-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Sản phẩm bạn muốn mua <div class="pull-right"><small><a class="afix-1" href="cart.php">Quay lại giỏ hàng</a></small></div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Xóa</th>
                                </tr>
                                <?php echo $ttgh; ?>
                            </table>
                            <hr>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
        </div>
</div>