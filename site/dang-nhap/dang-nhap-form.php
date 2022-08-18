<form action="index.php" method="post">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <b>Đăng nhập</b>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="ten_tk" class="form-control" placeholder="Tên đăng nhập" value="<?= $ten_tk ?>">
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
                        <input type="password" name="mat_khau" class="form-control" placeholder="Password" value="<?= $mat_khau ?>">
                        <?php if (!empty($errors['mat_khau'])) : ?>
                            <p style="color: red;"><?php echo $errors['mat_khau'] ?></p>
                        <?php endif; ?> 
                        <?php
                        if (isset($err)) {
                            echo "<p style='color: red;'> $err </p>";
                        }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <input name="ghi_nho" type="checkbox" checked> Ghi nhớ tài khoản?
                        </div>
                    </div>

                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <button type="submit" name="btn_login" class="btn btn-primary btn-block" >Đăng nhập</button>
                </div>
                <!-- /.social-auth-links -->

                <div class="form-group">
                    <a href="../tai-khoan/quen-mk.php"><small>Quên mật khẩu?</small></a>
                        <div><small>Không có tài khoản?</small> <a href="../tai-khoan/dang-ky.php"><small>Đăng ký.</small></a></div>   
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</form>