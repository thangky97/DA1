<form action="quen-mk.php" method="post">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <b>Quên mật khẩu</b>
            </div>
            <div class="card-body">
                <div class="form-group mb-3">
                    <input type="text" name="ten_tk" class="form-control" placeholder="Tên đăng nhập">
                    <?php if (!empty($errors['ten_tk'])) : ?>
                        <p style="color: red;"><?php echo $errors['ten_tk'] ?></p>
                    <?php endif; ?>
                    <?php
                    if (isset($errr)) {
                        echo "<p style='color: red;'> $errr </p>";
                    }
                    ?>
                </div>
                <div class="form-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="email">
                    <?php if (!empty($errors['email'])) : ?>
                        <p style="color: red;"><?php echo $errors['email'] ?></p>
                    <?php endif; ?>
                    <?php
                    if (isset($err)) {
                        echo "<p style='color: red;'> $err </p>";
                    }
                    ?>
                </div>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <button type="submit" name="btn_forgot" class="btn btn-primary btn-block">Gửi</button>
                </div>
                <!-- /.social-auth-links -->
                <div class="form-group">
                    <a href="../dang-nhap/index.php?dang-nhap"><small>Đăng nhập?</small></a>
                        <div><small>Không có tài khoản?</small> <a href="../tai-khoan/dang-ky.php"><small>Đăng ký.</small></a></div>   
                </div>
                <div class=" text-center">
                <?php
                if (isset($MESS)) {
                    echo "<h5>Mật khẩu của bạn là: </h5><h5 style='color: red;'>$MESS</h5>";
                }
                ?>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</form>