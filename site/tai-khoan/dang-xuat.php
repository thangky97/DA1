<?php
require_once "../../global.php";
require_once "../../dao/tai-khoan.php";

extract($_REQUEST);

session_unset();
$ten_tk = get_cookie("ten_tk");
$mat_khau = get_cookie("mat_khau");


require '../trang-chinh/index.php';
