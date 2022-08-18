<?php
require "../../dao/pdo.php";
require "../../global.php";
require "../../dao/san-pham.php";
require "../../dao/danh-muc.php";

extract($_REQUEST);

if (exist_param("btn_new")) {
    $errors = ['ten_sp' => '', 'gia_sp' => '', 'size' => '', 'mo_ta' => '', 'anh' => ''];
    $e_imgs = ['png', 'jpg'];

    $ma_sp = $_POST["ma_sp"];
    $ten_sp = $_POST["ten_sp"];
    $ma_hang = $_POST["ma_hang"];
    $gia_sp = $_POST["gia_sp"];
    $giam_gia = $_POST["giam_gia"];
    $gioi_tinh = $_POST["gioi_tinh"];
    $ma_mh = $_POST["ma_mh"];
    $size = $_POST["size"];
    $mo_ta = $_POST["mo_ta"];
    $ngay_them = date_format(date_create(), 'Y-m-d');
    $so_luot_xem = $_POST["so_luot_xem"];

    $file = $_FILES['anh'];
    if ($file['size'] > 0) {
        $anh = $file['name'];
        $ext = PATHINFO($anh, PATHINFO_EXTENSION);
        if (!in_array($ext, $e_imgs)) {
            $errors['anh'] = "Bạn phải nhập là file ảnh dạng png, jpg";
        }
    } else {
        $errors['anh'] = "Bạn cần nhập ảnh";
    }
    if (empty($ten_sp)) {
        $errors['ten_sp'] = "Bạn cần nhập tên sản phẩm!";
    }
    if (empty($gia_sp)) {
        $errors['gia_sp'] = "Bạn cần nhập giá sản phẩm!";
    }
    if (empty($size)) {
        $errors['size'] = "Bạn cần nhập dung tích!";
    }
    if (empty($mo_ta)) {
        $errors['mo_ta'] = "Bạn cần nhập mô tả!";
    }
    if (!array_filter($errors)) {
        sp_insert($ten_sp, $gia_sp, $ma_hang, $giam_gia, $gioi_tinh, $ma_mh, $size, $anh, $mo_ta, $ngay_them, $so_luot_xem);
        move_uploaded_file($file['tmp_name'], "../../images/" . $anh);
        $message = "Thêm sản phẩm thành công ";
    }
    $VIEW_NAME = "new.php";
} else if (exist_param("new")) {

    $VIEW_NAME = "new.php";
} //xóa sp
else if (exist_param("btn_xoa")) {
    if (isset($_GET['ma_sp'])) {
        sp_delete($_GET['ma_sp']);
    }

    //hiển thị danh sách
    $ds_sp = sp_show_all();
    $VIEW_NAME = "list.php";
} // edit
else if (exist_param("btn_edit")) {
    $ma_sp = $_REQUEST['ma_sp'];
    $sp_info = sp_getinfo($ma_sp);
    extract($sp_info);

    $ds_sp = sp_show_all();
    $VIEW_NAME = "edit.php";
} // update
else if (exist_param("btn_update")) {
    $ma_sp = $_POST["ma_sp"];
    $ten_sp = $_POST["ten_sp"];
    $ma_hang = $_POST["ma_hang"];
    $gia_sp = $_POST["gia_sp"];
    $giam_gia = $_POST["giam_gia"];
    $gioi_tinh = $_POST["gioi_tinh"];
    $ma_mh = $_POST["ma_mh"];
    $size = $_POST["size"];
    $mo_ta = $_POST["mo_ta"];
    $ngay_them = $_POST["ngay_them"];
    $so_luot_xem = $_POST["so_luot_xem"];

    $file = $_FILES['anh'];
    $anh = $file['name'];
    move_uploaded_file($file['tmp_name'], "../../images/" . $anh);
    
    sp_update($ma_sp, $ten_sp, $gia_sp, $ma_hang, $giam_gia, $gioi_tinh, $ma_mh, $size, $anh, $mo_ta, $ngay_them, $so_luot_xem);
    $message = "Thêm sản phẩm thành công ";
    $ds_sp = sp_show_all();
    $VIEW_NAME = "list.php";
} else {
    $ds_sp = sp_show_all();
    $VIEW_NAME = "list.php";
}
if ($VIEW_NAME == "new.php" || $VIEW_NAME == "edit.php" || $VIEW_NAME == "list.php") {
    $hang_select_list = hang_select_all();
    $mh_select_list = mh_select_all();
}
require "../index.php";
