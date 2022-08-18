<div class="panel panel-info">
    <div class="panel-heading"> Cập nhật tài khoản </div>
    <?php
    if (isset($message)) {
        echo "<h5 style='color: red;'>$message</h5>";
    }
    ?>
    <form action="cap-nhat-tk.php" method="post" style="margin: 10px;" enctype="multipart/form-data">
        <input type="hidden" name="ma_tk" value="<?= $ma_tk ?> ">
        <div class="form-group">
            <label for="my-input">Tên Đăng Nhập</label>
            <input name="ten_tk" value="<?= $ten_tk ?> " class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="my-input">Họ Tên</label>
            <input name="ho_ten" value="<?= $ho_ten ?> " class="form-control">
        </div>
        <div class="form-group">
            <label for="my-input">Số Điện Thoại</label>
            <input name="sdt" value="<?= $sdt ?> " class="form-control">
        </div>
        <div class="form-group">
            <label for="my-input">Email</label>
            <input name="email" value="<?= $email ?> " class="form-control">
        </div>
        <div class="form-group">
            <label for="my-input">Hình ảnh</label>
            <input type="file" class="form-control" name="anh" value="<?= $anh ?>"> 
        </div>
        <div class="form-group">
            <button name="btn_update" class="btn btn-default" style="margin: 10px;">Cập nhật</button>
        </div>
        <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
        <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
        <input type="hidden" name="anh" value="<?= $anh ?>">
    </form>
</div>
</div>