<?php
require '../../global.php';
require '../../dao/san-pham.php';
require '../../dao/pdo.php';
require_once '../../dao/binh-luan.php';
require '../../dao/danh-muc.php';

extract($_REQUEST);
if (exist_param("btn_xoa")) {
    if (isset($_GET['ma_bl'])) {
        bl_delete($_GET['ma_bl']);
    }
}
//Lấy thông tin sp 
$ct_sp = sp_hang_muihuong($ma_sp);
extract($ct_sp);
//tăng số lượt xem lên 1 
sp_tang_so_luot_xem($ma_sp);
//sản phẩm cùng hãng
$sp_cung_hang_desc = sp_select_by_hang_lm4($ma_hang);
$sp_cung_hang = sp_select_by_hang_lm($ma_hang);
$sp_cung_gt = sp_select_by_gioi_tinh($gioi_tinh);
$VIEW_NAME = "chi-tiet-ui.php";

require '../layout2.php';
