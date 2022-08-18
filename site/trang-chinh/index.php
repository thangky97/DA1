<?php
require_once '../../global.php';
require "../../dao/san-pham.php";
require "../../dao/danh-muc.php";
require_once "../../dao/pdo.php";


if (exist_param("gioi-thieu")) {
    $VIEW_NAME = "../gioi-thieu/gioi-thieu.php";
    require '../layout2.php';
    die;
}else if (exist_param("san-pham")) {
    $VIEW_NAME = "../san-pham/san-pham.php";
} else {
    $VIEW_NAME = "trang-chinh/trang-chu.php";
}
$giam_gia= 0;
$sp_gg = sp_select_gg($giam_gia);
$hh_arr = sp_select_top10();
$sp_moi = sp_select_moi_nhat();
$ds_hang = hang_select_all();
$ds_sp = sp_select_all();
require '../layout.php';
