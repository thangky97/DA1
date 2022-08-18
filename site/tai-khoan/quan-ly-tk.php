<div class="panel panel-info">
    <div class="panel-heading">Thông tin tài khoản</div>
    <ul class="nav ">
        <div class="img text-center">
            <img src='../../images/avatar/<?= $_SESSION['user']['anh'] ?>' width="150px" style="margin-top: 5px;">
            <br>
        </div>
        <li><a href="../tai-khoan/dang-xuat.php">Đăng xuất</a></li>
        <li><a href="../tai-khoan/doi-mk.php?<?=$_SESSION['user']['ma_tk']?>">Đổi mật khẩu</a></li>
        <li><a href="../tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
        <li><a href="../tai-khoan/don-hang.php">Xem đơn hàng</a></li>
        <?php
        if ($_SESSION['user']['vai_tro'] != 0) {
            echo "<li><a href='../../admin/trang-chinh/index.php'>Quản trị website</a></li>";
        }
        ?>
    </ul>
</div>