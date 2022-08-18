<?php
    // truy xuất tất cả dữ liệu
    function sp_select_all(){
        $sql = "SELECT * FROM san_pham order by ma_sp ";
        return pdo_query($sql);
    }
    //lấy tất cả dung tích 
    function sp_select_all_size(){
        $sql = "SELECT * FROM san_pham order by size";
        return pdo_query($sql);
    }
    // thêm mới
    function sp_insert( $ten_sp, $gia_sp, $ma_hang, $giam_gia, $gioi_tinh, $ma_mh, $size, $anh, $mo_ta, $ngay_them, $so_luot_xem){
        $sql = "INSERT INTO san_pham( ten_sp, gia_sp, ma_hang, giam_gia, gioi_tinh, ma_mh, size, anh, mo_ta, ngay_them, so_luot_xem) Values( '$ten_sp', '$gia_sp', '$ma_hang', '$giam_gia', '$gioi_tinh', '$ma_mh', '$size', '$anh', '$mo_ta', '$ngay_them', '$so_luot_xem')";
        pdo_execute($sql);
    }
    // xóa
    function sp_delete($ma_sp){
        $sql = "DELETE FROM san_pham where ma_sp=?";
        pdo_execute($sql,$ma_sp);
    }
    //lấy thông tin 1 sản phẩm
    function sp_getinfo($ma_sp){
        $sql="SELECT * from san_pham where ma_sp=?";
        return pdo_query_one($sql,$ma_sp);
    }
    //cập nhật dữ liệu  
    function sp_update($ma_sp, $ten_sp, $gia_sp, $ma_hang, $giam_gia, $gioi_tinh, $ma_mh, $size, $anh, $mo_ta, $ngay_them, $so_luot_xem){
        if ($anh!="") {
            $sql = "UPDATE san_pham set ten_sp = '$ten_sp',gia_sp = '$gia_sp',ma_hang = '$ma_hang',giam_gia = '$giam_gia',gioi_tinh = '$gioi_tinh',ma_mh = '$ma_mh',size = '$size',anh = '$anh',mo_ta = '$mo_ta',ngay_them = '$ngay_them',so_luot_xem = '$so_luot_xem' WHERE ma_sp=".$ma_sp;
        }else {
            $sql = "UPDATE san_pham set ten_sp = '$ten_sp',gia_sp = '$gia_sp',ma_hang = '$ma_hang',giam_gia = '$giam_gia',gioi_tinh = '$gioi_tinh',ma_mh = '$ma_mh',size = '$size' ,mo_ta = '$mo_ta',ngay_them = '$ngay_them',so_luot_xem = '$so_luot_xem' WHERE ma_sp=".$ma_sp;
        }
        pdo_execute($sql); 
    }
    // tăng số lượt xem
    function sp_tang_so_luot_xem($ma_sp){
        $sql = "UPDATE san_pham SET so_luot_xem = so_luot_xem + 1 WHERE ma_sp=?";
        pdo_execute($sql, $ma_sp);
    }
    // top 10 sản phẩm xem nhiều nhất
    function sp_select_top10(){
        $sql = "SELECT * FROM san_pham WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0,10";
        return pdo_query($sql);
    }
    // xuất sản phẩm cùng hãng
    function sp_select_by_hang($ma_hang){
        $sql = "SELECT * FROM san_pham WHERE ma_hang=?";
        return pdo_query($sql, $ma_hang);
    }
    // xuất sản phẩm cùng dung tích
    function sp_select_by_size1($size){
        $sql = "SELECT * FROM san_pham WHERE size=?";
        return pdo_query($sql, $size);
    }

    //giới hạn sp liên quan cùng hãng mã sp giảm dần
    function sp_select_by_hang_lm4($ma_hang){
        $sql = "SELECT * FROM san_pham WHERE ma_hang=? order by ma_sp desc limit 4";
        return pdo_query($sql, $ma_hang);
    }
    //giới hạn sp liên quan cùng hãng mã sp tăng dần
    function sp_select_by_hang_lm($ma_hang){
        $sql = "SELECT * FROM san_pham WHERE ma_hang=? order by ma_sp limit 4";
        return pdo_query($sql, $ma_hang);
    }

    //sp liên quan cùng giới tính
    function sp_select_by_gioi_tinh($gioi_tinh){
        $sql = "SELECT * FROM san_pham WHERE $gioi_tinh=? order by ma_sp limit 4";
        return pdo_query($sql, $gioi_tinh);
    }
    // xuất sản phẩm cùng mùi hương
    function sp_select_by_mh($ma_mh){
        $sql = "SELECT * FROM san_pham WHERE ma_mh=?";
        return pdo_query($sql, $ma_mh);
    }

    // xuất dung tích sp
    function sp_select_by_size($size){
        $sql = "SELECT * FROM san_pham WHERE size=?";
        return pdo_query($sql, $size);
    } 
    // xuất sản phẩm giảm giá
    // function sp_select_by_gg($giam_gia){
    //     $sql = "SELECT * FROM san_pham WHERE giam_gia != 0";
    //     return pdo_query($sql, $giam_gia);
    // }
    // xuất sản phẩm cùng giới tính
    function sp_select_by_gt($gioi_tinh){
        $sql = "SELECT * FROM san_pham WHERE gioi_tinh=?";
        return pdo_query($sql, $gioi_tinh);
    }
    function sp_select_gg($giam_gia){
        $sql = "SELECT * FROM san_pham  WHERE giam_gia !=? limit 6";
        return pdo_query($sql, $giam_gia);
    }
    function sp_select_keyword($keyword){
        $sql = "SELECT * FROM san_pham sp"
                . " join hang h on h.ma_hang=sp.ma_hang "
                . " where ten_sp like ? or ten_hang like ?" ;
        return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%' );
    }
    function sp_select_moi_nhat(){
        $sql="SELECT * from san_pham order by ngay_them desc limit 6";
        return pdo_query($sql);
    }
    function sp_select_cu_nhat(){
        $sql="SELECT * from san_pham order by ngay_them desc limit 6";
        return pdo_query($sql);
    }
    
    //join hang, mh vào sp 1 sản phẩm
    function sp_hang_muihuong($ma_sp){
        $sql = "SELECT sp.*, h.ten_hang, mh.ten_mh FROM san_pham sp Join mui_huong mh ON mh.ma_mh = sp.ma_mh join hang h ON h.ma_hang = sp.ma_hang WHERE sp.ma_sp='$ma_sp'";
        return pdo_query_one($sql);
    }
    function sp_show_all(){
        $sql = "SELECT ma_sp, ten_sp, gia_sp, giam_gia, gioi_tinh, size, anh, mo_ta, ngay_them, so_luot_xem , ten_hang, ten_mh
        FROM ((san_pham
        INNER JOIN hang ON san_pham.ma_hang = hang.ma_hang)
        INNER JOIN mui_huong ON san_pham.ma_mh = mui_huong.ma_mh)";
        return pdo_query($sql);
    }
    
?>