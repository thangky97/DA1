<head>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#demoForm").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "ho_ten": {
                        required: true,
                        maxlength: 2
                    },
                    "ten_tk": {
                        required: true,
                        maxlength: 30
                    },
                    "mat_khau": {
                        required: true,
                        minlength: 2
                    },
                    "mat_khau2": {
                        equalTo: "#mat_khau2",
                        minlength: 2
                    },
                    "sdt": {
                        required: true,
                        maxlength: 11
                    },
                    "email": {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    "ho_ten": {
                        required: "Bắt buộc nhập username",
                        maxlength: "Hãy nhập tối đa 2 ký tự"
                    },
                    "ten_tk": {
                        required: "Bắt buộc nhập tên tài khoản",
                        maxlength: "Hãy nhập tối đa 30 ký tự"
                    },
                    "mat_khau": {
                        required: "Bắt buộc nhập password",
                        minlength: "Hãy nhập ít nhất 2 ký tự"
                    },
                    "mat_khau2": {
                        equalTo: "Hai password phải giống nhau",
                        minlength: "Hãy nhập ít nhất 2 ký tự"
                    },
                    "sdt": {
                        required: "Bắt buộc nhập sdt",
                        maxlength: "Hãy nhập tối đa 15 ký tự"
                    },
                    "email": {
                        required: "Bắt buộc nhập email",
                        email: "Phải nhập đúng định dạng email"
                    }
                }
            });
        });
    </script>
</head>
<form action="dang-ky.php" method="post" enctype="multipart/form-data" id="demoForm">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="text-center">
            <?php if (isset($MESS)) {
                echo "<h5>$MESS</h5>";
            }
            ?>
        </div>
        <div class="card-header  text-center">
            <b>Đăng ký tài khoản</b>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <input type="text" name="ten_tk" class="form-control" placeholder="Tên đăng nhập">
                        <?php if (!empty($errors['ten_tk'])) : ?>
                            <p style="color: red;"><?php echo $errors['ten_tk'] ?></p>
                        <?php endif; ?>
                        <?php
                        if (isset($err)) {
                            echo "<p style='color: red;'> $err </p>";
                        }
                        ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="text" name="ho_ten" class="form-control" placeholder="Họ tên">
                        <?php if (!empty($errors['ho_ten'])) : ?>
                            <p style="color: red;"><?php echo $errors['ho_ten'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="my-input"></label>
                        <input type="password" name="mat_khau" class="form-control" placeholder="Mật khẩu">
                        <?php if (!empty($errors['mat_khau'])) : ?>
                            <p style="color: red;"><?php echo $errors['mat_khau'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="my-input"></label>
                        <input type="password" name="mat_khau2" class="form-control" placeholder="Nhập lại mật khẩu">
                        <?php if (!empty($errors['mat_khau2'])) : ?>
                            <p style="color: red;"><?php echo $errors['mat_khau2'] ?></p>
                        <?php endif; ?>
                        <?php if (!empty($err['mat_khau2'])) : ?>
                            <p style="color: red;"><?php echo $err['mat_khau2'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="my-input"></label>
                        <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại">
                        <?php if (!empty($errors['sdt'])) : ?>
                            <p style="color: red;"><?php echo $errors['sdt'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="my-input"></label>
                        <input type="file" class="form-control" name="anh" placeholder="Hình ảnh">
                        <?php if (!empty($errors['anh'])) : ?>
                            <p style="color: red;"><?php echo $errors['anh'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="my-input"></label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <?php if (!empty($errors['email'])) : ?>
                        <p style="color: red;"><?php echo $errors['email'] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="social-auth-links text-center mt-2 mb-3">
                <button type="submit" name="btn_dk" class="btn btn-primary btn-block" onclick="ht()">Đăng ký</button>
            </div>

            <input type="hidden" name="ma_tk">
            <input type="hidden" value="0" name="vai_tro">
            <!-- /.social-auth-links -->

            <div class="form-group">
                <a href="../tai-khoan/quen-mk.php"><small>Quên mật khẩu?</small></a>
                    <div><small>Đã có tài khoản?</small> <a href="../dang-nhap/index.php?dang-nhap"><small>Đăng nhập.</small></a></div>   
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</form>