<?php
require_once "../../global.php";
require_once "../../dao/tai-khoan.php";
$text = "Đăng ký tài khoản";
extract($_REQUEST);
if (exist_param("btn_dk")) {
    $errors = ['ten_tk' => '', 'mat_khau' => '', 'anh' => '', 'ho_ten' => '', 'sdt' => '', 'mat_khau' => '', 'mat_khau2' => '', 'email' => ''];
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
    if (empty($mat_khau)) {
        $errors['mat_khau'] = "Bạn cần nhập mật khẩu!";
    }
    if (empty($email)) {
        $errors['email'] = "Bạn cần nhập email!";
    }
    if ($mat_khau != $mat_khau2) {
        $errors['mat_khau'] = "Xác nhận mật khẩu không khớp!";
        $errors['mat_khau2'] = "Xác nhận mật khẩu không khớp!";
    }
    $name = kh_exist($ten_tk);
    if ($name) {
        $err = "Tên tài khoản đã được sử dụng";
    } else {
        if (!array_filter($errors)) {
            tk_insert($ten_tk, $ho_ten, $mat_khau, $sdt, $email, $anh, $vai_tro);
            move_uploaded_file($file['tmp_name'], "../../images/avatar/" . $anh);
            $MESS = "Thêm tài khoản thành công ";
        }
    }
} else {
    global $ma_tk, $ten_tk, $ho_ten, $mat_khau, $sdt, $email, $anh, $vai_tro, $mat_khau2;
}

$VIEW_NAME = "tai-khoan/dang-ky-form.php";
require '../layout3.php';
