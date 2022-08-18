<div class="card">
    <div class="card-header">
        <h3 class="card-title">DANH SÁCH MÙI HƯƠNG</h3>

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
    <table class="table table-head-fixed text-nowrap ">
            <thead >
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Mùi hương</th>
                    <th></th>
                    <th></th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ds_mh as $ds): ?>
                <tr>
                    <td><input type="checkbox" name="ma_mh" value="<?= $ds['ma_mh'] ?>"></td>
                    <td><?= $ds['ma_mh']?></td>
                    <td><?= $ds['ten_mh']?></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="index.php?btn_edit-mh&ma_mh=<?= $ds['ma_mh'] ?>" class="btn btn-default">Sửa</a>
                        <a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?btn_xoa-mh&ma_mh=<?= $ds['ma_mh'] ?>" class="btn btn-default">xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>