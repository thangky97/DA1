<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <?php if ($vai_tro == 0) { ?>
                    <h3 class="card-title">UPDATE LOGO</h3>
                <?php } else { ?>
                    <h3 class="card-title">UPDATE BANNER</h3>
                <?php } ?>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Update</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<form action="index.php" method="post" id="demoForm" enctype="multipart/form-data">
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
                        <h3 class="card-title">UPDATE</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="input">Mã ảnh</label>
                            <input type="text" id="ma_anh" readonly name="ma_anh" class="form-control" value="<?= $ma_anh ?>">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Hình ảnh</label>
                            <input type="hidden" name="anh" value="<?= $anh ?>">
                            <input type="file" class="form-control" name="anh" value="<?= $anh ?>"> 
                        </div>
                        <div class="form-group">
                            <label for="my-input">Vai trò</label>
                            <?php if ($vai_tro == 0) { ?>
                                <input type="text" readonly name="vai_tro" class="form-control" value="Logo">
                            <?php } else { ?>
                                <input type="text" readonly name="vai_tro" class="form-control" value="Banner">
                            <?php } ?>
                        </div>
                        <?php if ($vai_tro == 0) { ?>
                            <div class="form-group">
                                <label for="my-input">Kích hoạt</label>
                                <div class="form-control">
                                    <label class="radio-inline"><input <?= $kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="0" type="radio" checked> Không </label>
                                    <label class="radio-inline"><input <?= !$kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="3" type="radio"> Kích hoạt </label> 
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="form-group">
                                <label for="my-input">Kích hoạt</label>
                                <div class="form-control">
                                    <label class="radio-inline"><input <?= $kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="0" type="radio" checked> Không </label>
                                    <label class="radio-inline"><input <?= !$kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="1" type="radio"> Kích hoạt </label>
                                    <label class="radio-inline"><input <?= $kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="2" type="radio"> Kích hoạt (*)</label>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
                <a href="index.php?vai_tro=1" class="btn btn-secondary">danh sách</a>
                <?php if ($vai_tro == 0) { ?>
                    <button class="btn btn-success" name="btn_update">Update</button>
                <?php } else { ?>
                    <button class="btn btn-success" name="btn_update1">Update</button>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- /.content -->
</form>