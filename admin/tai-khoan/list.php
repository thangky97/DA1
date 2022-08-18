<div class="card">
    <div class="card-header">
        <h3 class="card-title">DANH TÀI KHOẢN</h3>
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
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>TÊN TÀI KHOẢN</th>
                    <th>HỌ TÊN</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>ẢNH</th>
                    <th>EMAIL</th>
                    <th>VAI TRÒ</th>
                    <th>EDIT</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_tk as $ds) : ?>
                    <tr>
                        <td><input type="checkbox" name="ma_tk" value="<?= $ds['ma_tk'] ?>"></td>
                        <td><?= $ds['ma_tk'] ?></td>
                        <td><?= $ds['ten_tk'] ?></td>
                        <td><?= $ds['ho_ten'] ?></td>
                        <td><?= $ds['sdt'] ?></td>
                        <td>
                            <img src="../../images/avatar/<?= $ds['anh'] ?>" alt="" width="100px">
                        </td>
                        <td><?= $ds['email'] ?></td>
                        <td>
                            <?php if($ds['vai_tro'] == 0){ ?>Khách hàng
                            <?php }else if($ds['vai_tro'] == 1){ ?>
                                Nhân viên
                            <?php }else { ?>
                                admin
                            <?php } ?>
                        </td>
                        <td>
                            <a href="index.php?btn_edit&ma_tk=<?= $ds['ma_tk'] ?>" class="btn btn-default">Sửa</a>
                            <a onclick="return confirm('bạn có chắc muốn xóa không?')" href="index.php?btn_xoa&ma_tk=<?= $ds['ma_tk'] ?>" class="btn btn-default">xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>