<div class="card">
    <div class="card-header">
        <h3 class="card-title">DANH SÁCH BÌNH LUẬN</h3>
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
                    <th>SẢN PHẨM</th>
                    <th>SỐ BÌNH LUẬN</th>
                    <th>CŨ NHẤT</th>
                    <th>MỚI NHẤT</th>
                    <th>CHI TIẾT</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_bl as $ds) : ?>
                    <tr>
                        <td><?= $ds['ten_sp'] ?></td>
                        <td><?= $ds['so_luong'] ?></td>
                        <td><?= $ds['moi_nhat'] ?></td>
                        <td><?= $ds['cu_nhat'] ?></td>
                        <td>
                            <a href="index.php?btn_ct&ma_sp=<?= $ds['ma_sp'] ?>" class="btn btn-default">Chi tiết</a> 
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>