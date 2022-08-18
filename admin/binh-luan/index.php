<?php
require "../../global.php";
require "../../dao/binh-luan.php";
require "../../dao/thong-ke.php";

extract($_REQUEST);

if (exist_param("ma_sp", $_REQUEST)) {
    $ds_bl = bl_select_by_sp($ma_sp);
    $VIEW_NAME = "chi-tiet.php";
    if (exist_param("btn_xoa")) {
        if (isset($_GET['ma_bl'])) {
            bl_delete($_GET['ma_bl']);
        }

        //hiển thị danh sách
        $ds_bl = bl_select_by_sp($ma_sp);
        $VIEW_NAME = "chi-tiet.php";
    }
} else {
    $ds_bl = thong_ke_bl();
    $VIEW_NAME = "list.php";
}
require "../index.php";

