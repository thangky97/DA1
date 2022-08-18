<?php
require "../../global.php";
require "../../dao/danh-muc.php";
require "../../dao/pdo.php";
extract($_REQUEST);
// thêm mới hãng
if (exist_param("btn_new-hang")) {
    $errors = ['ten_hang' => ''];
    $ma_hang = $_POST["ma_hang"];
    $ten_hang = $_POST["ten_hang"];
    if (empty($ten_hang)) {
        $errors['ten_hang'] = "Bạn cần nhập tên hãng!";
    }
    if (!array_filter($errors)) {
        hang_insert( $ten_hang);
        $message = "Thêm hãng thành công ";
    }
    $ma_hang = $_POST["ma_hang"];
    $ten_hang = $_POST["ten_hang"];
    // thêm
    $VIEW_NAME = "new-hang.php";
} // trang thêm hãng
else if (exist_param("new-hang")) {
    $VIEW_NAME = "new-hang.php";
} //danh sách hãng
else if (exist_param("btn_list-hang")) {
    $ds_hang = hang_select_all();

    $VIEW_NAME = "list-hang.php";
} //edit hãng
else if (exist_param("btn_edit-hang")) {
    $ma_hang = $_REQUEST['ma_hang'];
    $hang_info = hang_getinfo($ma_hang);
    extract($hang_info);

    $ds_hang = hang_select_all();
    $VIEW_NAME = "edit-hang.php";
} //update hãng
else if (exist_param("btn_update-hang")) {
    $ma_hang = $_POST['ma_hang'];
    $ten_hang = $_POST['ten_hang'];

    // insert
    hang_update($ma_hang, $ten_hang);
    $ds_hang = hang_select_all();
    $VIEW_NAME = "list-hang.php";
} //xóa hãng
else if (exist_param("btn_xoa-hang")) {
    if (isset($_GET['ma_hang'])) {
        hang_delete($_GET['ma_hang']);
    }

    //hiển thị danh sách
    $ds_hang = hang_select_all();
    $VIEW_NAME = "list-hang.php";
}

// mùi hương
// thêm mùi hương
else if (exist_param("btn_new-mh")) {
    $errors = ['ten_mh' => ''];
    $ma_mh = $_POST["ma_mh"];
    $ten_mh = $_POST["ten_mh"];
    if (empty($ten_mh)) {
        $errors['ten_mh'] = "Bạn cần nhập tên mùi hương!";
    }
    if (!array_filter($errors)) {
        mh_insert( $ten_mh);
        $message = "Thêm mùi hương thành công ";
    }
    // thêm

    $VIEW_NAME = "new-muihuong.php";
} // danh sách mùi hương
else if (exist_param("btn_list-mh")) {
    $ds_mh = mh_select_all();

    $VIEW_NAME = "list-muihuong.php";
} // trang thêm mùi hương
else if (exist_param("new-mh")) {
    $VIEW_NAME = "new-muihuong.php";
} //edit mùi hương
else if (exist_param("btn_edit-mh")) {
    $ma_mh = $_REQUEST['ma_mh'];
    $mh_info = mh_getinfo($ma_mh);
    extract($mh_info);

    $ds_mh = mh_select_all();
    $VIEW_NAME = "edit-mh.php";
} //update mùi hương
else if (exist_param("btn_update-mh")) {
    $ma_mh = $_POST['ma_mh'];
    $ten_mh = $_POST['ten_mh'];

    // insert
    mh_update($ma_mh, $ten_mh);
    $ds_mh = mh_select_all();
    $VIEW_NAME = "list-muihuong.php";
} else if (exist_param("btn_xoa-mh")) {
    if (isset($_GET['ma_mh'])) {
        mh_delete($_GET['ma_mh']);
    }
    //hiển thị danh sách
    $ds_mh = mh_select_all();
    $VIEW_NAME = "list-muihuong.php";
}
require "../index.php";
