<div class="card">
    <div class="card-header">
        <h3 class="card-title">CHI TIẾT BÌNH LUẬN : Sản phẩm <?= $ds_bl[0]['ten_sp'] ?></h3>
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
    <div class="card-body table-responsive p-0" style="height: 540px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
            <tr>
                        <th></th>
                        <th>NỘI DUNG</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th>NGƯỜI BÌNH LUẬN</th>
                        <th></th>
                    </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_bl as $ds) : ?>
                    <tr>
                        <td><input type="checkbox" name="ma_bl[]" value="<?= $ds['ma_bl'] ?>"></td>
                        <td><?= $ds['noi_dung_bl'] ?></td>
                        <td><?= $ds['ngay_bl'] ?></td>
                        <td><?= $ds['ten_tk'] ?></td>
                        <td>
                            <a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?ma_sp=<?= $ma_sp ?>&btn_xoa&ma_bl=<?= $ds['ma_bl'] ?>" class="btn btn-default">xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>