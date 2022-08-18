<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>THÊM MÙI HƯƠNG</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Thêm mới mùi hương</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<form action="index.php" method="post">
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
                        <h3 class="card-title">Mùi hương</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="input">Mã mùi hương</label>
                            <input type="text" readonly value="auto number" name="ma_mh" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="input">Tên mùi hương</label>
                            <input type="text" name="ten_mh" class="form-control">
                            <?php if (!empty($errors['ten_mh'])) : ?>
                                <p style="color: red;"><?php echo $errors['ten_mh'] ?></p>
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
                <a href="index.php?btn_list-mh" class="btn btn-secondary">danh sách</a>
                <button class="btn btn-success" name="btn_new-mh">Thêm mới</button>
            </div>
        </div>
    </section>
    <!-- /.content -->
</form>