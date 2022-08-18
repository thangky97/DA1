<?php
// truy xuất tất cả dữ liệu
function anh_select_all(){
    $sql = "SELECT * FROM ql_anh order by ma_anh ";
    return pdo_query($sql);
}
// thêm mới ảnh
function anh_insert($anh, $vai_tro, $kich_hoat){
    $sql = "INSERT INTO ql_anh(anh, vai_tro, kich_hoat ) Values( '$anh', '$vai_tro', '$kich_hoat' )";
    pdo_execute($sql);
}
// xóa ảnh
function anh_delete($ma_anh){
    $sql = "DELETE FROM ql_anh where ma_anh=?";
    pdo_execute($sql, $ma_anh);
}
// xuất danh sách ảnh theo vai trò
function anh_select_by_gt($vai_tro){
    $sql = "SELECT * FROM ql_anh WHERE vai_tro=?";
    return pdo_query($sql, $vai_tro);
}
// xuất danh sách banner đã kích hoạt  
function anh_select_by_kh2($kich_hoat){
    $sql = "SELECT * FROM ql_anh WHERE kich_hoat='$kich_hoat' ";
    return pdo_query($sql);
}
//lấy thông tin một ảnh
function anh_getinfo($ma_anh){
    $sql="SELECT * from ql_anh where ma_anh=?";
    return pdo_query_one($sql,$ma_anh);
}
// update ảnh 
function anh_update($ma_anh, $anh, $kich_hoat){
    if ($anh!="") {
        $sql = "UPDATE ql_anh set anh = '$anh',kich_hoat = '$kich_hoat' where ma_anh=" . $ma_anh;
    }else {
        $sql = "UPDATE ql_anh set kich_hoat = '$kich_hoat' where ma_anh=" . $ma_anh;
    }
    pdo_execute($sql); 
}
