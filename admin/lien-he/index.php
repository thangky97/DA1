<?php
require "../../global.php";
require "../../dao/lien-he.php";
require "../../dao/pdo.php";

extract($_REQUEST);
if (exist_param("btn_xoa")) {
    if (isset($_GET['ma_lh'])) {
        lh_delete($_GET['ma_lh']);
    }

    //hiển thị danh sách
    $ds_lh = lh_select_all();
    $VIEW_NAME = "list.php";
}else {
    $ds_lh = lh_select_all();
    $VIEW_NAME = "list.php";
}
require "../index.php";