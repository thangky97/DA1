<?php
require_once "../../global.php";
require "../../dao/lien-he.php";
require_once "../../dao/pdo.php";

extract($_REQUEST);

if (exist_param("gui")) {
   $errors = ['ten_kh' => '', 'ten_kh' => '', 'email' => '', 'sdt' => '', 'tieu_de' => '', 'noi_dung' => ''];

   $ma_lh = $_POST["ma_lh"];
   $ten_kh = $_POST["ten_kh"];
   $email = $_POST["email"];
   $sdt = $_POST["sdt"];
   $tieu_de = $_POST["tieu_de"];
   $noi_dung = $_POST["noi_dung"];

   if (empty($ten_kh)) {
      $errors['ten_kh'] = "Bạn cần nhập họ và tên!";
   }
   if (empty($email)) {
      $errors['email'] = "Bạn cần nhập email!";
   }
   if (empty($sdt)) {
      $errors['sdt'] = "Bạn cần nhập số điện thoại!";
   }
   if (empty($tieu_de)) {
      $errors['tieu_de'] = "Bạn cần nhập tiêu đề!";
   }
   if (empty($noi_dung)) {
      $errors['noi_dung'] = "Bạn cần nhập nội dung!";
   }
   if (!array_filter($errors)) {
      lh_insert($ten_kh, $email, $sdt, $tieu_de, $noi_dung);
      $message = "Gửi thành công! ";
   }
   $VIEW_NAME = "lien-he-form.php";
}else{
   $VIEW_NAME = "lien-he-form.php";
}

require "../layout2.php";
