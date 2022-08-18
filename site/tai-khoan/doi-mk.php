<?php
require "../../global.php";
require "../../dao/tai-khoan.php";

extract($_REQUEST);
$ma_tk = $_REQUEST['ma_tk'];
if (exist_param("btn_change")) {
    $errors = ['mat_khau' => '', 'mat_khau2' => '', 'mat_khau3' => ''];
    if (empty($mat_khau)) {
        $errors['mat_khau'] = "Cần điền mật khẩu hiện tại!";
    }
    if (empty($mat_khau2)) {
        $errors['mat_khau2'] = "Cần điền mật khẩu mới!";
    }
    if (empty($mat_khau3)) {
        $errors['mat_khau3'] = "cần xác nhận mật khẩu!";
    }
    if (!array_filter($errors)) {
        if ($mat_khau2 != $mat_khau3) {
            $MESS = "Xác nhận mật khẩu mới không khớp!";
        } else {
            $user = kh_select_by($ma_tk);
            if ($user) {
                if ($user['mat_khau'] == $mat_khau) {
                    try {
                        tk_change_pass($ma_tk, $mat_khau2);
                        $MESSS = "Đổi mật khẩu thành công!";
                    } catch (Exception $e) {
                        $MESS = "Đổi mật khẩu thất bại!";
                    }
                } else {
                    $MES = "Sai mật khẩu!";
                }
            }
        }
    }
}
$VIEW_NAME = "tai-khoan/doi-mk-form.php";
require '../layout4.php';
