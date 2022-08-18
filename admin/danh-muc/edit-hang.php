<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>UPDATE HÃNG</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Update hãng</li>
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
                            <input type="text" readonly name="ma_hang" class="form-control" value="<?= $ma_hang ?>">
                        </div>
                        <div class="form-group">
                            <label for="input">Tên hãng</label>
                            <input type="text" name="ten_hang" class="form-control" value="<?= $ten_hang ?>">
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
                <button class="btn btn-success" name="btn_update-hang">Update</button>
            </div>
        </div>
    </section>
    <!-- /.content -->
</form>