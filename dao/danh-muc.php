<?php

    //truy vấn danh sách hãng 
    function hang_select_all(){
        $sql="select * from hang order by ma_hang";
        return pdo_query($sql);
    }
    //truy vấn danh sách mùi hương
    function mh_select_all(){
        $sql="select * from mui_huong order by ma_mh";
        return pdo_query($sql);
    } 
    // function loai_select(){
    //     $sql = "Select * from loai";
    //     return pdo_query($sql);
    // }

    //Thêm mới hãng
    function hang_insert( $ten_hang){
        $sql="insert into hang( ten_hang) Values( '$ten_hang')";
        pdo_execute($sql);
    }
    //Thêm mới mùi hương
    function mh_insert( $ten_mh){
        $sql="insert into mui_huong( ten_mh) Values( '$ten_mh')";
        pdo_execute($sql);
    }

    //xóa hãng
    function hang_delete($ma_hang){
        $sql="delete from hang where ma_hang=?";
        pdo_execute($sql,$ma_hang);
    }
    //xóa mùi hương
    function mh_delete($ma_mh){
        $sql="delete from mui_huong where ma_mh=?";
        pdo_execute($sql,$ma_mh);
    }

    //lấy thông tin 1 mã hãng
    function hang_getinfo($ma_hang){
        $sql="select * from hang where ma_hang=?";
        return pdo_query_one($sql,$ma_hang);
    }
    //lấy thông tin 1 mã loại
    function mh_getinfo($ma_mh){
        $sql="select * from mui_huong where ma_mh=?";
        return pdo_query_one($sql,$ma_mh);
    }

    //cập nhật dữ liệu hãng
    function hang_update($ma_hang, $ten_hang){
        $sql = "update hang set ten_hang=? where ma_hang=?";
        pdo_execute($sql,$ten_hang,$ma_hang);
    }
    //cập nhật dữ liệu mùi hương
    function mh_update($ma_mh, $ten_mh){
        $sql = "update mui_huong set ten_mh=? where ma_mh=?";
        pdo_execute($sql,$ten_mh,$ma_mh);
    }
?>

