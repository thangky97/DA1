<?php
require "../../dao/pdo.php";
require "../../global.php";
require "../../dao/tai-khoan.php";

extract($_REQUEST);

if (exist_param("btn_new")) {
    $errors = ['ten_tk' => '', 'mat_khau' => '', 'ho_ten' => '', 'anh' => '', 'sdt' => '', 'mat_khau' => '', 'mat_khau2' => '', 'email' => ''];
    $e_imgs = ['png', 'jpg'];

    $ma_tk = $_POST["ma_tk"];
    $ten_tk = $_POST["ten_tk"];
    $ho_ten = $_POST["ho_ten"];
    $mat_khau = $_POST["mat_khau"];
    $mat_khau2 = $_POST["mat_khau2"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $vai_tro = $_POST["vai_tro"];

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

    if (empty($ten_tk)) {
        $errors['ten_tk'] = "Bạn cần nhập tên tài khoản!";
    }
    if (empty($ho_ten)) {
        $errors['ho_ten'] = "Bạn cần nhập họ và tên!";
    }
    if (empty($mat_khau)) {
        $errors['mat_khau'] = "Bạn cần nhập mật khẩu!";
    }
    if (empty($mat_khau2)) {
        $errors['mat_khau2'] = "Bạn cần nhập lại mật khẩu!";
    }
    if (empty($sdt)) {
        $errors['sdt'] = "Bạn cần nhập số điện thoại!";
    }
    if ($mat_khau != $mat_khau2) {
        $errors['mat_khau'] = "Xác nhận mật khẩu không khớp!";
        $errors['mat_khau2'] = "Xác nhận mật khẩu không khớp!";
    }
    if (empty($email)) {
        $errors['email'] = "Bạn cần nhập email!";
    }
    if (!array_filter($errors)) {
        tk_insert($ten_tk, $ho_ten, $mat_khau, $sdt, $email, $anh, $vai_tro);
        move_uploaded_file($file['tmp_name'], "../../images/avatar/" . $anh);
        $message = "Thêm tài khoản thành công ";
    }
    $VIEW_NAME = "new.php";
} else if (exist_param("new")) {

    $VIEW_NAME = "new.php";
} //xóa tk
else if (exist_param("btn_xoa")) {
    if (isset($_GET['ma_tk'])) {
        tk_delete($_GET['ma_tk']);
    }

    //hiển thị danh sách
    $ds_tk = tk_select_all();
    $VIEW_NAME = "list.php";
} // edit
else if (exist_param("btn_edit")) {
    $ma_tk = $_REQUEST['ma_tk'];
    $tk_info = kh_select_by($ma_tk);
    extract($tk_info);

    $ds_tk = tk_select_all();
    $VIEW_NAME = "edit.php";
} // update
else if (exist_param("btn_update")) {

    $ma_tk = $_POST["ma_tk"];
    $ten_tk = $_POST["ten_tk"];
    $ho_ten = $_POST["ho_ten"];
    $mat_khau = $_POST["mat_khau"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $vai_tro = $_POST["vai_tro"];

    $file = $_FILES['anh'];
    $anh = $file['name']; 

    tk_update($ma_tk, $ten_tk, $ho_ten, $mat_khau, $sdt, $email, $anh, $vai_tro);
    move_uploaded_file($file['tmp_name'], "../../images/avatar/" . $anh);
    $ds_tk = tk_select_all();
    $VIEW_NAME = "list.php";
} else {
    $ds_tk = tk_select_all();
    $VIEW_NAME = "list.php";
}
require "../index.php";
