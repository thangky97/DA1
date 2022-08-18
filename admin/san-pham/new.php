<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>THÊM SẢN PHẨM</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Thêm sản phẩm</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<form action="index.php" method="post" enctype="multipart/form-data">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-title">
            <label for="input"><?php
                                if (isset($message)) {
                                  echo "<h6 style='color:red; margin-left: 20px;'>$message</h6>";
                                }
                                ?></label>
          </div>
          <div class="card-header">
            <h3 class="card-title">Sản phẩm</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="input">Mã Sản phẩm</label>
              <input type="text" readonly value="auto number" name="ma_sp" class="form-control">
            </div>
            <div class="form-group">
              <label for="input">Tên sản phẩm</label>
              <input type="text" name="ten_sp" class="form-control">
              <?php if (!empty($errors['ten_sp'])) : ?>
                <p style="color: red;"><?php echo $errors['ten_sp'] ?></p>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="input">Hãng</label>
              <select name="ma_hang" class="form-control">
                <?php foreach ($hang_select_list as $hang) : ?>
                  <option value="<?= $hang['ma_hang'] ?>"><?= $hang['ten_hang'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="input">Giá sản phẩm</label>
              <input type="number" name="gia_sp" class="form-control">
              <?php if (!empty($errors['gia_sp'])) : ?>
                <p style="color: red;"><?php echo $errors['gia_sp'] ?></p>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="input">Giảm giá</label>
              <input type="number" name="giam_gia" class="form-control">
            </div>
            <div class="form-group">
              <label for="my-input">Giới tính</label>
              <div class="form-control">
                <label class="radio-inline"><input name="gioi_tinh" value="0" type="radio" checked> Nam </label>
                <label class="radio-inline"><input name="gioi_tinh" value="1" type="radio"> Nữ </label>
              </div>
            </div>
            <div class="form-group">
              <label for="my-input">Hình ảnh</label>
              <input type="file" class="form-control" name="anh">
              <?php if (!empty($errors['anh'])) : ?>
                <p style="color: red;"><?php echo $errors['anh'] ?></p>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="input">Mùi hương</label>
              <select name="ma_mh" class="form-control">
                <?php foreach ($mh_select_list as $mh) : ?>
                  <option value="<?= $mh['ma_mh'] ?>"><?= $mh['ten_mh'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="input">Dung tích</label>
              <select name="size" class="form-control"> 
                  <option value="50">50 ml</option> 
                  <option value="75">75 ml</option> 
                  <option value="100">100 ml</option> 
                  <option value="150">150 ml</option> 
              </select>
            </div>
            <div class="form-group">
              <label for="input">Số lượt xem</label>
              <input class="form-control" readonly name="so_luot_xem" value="0">
            </div>
            <div class="form-group">
              <label for="input">Ngày nhập</label>
              <input type="date" class="form-control" name="ngay_them"><br>
            </div>
            <div class="form-group">
              <label for="input">Mô tả</label>
              <textarea name="mo_ta" class="form-control" rows="4"></textarea>
              <?php if (!empty($errors['mo_ta'])) : ?>
                <p style="color: red;"><?php echo $errors['mo_ta'] ?></p>
              <?php endif; ?>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
        <a href="index.php" class="btn btn-secondary">danh sách</a>
        <button class="btn btn-success" name="btn_new">Thêm mới</button>
      </div>
    </div>
  </section>
  <!-- /.content -->
</form>