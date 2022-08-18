<div class="panel panel-info">
    <div class="panel-heading"> Đổi mật khẩu </div>
    <?php
    if (isset($MESSS)) {
        echo "<h5 style='color: red;'>$MESSS</h5>";
    }
    ?>
    <form action="doi-mk.php" method="post" style="margin: 10px;">
        <input type="hidden" name="ma_tk" value="<?= $_SESSION['user']['ma_tk'] ?>">
        <div class="form-group">
            <label for="my-input">Tên đăng nhập</label>
            <input name="ten_tk" readonly class="form-control" value="<?= $_SESSION['user']['ten_tk'] ?>">
        </div>
        <div class="form-group">
            <label for="my-input">Mật khẩu hiện tại</label>
            <input name="mat_khau" type="password" class="form-control">
            <?php if (!empty($errors['mat_khau'])) : ?>
                <p style="color: red;"><?php echo $errors['mat_khau'] ?></p>
            <?php endif; ?>
            <?php
            if (isset($MES)) {
                echo "<p style='color: red;'> $MES </p>";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="my-input">Mật khẩu mới</label>
            <input name="mat_khau2" type="password" class="form-control">
            <?php if (!empty($errors['mat_khau2'])) : ?>
                <p style="color: red;"><?php echo $errors['mat_khau2'] ?></p>
            <?php endif; ?>
            <?php
            if (isset($MESS)) {
                echo "<p style='color: red;'> $MESS </p>";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="my-input">Nhập lại mật khẩu mới</label>
            <input name="mat_khau3" type="password" class="form-control">
            <?php if (!empty($errors['mat_khau3'])) : ?>
                <p style="color: red;"><?php echo $errors['mat_khau3'] ?></p>
            <?php endif; ?>
            <?php
            if (isset($MESS)) {
                echo "<p style='color: red;'> $MESS </p>";
            }
            ?>
        </div>
        <div class="form-group">
            <button name="btn_change" class="btn btn-default">Đổi mật khẩu</button>
        </div>
    </form>
</div>