<div class="panel panel-info">
    <div class="panel-heading">Thông tin tài khoản</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="my-input col-sm-5">Tên đăng nhập:</label>
            <?= $_SESSION['user']['ten_tk'] ?>
        </div>
        <div class="form-group">
            <label for="my-input col-sm-5">Họ tên: </label>
            <?= $_SESSION['user']['ho_ten'] ?>
        </div>
        <div class="form-group">
            <label for="my-input col-sm-5">Số điện thoại: </label>
            <?= $_SESSION['user']['sdt'] ?>
        </div>
        <div class="form-group">
            <label for="my-input col-sm-5">Email: </label>
            <?= $_SESSION['user']['email'] ?>
        </div>
    </div>
</div>