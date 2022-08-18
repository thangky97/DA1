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
                    "ten_hang": {
                        required: true,
                        minlength: 2
                    }
                },
                messages: {
                    "ten_hang": {
                        required: "Bắt buộc nhập tên hãng",
                        minlength: "Hãy nhập ít nhất 8 ký tự"
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
                <h1>THÊM HÃNG</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Thêm mới hãng</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<form action="index.php" method="post" id="demoForm">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-title">
                        <label for="input"><?php
                                            if (isset($message)) {
                                                echo "<h6 style='color:red; margin-left: 20px;'>$message</h6>";
                                            }
                                            ?></label>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Hãng</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="input">Mã hãng</label>
                            <input type="text" id="ma_hang"  readonly value="auto number" name="ma_hang" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="input">Tên hãng</label>
                            <input type="text" id="ten_hang" name="ten_hang" class="form-control">
                            <?php if (!empty($errors['ten_hang'])) : ?>
                                <p style="color: red;"><?php echo $errors['ten_hang'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
                <a href="index.php?btn_list-hang" class="btn btn-secondary">danh sách</a>
                <button class="btn btn-success" name="btn_new-hang">Thêm mới</button>
            </div>
        </div>
    </section>
    <!-- /.content -->
</form>