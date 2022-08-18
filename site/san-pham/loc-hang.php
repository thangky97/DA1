<?php
    require "../../global.php";
    require "../../dao/danh-muc.php";
    require "../../dao/pdo.php";
    require "../../dao/san-pham.php";

    extract($_REQUEST);

    if(exist_param("ma_hang")){
        $dshang = sp_select_by_hang($ma_hang);
    }elseif(exist_param("keyword")){
        $dshang = sp_select_keyword($keyword);
    }elseif(exist_param("ma_mh")){
        $dshang = sp_select_by_mh($ma_mh);
    }elseif(exist_param("size")){
        $dshang = sp_select_by_size1($size);
    }elseif(exist_param("gioi_tinh")){
        $dshang = sp_select_by_gt($gioi_tinh);
    }else{
        $dshang = sp_select_all();
    }
    $VIEW_NAME =  "loc-hang-ui.php";
    $ds_hang= hang_select_all();
    $dstop10 = sp_select_top10();

    require "../layout.php";
?>