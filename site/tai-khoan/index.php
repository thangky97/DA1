<?php
require_once '../../global.php';
require "../../dao/pdo.php";
require_once "../../dao/tai-khoan.php";

extract($_REQUEST);

if (exist_param("dang-nhap")) {
    $ten_tk = get_cookie("ten_tk");
    $mat_khau = get_cookie("mat_khau");

    $VIEW_NAME = "dang-nhap-form.php";
    require '../layout3.php';
    die;
    //ok
} else if (exist_param("quan-ly")) {
    $VIEW_NAME = "../tai-khoan/quan-ly.php";
    require '../layout4.php';
    die;
} else if (exist_param("san-pham")) {
    $VIEW_NAME = "san-pham.php";
}
else if (isset($_SESSION['user'])) {
    $VIEW_NAME = "../tai-khoan/quan-ly.php";
} else if (exist_param("btn_logoff")) {
    require '../trang-chinh/index.php';
} else {
    
}

