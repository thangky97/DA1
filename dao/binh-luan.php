<?php
require_once 'pdo.php';

function bl_select_all()
{
    $sql = "SELECT * from binh_luan order by ngay_bl DESC";
    return pdo_query($sql);
}
//Thêm mới bình luận
function bl_insert( $ten_tk, $ma_sp, $noi_dung_bl, $ngay_bl)
{
    $sql = "INSERT into binh_luan(ten_tk,ma_sp,noi_dung_bl,ngay_bl) value(?,?,?,?)";
    pdo_execute($sql, $ten_tk, $ma_sp, $noi_dung_bl, $ngay_bl);
}  
//xóa
function bl_delete($ma_bl)
{
    $sql = "DELETE from binh_luan where ma_bl=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}

function bl_select_by_id($ma_bl)
{
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}

function bl_exist($ma_bl)
{
    $sql = "SELECT count(*) FROM binh_luan WHERE $ma_bl=?";
    return pdo_query_value($sql, $ma_bl > 0);
}

function bl_select_by_sp($ma_sp)
{
    $sql = "SELECT b.*, h.ten_sp FROM binh_luan b JOIN san_pham h on h.ma_sp=b.ma_sp where b.ma_sp=? order by ngay_bl desc";
    return pdo_query($sql, $ma_sp);
}
