<?php
    // truy xuất tất cả dữ liệu
    function lh_select_all(){
        $sql = "SELECT * FROM lien_he order by ma_lh ";
        return pdo_query($sql);
    }
    // thêm mới
    function lh_insert($ten_kh, $email, $sdt, $tieu_de, $noi_dung){
        $sql = "INSERT INTO lien_he(ten_kh, email, sdt, tieu_de, noi_dung) Values('$ten_kh', '$email', '$sdt', '$tieu_de', '$noi_dung')";
        pdo_execute($sql);
    }
    // xóa
    function lh_delete($ma_lh){
        $sql = "DELETE FROM lien_he where ma_lh=?";
        pdo_execute($sql,$ma_lh);
    }
    //lấy thông tin 1 sản phẩm
    function lh_getinfo($ma_lh){
        $sql="SELECT * from lien_he where ma_lh=?";
        return pdo_query_one($sql,$ma_lh);
    }

    //cập nhật dữ liệu 
    function lh_update($ma_lh, $ten_kh, $email, $sdt, $tieu_de, $noi_dung){
        $sql = "UPDATE lien_he set ten_kh = '$ten_kh',email = '$email',sdt = '$sdt',tieu_de = '$tieu_de',noi_dung = '$noi_dung'  WHERE ma_lh=".$ma_lh;
        pdo_execute($sql);
    }
    

?>