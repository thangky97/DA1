<?php
require "../../dao/pdo.php";
require "../../global.php";
require "../../dao/don-hang.php";

extract($_REQUEST);
if (exist_param("btn_xoa")){  
    if (isset($_GET['ma_dh'])) {
        dh_delete($_GET['ma_dh']);
        ct_dh_delete($_GET['ma_dh']);
    }  
    $see_dh = ds_dh_tk($_SESSION['user']['ma_tk']); 
    $VIEW_NAME = "don-hang-form.php";
}elseif(exist_param("ct_dh")){
    $ct_dh = dh_select_by_ma_dh($ma_dh);
    $VIEW_NAME = "don-hang-ct.php";
}
 else{
    $see_dh = ds_dh_tk($_SESSION['user']['ma_tk']); 
    $VIEW_NAME = "don-hang-form.php";
}
require '../layout4.php';
