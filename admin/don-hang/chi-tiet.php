<div class="card">
    <div class="card-header">
        <h3 class="card-title">CHI TIẾT ĐƠN HÀNG</h3>
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
    <div class="card-body table-retkonsive p-0">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>Mã đơn hàng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ct_dh as $ds) : ?>
                    <tr>
                        <td><?= $ds['ma_ct'] ?></td>
                        <td><?= $ds['ma_sp'] ?></td>
                        <td><?= $ds['ten_sp'] ?></td>
                        <td>
                            <img src="../../images/<?= $ds['anh'] ?>" alt="" width="150px">
                        </td>
                        <td><?= number_format($ds['gia_sp']) ?> đ</td>
                        <td><?= $ds['so_luong']  ?> </td>
                        <td><?= number_format($ds['thanh_tien']) ?> đ</td>
                        <td><?= $ds['ma_dh'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>