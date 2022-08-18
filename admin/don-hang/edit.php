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
                    "ma_sp": {
                        required: true,
                        maxlength: 15
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
                    "ma_tk": {
                        required: "Bắt buộc nhập username",
                        maxlength: "Hãy nhập tối đa 15 ký tự"
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
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>UPDATE ĐƠN HÀNG</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Update đơn hàng</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<form action="index.php" method="post" enctype="multipart/form-data" id="demoForm">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-title">
                        <label for="my-input">
                            <?php
                            if (isset($message)) {
                                echo "<h6 style='color:red; margin-left: 20px;'>$message</h6>";
                            }
                            ?></label>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Đơn hàng</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="my-input">Mã đơn hàng</label>
                            <input type="text" readonly name="ma_dh" class="form-control" value=" <?= $ma_dh ?>">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Tên khách hàng</label>
                            <input type="text" name="ho_ten" class="form-control" value=" <?= $ho_ten ?>">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Số điện thoại</label>
                            <input type="text" name="sdt" class="form-control" value=" <?= $sdt ?>">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input type="text" name="email" class="form-control" value=" <?= $email ?>">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Địa chỉ</label>
                            <input type="text" name="dia_chi" class="form-control" value=" <?= $dia_chi ?>">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Đơn giá</label>
                            <input type="text" readonly name="don_gia" class="form-control" value=" <?= $don_gia ?>">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Ngày thêm</label>
                            <input type="datetime" readonly name="ngay_them" class="form-control" value="<?= $ngay_them ?>">
                        </div>
                        <div class="form-group">
                            <label for="input">Ghi chú</label>
                            <textarea name="ghi_chu" class="form-control" rows="4"><?= $ghi_chu ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="my-input">Trạng thái</label>
                            <div class="form-control">
                                <label class="radio-inline"><input <?= !$trang_thai ? 'checked' : '' ?> name="trang_thai" value="0" type="radio" checked> chưa xác nhận </label>
                                <label class="radio-inline"><input <?= $trang_thai ? 'checked' : '' ?> name="trang_thai" value="1" type="radio"> đã xác nhận </label>
                                <label class="radio-inline"><input <?= $trang_thai ? 'checked' : '' ?> name="trang_thai" value="2" type="radio"> đã hoàn thành </label>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <button type="reset" class="btn btn-secondary">Nhập lại</button> 
                <button class="btn btn-success" name="btn_update">Update</button>
            </div>
        </div>
    </section>
    <!-- /.content -->
</form>