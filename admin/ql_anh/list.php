<div class="card">
    <div class="card-header">
        <?php if ($vai_tro == 0) { ?>
            <h3 class="card-title">QUẢN LÝ LOGO</h3>
        <?php } else { ?>
            <h3 class="card-title">QUẢN LÝ BANNER</h3>
        <?php } ?>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 600px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>Mã ảnh</th>
                    <th>Tên ảnh</th>
                    <th>Vai trò</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_anh as $ds) : ?>
                    <tr>
                        <td><?= $ds['ma_anh'] ?></td>
                        <td>
                            <?php if ($ds['vai_tro'] == 0) { ?>
                                <img src="<?=$IMG_URL?>/logo/<?= $ds['anh'] ?>" alt="" width="100px">
                            <?php } else { ?>
                                <img src="../../images/banner/<?= $ds['anh'] ?>" alt="" width="500px">
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($ds['vai_tro'] == 0) { ?>Logo
                        <?php } else { ?>
                            Banner
                        <?php } ?>
                        </td>
                        <td>
                            <?php if ($ds['kich_hoat'] == 1) { ?>đã kích hoạt
                        <?php } else if ($ds['kich_hoat'] == 2) { ?>
                            Đã kích hoạt (*)
                        <?php } else if ($ds['kich_hoat'] == 3) { ?>
                            Đã kích hoạt 
                        <?php } else { ?>
                            chưa kích hoạt
                        <?php } ?>
                        </td>
                        <td>
                            <a href="index.php?btn_edit&ma_anh=<?= $ds['ma_anh'] ?>&vai_tro=<?= $ds['vai_tro'] ?>" class="btn btn-default">Sửa</a>
                            <a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?btn_xoa&ma_anh=<?= $ds['ma_anh'] ?>&vai_tro=<?= $ds['vai_tro'] ?>" class="btn btn-default">xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>