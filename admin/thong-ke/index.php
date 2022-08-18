
<?php
require "../../global.php";
require "../../dao/binh-luan.php";
require "../../dao/thong-ke.php";

extract($_REQUEST);

$ds_tk = doanh_thu();
$total_dh = total_dh();
$total_tk = total_tk();
$total_lh = total_lh();
$total_bl = total_bl();

$VIEW_NAME = "list.php";

require "../index.php";
