<div class="card">
    <div class="card-header">
        <h3 class="card-title">DANH LIÊN HỆ</h3>
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
    <div class="card-body table-retkonsive p-0" style="height: 600px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>TÊN KHÁCH HÀNG</th>
                    <th>EMAIL</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>TIÊU ĐỀ</th>
                    <th>NỘI DUNG</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_lh as $ds) : ?>
                    <tr>
                        <td><input type="checkbox" name="ma_lh" value="<?= $ds['ma_lh'] ?>"></td>
                        <td><?= $ds['ma_lh'] ?></td>
                        <td><?= $ds['ten_kh'] ?></td>
                        <td><?= $ds['email'] ?></td>
                        <td><?= $ds['sdt'] ?></td>
                        <td><?= $ds['tieu_de'] ?></td>
                        <td><?= $ds['noi_dung'] ?></td>
                        <td>
                            <a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?btn_xoa&ma_lh=<?= $ds['ma_lh'] ?>" class="btn btn-default">xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <!-- <tfoot>
                    <tr>
                        <td colspan="6">
                            <button id="check-all" type="button" class="btn btn-default">Chọn tất cả</button>
                            <button id="clear-all" type="button" class="btn btn-default">Bỏ chọn tất cả</button>
                        </td>
                    </tr>
                </tfoot> -->
        </table>
    </div>
    <!-- /.card-body -->
</div>