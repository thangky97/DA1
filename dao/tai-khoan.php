<?php
require_once 'pdo.php';
// truy xuất tất cả dữ liệu
function tk_select_all()
{
    $sql = "SELECT * FROM tai_khoan order by ma_tk ";
    return pdo_query($sql);
}
// thêm mới
function tk_insert( $ten_tk, $ho_ten, $mat_khau, $sdt, $email, $anh, $vai_tro)
{
    $sql = "INSERT INTO tai_khoan( ten_tk, ho_ten, mat_khau, sdt, email, anh, vai_tro) Values( '$ten_tk', '$ho_ten', '$mat_khau', '$sdt', '$email', '$anh', '$vai_tro')";
    pdo_execute($sql);
}
// xóa
function tk_delete($ma_tk)
{
    $sql = "DELETE FROM tai_khoan where ma_tk=?";
    pdo_execute($sql, $ma_tk);
}
//lấy thông tin 1 sản phẩm
function kh_select_by_id($ten_tk)
{
    $sql = "SELECT * FROM tai_khoan WHERE ten_tk=?";
    return pdo_query_one($sql, $ten_tk);
}
function kh_select_by($ma_tk)
{
    $sql = "SELECT * FROM tai_khoan WHERE ma_tk=?";
    return pdo_query_one($sql, $ma_tk);
}
//cập nhật dữ liệu 
function tk_update($ma_tk, $ten_tk, $ho_ten, $mat_khau, $sdt, $email, $anh, $vai_tro){
    if ($anh!="") {
        $sql = "UPDATE tai_khoan set ten_tk = '$ten_tk', ho_ten = '$ho_ten',mat_khau = '$mat_khau',sdt = '$sdt',email = '$email', anh = '$anh',vai_tro = '$vai_tro' WHERE ma_tk=" . $ma_tk;
    }else {
        $sql = "UPDATE tai_khoan set ten_tk = '$ten_tk', ho_ten = '$ho_ten',mat_khau = '$mat_khau',sdt = '$sdt',email = '$email',vai_tro = '$vai_tro' WHERE ma_tk=" . $ma_tk;
    }
    pdo_execute($sql); 
}
function tk_exist($ten_tk)
{
    $sql = "SELECT count(*) FROM tai_khoan WHERE $ten_tk=?";
    return pdo_query_value($sql, $ten_tk) > 0;
}
function tk_change_pass($ma_tk, $mat_khau2){
    $sql = "UPDATE tai_khoan SET mat_khau = '$mat_khau2' WHERE ma_tk=?" ;
    pdo_execute($sql, $ma_tk);
}
function kh_exist($ten_tk)
{
    $sql = "SELECT count(*) FROM tai_khoan WHERE ten_tk=?";
    return pdo_query_value($sql, $ten_tk) > 0;
}