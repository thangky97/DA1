<div class="card">
    <div class="card-header">
        <?php if ($trang_thai == 0) { ?>
            <h3 class="card-title">DANH SÁCH ĐƠN HÀNG CHƯA XÁC NHẬN</h3>
        <?php } else if ($trang_thai == 1) { ?>
            <h3 class="card-title">DANH SÁCH ĐƠN HÀNG ĐÃ XÁC NHẬN</h3>
        <?php } else { ?>
            <h3 class="card-title">DANH SÁCH ĐƠN HÀNG ĐÃ HOÀN THÀNH</h3>
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
                    <th>Mã đơn hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Đơn giá</th>
                    <th>Ngày thêm</th>
                    <th>Ghi chú</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_dh as $ds) : ?>
                    <tr>
                        <td><?= $ds['ma_dh'] ?></td>
                        <td><?= $ds['ho_ten'] ?></td>
                        <td><?= $ds['sdt'] ?></td>
                        <td><?= $ds['email'] ?></td>
                        <td><?= $ds['dia_chi'] ?></td>
                        <td><?= number_format($ds['don_gia']) ?> đ</td>
                        <td><?= $ds['ngay_them'] ?></td>
                        <td><?= $ds['ghi_chu'] ?></td>
                        <td>
                            <?php if ($ds['trang_thai'] == 0) { ?>Chưa xác nhận
                        <?php } else if ($ds['trang_thai'] == 1) { ?>
                            Đã xác nhận
                        <?php } else { ?>
                            Đã hoàn thành
                        <?php } ?>
                        </td>
                        <td>
                            <a href="index.php?btn_edit&ma_dh=<?= $ds['ma_dh'] ?>" class="btn btn-default">Sửa</a>
                            <a href="index.php?ma_dh=<?= $ds['ma_dh'] ?>" class="btn btn-default">Chi tiết</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>