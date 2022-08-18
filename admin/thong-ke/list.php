<div class="card-header">
    <h3 class="card-title">THỐNG KÊ</h3>
</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php foreach ($total_bl as $total) {
                                extract($total) ?>
                                <h3><?= $total ?></h3>
                            <?php }; ?>
                        </h3>

                        <p>Số bình luận</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="../../admin/binh-luan/index.php" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                        <h3><?php foreach ($total_dh as $total) {
                                extract($total) ?>
                                <h3><?= $total ?></h3>
                            <?php }; ?>
                        </h3>

                        <p>Đơn hàng hoàn thành</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="../don-hang/index.php?btn_list&trang_thai=2" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach ($total_tk as $total) {
                                extract($total) ?>
                                <h3><?= $total ?></h3>
                            <?php }; ?>
                        </h3>

                        <p>Người dùng</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="../../admin/tai-khoan/index.php" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php foreach ($total_lh as $total) {
                                extract($total) ?>
                                <h3><?= $total ?></h3>
                            <?php }; ?>
                        </h3>

                        <p>Số lượng liên hệ</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="../../admin/lien-he/index.php" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
</section>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DANH SÁCH DOANH THU THEO THÁNG</h3>
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
                    <th>Tháng</th>
                    <th>Số lượng đơn hàng</th>
                    <th>Tổng doanh thu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ds_tk as $ds) {
                    extract($ds);
                ?>
                    <tr>
                        <td><input type="checkbox" name="ma_dh" value="<?= $ma_dh ?>"></td>
                        <td><?= $ngay_them ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= number_format($ds['total'], 0, '', ',') ?> VND</td>
                    </tr>
                <?php }; ?>
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>