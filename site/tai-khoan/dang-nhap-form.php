<form action="../tai-khoan/dang-nhap.php" method="post">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <b>Đăng nhập</b>
            </div>
            <div class="card-body">
                <form action="../../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="ten_tk" class="form-control" placeholder="Tên đăng nhập" value="<?= $ten_tk ?>">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="mat_khau" class="form-control" placeholder="Password" value="<?= $mat_khau ?>">
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <input name="ghi_nho" type="checkbox" checked> Ghi nhớ tài khoản?
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <button type="submit" name="btn_login" class="btn btn-primary btn-block">Đăng nhập</button>
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