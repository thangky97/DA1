<div class="container wrapper">
    <div style="margin: 30px 0;">
        <div class="row cart-body">
            <form action="cart.php?bill" class="container" method="post" style="margin-top: 15px;">
                <div class="col-sm-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Thông tin nhận hàng</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="my-input">Họ tên</label>
                                <input type="text" class="form-control" name="ho_ten" id="" placeholder="Họ tên">
                                <?php if (!empty($errors['ho_ten'])) : ?>
                                    <p style="color: red;"><?php echo $errors['ho_ten'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Số điện thoại</label>
                                <input type="text" class="form-control" name="sdt" id="" placeholder="Số điện thoại">
                                <?php if (!empty($errors['sdt'])) : ?>
                                    <p style="color: red;"><?php echo $errors['sdt'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Địa chỉ</label>
                                <input type="text" class="form-control" name="dia_chi" id="" placeholder="Địa chỉ">
                                <?php if (!empty($errors['dia_chi'])) : ?>
                                    <p style="color: red;"><?php echo $errors['dia_chi'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Email</label>
                                <input type="text" class="form-control" name="email" id="" placeholder="Email">
                                <?php if (!empty($errors['email'])) : ?>
                                    <p style="color: red;"><?php echo $errors['email'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Ghi chú</label>
                                <textarea class="form-control" name="ghi_chu" id="" cols="20" rows="5" placeholder="Ghi chú"></textarea>
                                <?php if (!empty($errors['ghi_chu'])) : ?>
                                    <p style="color: red;"><?php echo $errors['ghi_chu'] ?></p>
                                <?php endif; ?>
                            </div>
                            <input type="hidden" name="trang_thai" value="0">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Sản phẩm bạn muốn mua <div class="pull-right"><small><a class="afix-1" href="cart.php">Quay lại giỏ hàng</a></small></div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover ">
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Xóa</th>
                                </tr>
                                <?php don_hang(); ?>
                            </table>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-12" style="margin-top: 5px;">
                                    <strong>Tổng tiền hàng:</strong>
                                    <div class="pull-right"><span><?= number_format(tong())  ?> VND</span></div>
                                </div>
                                <div class="col-xs-12" style="margin-top: 5px;">
                                    <strong>Phí vận chuyển:</strong>
                                    <div class="pull-right"><span>
                                            <?php $ship = 0; ?>
                                            <?= number_format($ship) ?> VND
                                        </span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <hr />
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12" style="margin-top: 5px;">
                                    <strong>Tổng thanh toán:</strong>
                                    <div class="pull-right"><span>
                                            <?php $tong = tong() + $ship ?>
                                            <?= number_format($tong) ?> VND
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <?php
                if (!isset($_SESSION['user'])) { ?>
                    <div class="panel panel-default">
                        <h5 class="panel-heading" style="color: red;">Đăng nhập để thanh toán!</h5>
                    </div>
                <?php } else { ?>
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-6 text-right">
                                    <a href="../trang-chinh/index.php"><input class="btn btn-success" type="button" value="Tiếp tục mua"></a> 
                                    <input type="submit" class="btn btn-success" value="Đặt hàng" name="yes">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </form>
        </div>
    </div>
