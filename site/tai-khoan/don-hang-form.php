<div class="card">
    <div class="panel panel-info">
        <div class="panel-heading">Đơn hàng của tôi</div>
        <div class="card-body table-responsive p-0" >
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Đơn giá</th>
                        <th>Trạng thái</th>
                        <th>Chi tiết</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($see_dh as $ds) :
                    ?>
                        <tr>
                            <td><?= $ds['ma_dh'] ?></td>
                            <td><?= $ds['ho_ten'] ?></td>
                            <td><?= $ds['sdt'] ?></td>
                            <td><?= $ds['email'] ?></td>
                            <td><?= $ds['dia_chi'] ?></td>
                            <td><?= number_format($ds['don_gia']) ?> đ</td>
                            <td><?php
                                if ($ds['trang_thai'] == 0) {
                                    echo "Chưa xác nhận";
                                } else if ($ds['trang_thai'] == 1) {
                                    echo "Đã xác nhận";
                                } else {
                                    echo "Đã hoàn thành";
                                }
                                ?>
                            </td>
                            <td>
                            <a href="don-hang.php?ct_dh&ma_dh=<?= $ds['ma_dh'] ?>" class="btn btn-default">Chi tiết</a>
                            </td>
                            <td>
                                <?php if ($ds['trang_thai'] == 0) { ?>
                                    <a onclick="return confirm('bạn có muốn hủy đơn hàng?')" href="don-hang.php?btn_xoa&ma_dh=<?= $ds['ma_dh'] ?>" class="btn btn-default">Hủy đơn hàng</a>
                                <?php } else if ($ds['trang_thai'] == 1) {
                                } else {
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>