<?php
require "../../global.php";
require_once "../../dao/pdo.php";
require "../../dao/tai-khoan.php";
extract($_REQUEST);

if (exist_param("btn_update")) { 
    $file = $_FILES['anh'];
    $anh = $file['name'];  
    move_uploaded_file($file['tmp_name'], "../../images/avatar/" . $anh);
    tk_update($ma_tk, $ten_tk, $ho_ten, $mat_khau, $sdt, $email, $anh, $vai_tro);
    
    $message = "Cập nhật khoản thành công ";
    $_SESSION['user'] = kh_select_by($ma_tk);
} else {
    extract($_SESSION['user']);
}
$VIEW_NAME = "tai-khoan/cap-nhat-tk-form.php";
require '../layout4.php';
