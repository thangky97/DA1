<?php
require "../../global.php";
require "../../dao/don-hang.php";
require "../../dao/pdo.php";

extract($_REQUEST);

if (exist_param("btn_update")) {
    $ma_dh = $_POST["ma_dh"];
    $ho_ten = $_POST["ho_ten"];
    $email = $_POST["email"];
    $sdt = $_POST["sdt"];
    $dia_chi = $_POST["dia_chi"];
    $don_gia = $_POST["don_gia"];
    $ngay_them = $_POST["ngay_them"];
    $ghi_chu = $_POST["ghi_chu"];
    $trang_thai = $_POST["trang_thai"];

    // thêm
    dh_update($ma_dh,$ho_ten, $email, $sdt, $dia_chi, $don_gia, $ngay_them, $ghi_chu, $trang_thai);
    $message = "Update đơn hàng thành công ";
    $VIEW_NAME = "edit.php";
} // edit
else if (exist_param("btn_edit")) {
    $ma_dh = $_REQUEST['ma_dh'];
    $dh_info = dh_getinfo($ma_dh);
    extract($dh_info);

    $ds_dh = dh_select_all();
    $VIEW_NAME = "edit.php";
}// list dh
else if(exist_param("btn_list")){
    $trang_thai = $_REQUEST['trang_thai'];
    $ds_dh = dh_select_by_tt($trang_thai);
    $VIEW_NAME = "list.php";
}
// chi tiết đơn hàng 
else {
    $ct_dh = dh_select_by_ma_dh($ma_dh);
    $VIEW_NAME = "chi-tiet.php";
}

require "../index.php";
