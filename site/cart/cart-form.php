<?php
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [] ;
//xóa hết
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['cart']);
//xóa sp trong giỏ hàng
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['cart'], $_GET['delid'], 1);
}
//lấy dữ liệu từ form
if (isset($_POST["add-cart"]) && ($_POST["add-cart"])) {
    $ten_sp = $_POST['ten_sp'];
    $ma_sp = $_POST['ma_sp'];
    $so_luong = $_POST['so_luong'];
    $gia_sp = $_POST['gia_sp'];
    $anh = $_POST['anh'];
    //kiem tra sp co trong gio hang hay khong?

    $cc = 0; //kiem tra sp co trung trong gio hang khong?

    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {

        if ($_SESSION['cart'][$i][1] == $ten_sp) {
            $cc = 1;
            $soluongnew = $so_luong + $_SESSION['cart'][$i][3];
            $_SESSION['cart'][$i][3] = $soluongnew;
            break;
        }
    }
    //neu khong trung sp trong gio hang thi them moi
    if ($cc == 0) {
        //them moi sp vao gio hang
        $sp = [$anh, $ten_sp, $gia_sp, $so_luong, $ma_sp];
        $_SESSION['cart'][] = $sp;
    }
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">GIỎ HÀNG</h3>
        </div>
        <form action="cart.php" method="post">
            <div class="card-body table-retkonsive p-0" style="height: 560px;">
                <table class="table table-head-fixed text-nowrap">
                    <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <?php echo show(); ?>
                </table>
            </div>
            <?php if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) { ?>
                <div class="row text-right" style="margin-bottom: 10px;">
                <a href="../trang-chinh/index.php"><input class="btn btn-success" type="button" value="Tiếp tục mua"></a>  
                    <a href="cart.php?delcart=1"><input class="btn btn-success " type="button" value="xóa giỏ hàng"></a>
                    <input class="btn btn-success " type="submit" name="thanh-toan-form" value="Đặt hàng">
                </div>
            <?php } else { ?>
                <div class="row text-right" style="margin-bottom: 10px;">
                    <a href="../trang-chinh/index.php"><input class="btn btn-success" type="button" value="Tiếp tục mua"></a> 
                </div>
            <?php } ?>
        </form>
    </div>
</div>
