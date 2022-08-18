<?php
// danh sách đơn hàng
function dh_select_all()
{
    $sql = "SELECT * FROM don_hang order by ma_dh ";
    return pdo_query($sql);
}
// danh sách chi tiết đơn hàng
function ct_dh_select_all()
{
    $sql = "SELECT * FROM chi_tiet_don_hang order by ma_ct ";
    return pdo_query($sql);
}
// thêm mới đơn hàng
function dh_insert($ma_tk, $ho_ten, $email, $sdt, $dia_chi, $don_gia, $ngay_them, $ghi_chu, $trang_thai)
{
    $conn = pdo_get_connection();
    $sql = "INSERT INTO don_hang(ma_tk, ho_ten, email, sdt, dia_chi, don_gia, ngay_them, ghi_chu, trang_thai) Values('$ma_tk', '$ho_ten','$email', '$sdt', '$dia_chi', '$don_gia', '$ngay_them', '$ghi_chu', '$trang_thai')"; 
    $conn->exec($sql);
    $id = $conn->lastInsertId();
    $conn = null;
    return $id;
}
// thêm mới chi tiết đơn hàng
function ct_dh_insert($anh, $ten_sp, $gia_sp, $so_luong, $ma_sp, $thanh_tien, $ma_dh)
{
    $conn = pdo_get_connection();
    $sql = "INSERT INTO chi_tiet_don_hang(anh, ten_sp, gia_sp, so_luong, ma_sp, thanh_tien,ma_dh) Values('$anh','$ten_sp', $gia_sp, '$so_luong','$ma_sp', '$thanh_tien', '$ma_dh')";
    $conn->exec($sql);
    $conn = null;
}
// xóa đơn hàng
function dh_delete($ma_dh)
{
    $sql = "DELETE FROM don_hang where ma_dh=?";
    pdo_execute($sql, $ma_dh);
}
// xóa chi tiết đơn hàng
function ct_dh_delete($ma_dh)
{
    $sql = "DELETE FROM chi_tiet_don_hang where ma_dh=?";
    pdo_execute($sql, $ma_dh);
}
//lấy thông tin 1 đơn hàng
function dh_getinfo($ma_dh)
{
    $sql = "SELECT * from don_hang where ma_dh=?";
    return pdo_query_one($sql, $ma_dh);
}
//find 1 đơn hàng
function dh_select_search($ma_dh)
{
    $sql = "SELECT * FROM don_hang where ma_dh=?";
    return pdo_query($sql, $ma_dh);
} 
//cập nhật đơn hàng
function dh_update($ma_dh,$ho_ten, $email, $sdt, $dia_chi, $don_gia, $ngay_them, $ghi_chu, $trang_thai)
{
    $sql = "UPDATE don_hang set ho_ten = '$ho_ten',email = '$email',sdt = '$sdt',dia_chi = '$dia_chi',don_gia = '$don_gia',ngay_them = '$ngay_them',ghi_chu = '$ghi_chu',trang_thai = '$trang_thai' WHERE ma_dh=" . $ma_dh;
    pdo_execute($sql);
}
//cập nhật chi tiết đơn hàng
function ct_dh_update($ma_ct,$anh, $ten_sp, $gia_sp, $so_luong, $ma_sp, $thanh_tien, $ma_dh)
{
    $sql = "UPDATE chi_tiet_don_hang set ma_sp = '$ma_sp',ten_sp = '$ten_sp', anh='$anh',gia_sp = '$gia_sp',so_luong = '$so_luong', thanh_tien = '$thanh_tien', ma_dh = '$ma_dh'  WHERE ma_ct=" . $ma_ct;
    pdo_execute($sql);
}
// xuất sản phẩm cùng trạng thái
function dh_select_by_tt($trang_thai)
{
    $sql = "SELECT * FROM don_hang WHERE trang_thai=?";
    return pdo_query($sql, $trang_thai);
}
// chi tiết đơn hàng
function dh_select_by_ma_dh($ma_dh)
{
    $sql = "SELECT * FROM chi_tiet_don_hang where ma_dh=?";
    return pdo_query($sql, $ma_dh);
}

//lấy thông tin 1 đơn hàng 
function ds_dh_tk($ma_tk)
{
    $sql = "SELECT * FROM don_hang where ma_tk=?";
    return pdo_query($sql, $ma_tk);
} 


