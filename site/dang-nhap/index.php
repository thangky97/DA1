<?php
require  '../../global.php';
require "../../dao/pdo.php";
require  "../../dao/tai-khoan.php"; 
extract($_REQUEST);
$text = "Đăng nhập"; 
if (exist_param("dang-nhap")) {
    $ten_tk = get_cookie("ten_tk");
    $mat_khau = get_cookie("mat_khau");
    $VIEW_NAME = "dang-nhap-form.php";
    require '../layout3.php';
    die;
    //ok
} else if (isset($_SESSION['user'])) {
    $VIEW_NAME = "../tai-khoan/quan-ly.php";
} else if (exist_param("btn_login")) {
    $errors = ['ten_tk' => '', 'mat_khau' => ''];
    $user = kh_select_by_id($ten_tk);
    if (empty($ten_tk)) {
        $errors['ten_tk'] = "Cần điền tên đăng nhập!";
    }
    if (empty($mat_khau)) {
        $errors['mat_khau'] = "Cần điền mật khẩu!";
    }
    if (!array_filter($errors)) {
        if ($user) {
            if ($user['mat_khau'] == $mat_khau) {
                //Xử lý ghi nhớ tài khoản
                if (exist_param("ghi_nho")) {
                    add_cookie("ten_tk", $ten_tk, 30);
                    add_cookie("mat_khau", $mat_khau, 30);
                } else {
                    delete_cookie("ten_tk");
                    delete_cookie("mat_khau");
                }
                $_SESSION["user"] = $user;
                //quay trở lại trang được yêu cầu
                if (isset($_SESSION['request_uri'])) {
                    header("location: " . $_SESSION['request_uri']);
                }
                require '../trang-chinh/index.php';
                die;
            } else {
                $err = "Mật khẩu sai!";
                $VIEW_NAME = "dang-nhap-form.php";
                require '../layout3.php';
                die;
            }
        } else {
            $errr  = "Tài khoản không tồn tại!";
            $VIEW_NAME = "dang-nhap-form.php";
            require '../layout3.php';
            die;
        }
    }
    $VIEW_NAME = "dang-nhap-form.php";
    require '../layout3.php';
    die;
} else {
    if (exist_param("btn_logoff")) {
        session_unset();
    }
    $ten_tk = get_cookie("ten_tk");
    $mat_khau = get_cookie("mat_khau");


    require '../trang-chinh/index.php';
}
