<?php
require '../../global.php';
require "../../dao/don-hang.php";
require "../../dao/pdo.php";
include "function.php";

if (exist_param("thanh-toan-form")) {
    $VIEW_NAME = "thanh-toan.php";
} else if(exist_param("yes")){ 
    $errors = ['ho_ten' => '', 'dia_chi' => '', 'sdt' => '', 'email' => '' ];  
     
    $ho_ten = $_POST["ho_ten"];
    $email = $_POST["email"];
    $sdt = $_POST["sdt"];
    $dia_chi = $_POST["dia_chi"];  
    $ghi_chu = $_POST["ghi_chu"]; 

    if (empty($ho_ten)) {
        $errors['ho_ten'] = "Bạn cần nhập họ tên!";
    } 
    if (empty($sdt)) {
        $errors['sdt'] = "Bạn cần nhập số điện thoại!";
    }
    if (empty($dia_chi)) {
        $errors['dia_chi'] = "Bạn cần nhập địa chỉ nhận hàng!";
    }
    if (empty($email)) {
        $errors['email'] = "Bạn cần nhập email!";
    }
    if (!array_filter($errors)) { 
        $VIEW_NAME = "bill.php";
    } else{
        $VIEW_NAME = "thanh-toan.php";
    } 
} else {
    $VIEW_NAME = "cart-form.php";
}
require '../layout5-cart.php';
