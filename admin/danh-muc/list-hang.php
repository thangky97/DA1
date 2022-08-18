<div class="card">
    <div class="card-header">
        <h3 class="card-title">DANH SÁCH HÃNG</h3>
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
                    <th>ID</th>
                    <th>HÃNG</th>
                    <th></th>
                    <th></th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_hang as $ds) : ?>
                    <tr>
                        <td><input type="checkbox" name="ma_hang" value="<?= $ds['ma_hang'] ?>"></td>
                        <td><?= $ds['ma_hang'] ?></td>
                        <td><?= $ds['ten_hang'] ?></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="index.php?btn_edit-hang&ma_hang=<?= $ds['ma_hang'] ?>" class="btn btn-default">Sửa</a>
                            <a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?btn_xoa-hang&ma_hang=<?= $ds['ma_hang'] ?>" class="btn btn-default">xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>