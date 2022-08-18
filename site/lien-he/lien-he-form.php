<div class="panel panel-info" style="margin: 0;">
    <div class="panel-heading">
        <h1>Liên hệ</h1>
    </div>
</div>
<div class="card-title">
    <label for="input"><?php
                        if (isset($message)) {
                            echo "<h4 style='color:red; margin-left: 20px;'>$message</h4>";
                        }
                        ?></label>
</div>
<form action="lien-he.php" method="post">
    
    <div class=" col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading" style="margin-bottom: 50px;">
                <input type="hidden" name="ma_lh">
                <div class="form-group">
                    <label for="my-input">Họ và tên</label>
                    <input type="text" class="form-control" name="ten_kh" id="" placeholder="Họ và tên">
                    <?php if (!empty($errors['ten_kh'])) : ?>
                        <p style="color: red;"><?php echo $errors['ten_kh'] ?></p>
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
                    <label for="my-input">Email</label>
                    <input type="text" class="form-control" name="email" id="" placeholder="Email">
                    <?php if (!empty($errors['email'])) : ?>
                        <p style="color: red;"><?php echo $errors['email'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="my-input">Tiêu đề</label>
                    <input type="text" class="form-control" name="tieu_de" placeholder="Tiêu đề">
                    <?php if (!empty($errors['tieu_de'])) : ?>
                        <p style="color: red;"><?php echo $errors['tieu_de'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="my-input">Nội dung</label>
                    <textarea class="form-control" name="noi_dung" id="" cols="20" rows="5" placeholder="Nội dung"></textarea>
                    <?php if (!empty($errors['noi_dung'])) : ?>
                        <p style="color: red;"><?php echo $errors['noi_dung'] ?></p>
                    <?php endif; ?>
                </div>
                <div>
                    <div class="social-auth-links text-center mt-2 mb-3">
                        <button type="submit" name="gui" class="btn btn-primary btn-block" onclick="ht()">Gửi</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=" col-sm-6 align-self-center" > 
        <label for="my-input">Địa chỉ:</label>
        <h4>Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội, Vietnam</h4>
        <label for="my-input">Điện thoại:</label>
        <h4>0362 002 062</h4>
        <label for="my-input">Email:</label>
        <h4>Hocdtph14606@fpt.edu.vn</h4> 
    </div> 
</form>