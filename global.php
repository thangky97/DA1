<?php
    session_start();
    $HT = "/FPT/DU_AN_1";
    $DAO_URL = "$HT/dao";
    $ADMIN_URL = "$HT/admin";
    $SITE_URL = "$HT/site"; 
    $index_URL = "$HT/test";
    $IMG_URL = "$HT/images";
    $IMAGE = "$HT/images";
    $CHI_TIET_URL = "$SITE_URL/san-pham";

    $TRANG_CHU_URL = "$SITE_URL/trang-chinh/";


    //menu admin
    $TRANGCHINH_URL = "$ADMIN_URL/trang-chinh/";
    $SANPHAM_URL = "$ADMIN_URL/admin/san-pham";
    $DONHANG_URL = "$ADMIN_URL/admin/don-hang";
    $DANHMUC_URL = "$ADMIN_URL/admin/danh-muc";
    $BINHLUAN_URL = "$ADMIN_URL/admin/binh-luan";
    $THONGKE_URL = "$ADMIN_URL/admin/thong-ke";
    $LIENHE_URL = "$ADMIN_URL/admin/lien-he";
    $TAIKHOAN_URL = "$ADMIN_URL/admin/tai-khoan";
    //view

    $IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$HT/images";
    function save_file($fieldname, $target_dir){
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded["name"]);
        $target_path = $target_dir.$file_name;
        move_uploaded_file($file_uploaded["tmp_name"], $target_path);
        return $file_name;
    }
    function exist_param($fieldname){
        return array_key_exists($fieldname, $_REQUEST);
    }

    function add_cookie($name, $value, $day){
        setcookie($name, $value, time() + (86400 + $day), "/");
    }
    function delete_cookie($name){
        add_cookie($name, "", -1);
    }
    function get_cookie($name){
        return $_COOKIE[$name]??'';
    }
?>
