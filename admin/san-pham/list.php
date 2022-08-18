<div class="card">
    <div class="card-header">
        <h3 class="card-title">DANH SẢN PHẨM</h3>
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
                    <th></th>
                    <th>ID</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÃNG</th>
                    <th>MÙI HƯƠNG</th>
                    <th>GIÁ</th>
                    <th>GIẢM GIÁ</th>
                    <th>GIỚI TÍNH</th>
                    <th>DUNG TÍCH</th>
                    <th>HÌNH ẢNH</th>
                    <th>NGÀY THÊM</th>
                    <th>SỐ LƯỢT XEM</th> 
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_sp as $ds) : ?>
                    <tr>
                        <td><input type="checkbox" name="ma_sp" value="<?= $ds['ma_sp'] ?>"></td>
                        <td><?= $ds['ma_sp'] ?></td>
                        <td><?= $ds['ten_sp'] ?></td>
                        <td><?= $ds['ten_hang'] ?></td>
                        <td><?= $ds['ten_mh'] ?></td>
                        <td><?= number_format($ds['gia_sp'])  ?> đ</td>
                        <td><?= number_format($ds['giam_gia']) ?>%</td>
                        <td>
                            <?php if($ds['gioi_tinh'] == 1){ ?>Nữ
                            <?php }else { ?>
                                Nam
                            <?php } ?>
                        </td>
                        <td><?= $ds['size'] ?> ml</td>
                        <td>
                            <img src="../../images/<?= $ds['anh'] ?>" alt="" width="150px">
                        </td>
                        <td><?= $ds['ngay_them'] ?></td>
                        <td><?= $ds['so_luot_xem'] ?></td>
                        <td>
                            <a href="index.php?btn_edit&ma_sp=<?= $ds['ma_sp'] ?>" class="btn btn-default">Sửa</a>
                            <a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?btn_xoa&ma_sp=<?= $ds['ma_sp'] ?>" class="btn btn-default">xóa</a>
                            <p style="margin-top: 10px;"><a href="../../site/san-pham/chi-tiet.php?ma_sp=<?= $ds['ma_sp'] ?>" class="btn btn-default">chi tiết</a></p>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>