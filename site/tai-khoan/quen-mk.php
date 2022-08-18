<?php
require_once "../../global.php";
require_once "../../dao/tai-khoan.php";
$text = "Quên mật khẩu";
extract($_REQUEST);
$VIEW_NAME = "tai-khoan/quen-mk-form.php";

if (exist_param("btn_forgot")) {
    $errors = ['ten_tk' => '', 'email' => ''];
    if (empty($ten_tk)) {
        $errors['ten_tk'] = "Cần điền tên đăng nhập!";
    }
    if (empty($email)) {
        $errors['email'] = "Cần điền email!";
    }
    if (!array_filter($errors)) {
        $user = kh_select_by_id($ten_tk);
        if ($user) {
            if ($user['email'] != $email) {
                $err = "Sai địa chỉ email!";
            } else {
                $MESS = $user['mat_khau'];
                global $ten_tk, $mat_khau;
            }
        } else {
            $errr = "Sai tên đăng nhập!";
        }
    }
}
require '../layout3.php';
