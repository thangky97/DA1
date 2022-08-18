<?php
require "../../dao/pdo.php";
require "../../global.php";
require "../../dao/ql_anh.php";

extract($_REQUEST);
if (exist_param("btn_new-banner")) {
    $errors = ['anh' => ''];
    $e_imgs = ['png', 'jpg'];
    $file = $_FILES['anh'];

    if ($file['size'] > 0) {
        $anh = $file['name'];
        $ext = PATHINFO($anh, PATHINFO_EXTENSION);
        if (!in_array($ext, $e_imgs)) {
            $errors['anh'] = "Bạn phải nhập là file ảnh dạng png, jpg";
        }
    } else {
        $errors['anh'] = "Bạn cần nhập ảnh";
    }
    
    if (!array_filter($errors)) {
        anh_insert($anh, $vai_tro, $kich_hoat);
        move_uploaded_file($file['tmp_name'], "../../images/banner/" . $anh);
        $message = "Thêm ảnh thành công ";
    }
    $VIEW_NAME = "new-banner.php";
} else if (exist_param("btn_new-logo")) {
    $errors = ['anh' => ''];
    $e_imgs = ['png', 'jpg'];
    $file = $_FILES['anh'];
    if ($file['size'] > 0) {
        $anh = $file['name'];
        $ext = PATHINFO($anh, PATHINFO_EXTENSION);
        if (!in_array($ext, $e_imgs)) {
            $errors['anh'] = "Bạn phải nhập là file ảnh dạng png, jpg";
        }
    } else {
        $errors['anh'] = "Bạn cần nhập ảnh";
    }
    if (!array_filter($errors)) {
        anh_insert($anh, $vai_tro, $kich_hoat);
        move_uploaded_file($file['tmp_name'], "../../images/logo/" . $anh);
        $message = "Thêm ảnh thành công ";
    }
    $VIEW_NAME = "new-logo.php";
} else if (exist_param("new-logo")) {
    $VIEW_NAME = "new-logo.php";
} else if (exist_param("new-banner")) {
    $VIEW_NAME = "new-banner.php";
} else if (exist_param("btn_xoa")) {
    if (isset($_GET['ma_anh'])) {
        anh_delete($_GET['ma_anh']);
    }
    $vai_tro = $_REQUEST['vai_tro'];
    $ds_anh = anh_select_by_gt($vai_tro);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    $vai_tro = $_REQUEST['vai_tro'];
    $ma_anh = $_REQUEST['ma_anh'];
    $ds_anh = anh_getinfo($ma_anh);
    extract($ds_anh);
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_update")) {
    $vai_tro = 0;
    $file = $_FILES['anh'];
    $anh = $file['name'];
    move_uploaded_file($file['tmp_name'], "../../images/logo/" . $anh);
    anh_update($ma_anh, $anh, $kich_hoat);
    $message = "Update thành công"; 
    $ds_anh = anh_select_by_gt($vai_tro);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update1")) {
    $vai_tro = 1;
    $file = $_FILES['anh'];
    $anh = $file['name'];
    move_uploaded_file($file['tmp_name'], "../../images/banner/" . $anh);
    anh_update($ma_anh, $anh, $kich_hoat);
    $message = "Update thành công";
    $ds_anh = anh_select_by_gt($vai_tro);
    $VIEW_NAME = "list.php";
} else {
    $vai_tro = $_REQUEST['vai_tro'];
    $ds_anh = anh_select_by_gt($vai_tro);
    $VIEW_NAME = "list.php";
}
require "../index.php";
