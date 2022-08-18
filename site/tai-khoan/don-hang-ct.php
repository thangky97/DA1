<div class="card-body table-retkonsive p-0" style="height: 550px;">
    <table class="table table-head-fixed text-nowrap">
        <tr>
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>mã đơn hàng</th>
        </tr>
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
    </table>
</div>