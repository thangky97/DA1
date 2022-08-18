<?php
require_once 'pdo.php';

// function thong_ke_sp(){
//     $sql = "SELECT lo.ma_hang, lo.ten_hang,"
//             . " COUNT(*) so_luong,"
//             . " MIN(sp.gia_sp) gia_min,"
//             . " MAX(sp.gia_sp) gia_max,"
//             . " AVG(sp.gia_sp) gia_avg"
//             . " FROM san_pham sp"
//             . " JOIN hang lo on lo.ma_hang=sp.ma_hang "
//             . " GROUP BY lo.ma_hang, lo.ten_hang";
//     return pdo_query($sql);
// }

//Thong ke doanh thu theo tháng
function doanh_thu()
{
    $sql = "SELECT MONTH(ngay_them) ngay_them, SUM(don_gia) total , COUNT(ma_dh) so_luong from don_hang  where trang_thai=2 group by MONTH(ngay_them)";
    return pdo_query($sql);
}
function total_dh()
{
    $sql = "SELECT COUNT(ma_dh) total FROM don_hang where trang_thai=2";
    return pdo_query($sql);
}

function total_tk()
{
    $sql = "SELECT COUNT(ma_tk) total FROM tai_khoan ";
    return pdo_query($sql);
}
function total_lh()
{
    $sql = "SELECT COUNT(ma_lh) total FROM lien_he ";
    return pdo_query($sql);
}
function total_bl()
{
    $sql = "SELECT COUNT(ma_bl) total FROM binh_luan ";
    return pdo_query($sql);
}

function thong_ke_bl()
{
    $sql = "SELECT sp.ma_sp, sp.ten_sp,"
        . " COUNT(*) so_luong,"
        . " MIN(bl.ngay_bl) cu_nhat,"
        . " MAX(bl.ngay_bl) moi_nhat"
        . " FROM binh_luan bl "
        . " JOIN san_pham sp on sp.ma_sp=bl.ma_sp "
        . " GROUP BY sp.ma_sp, sp.ten_sp "
        . " HAVING so_luong > 0";
    return pdo_query($sql);
}
