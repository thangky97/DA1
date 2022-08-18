<head>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
  <script>
    $().ready(function() {
      $("#demoForm").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
          "ma_sp": {
            required: true,
            maxlength: 15
          },
          "ten_tk": {
            required: true,
            maxlength: 30
          },
          "mat_khau": {
            required: true,
            minlength: 2
          },
          "mat_khau2": {
            equalTo: "#mat_khau2",
            minlength: 2
          },
          "sdt": {
            required: true,
            maxlength: 11
          },
          "email": {
            required: true,
            email: true
          },
        },
        messages: {
          "ma_tk": {
            required: "Bắt buộc nhập username",
            maxlength: "Hãy nhập tối đa 15 ký tự"
          },
          "ten_tk": {
            required: "Bắt buộc nhập tên tài khoản",
            maxlength: "Hãy nhập tối đa 30 ký tự"
          },
          "mat_khau": {
            required: "Bắt buộc nhập password",
            minlength: "Hãy nhập ít nhất 2 ký tự"
          },
          "mat_khau2": {
            equalTo: "Hai password phải giống nhau",
            minlength: "Hãy nhập ít nhất 2 ký tự"
          },
          "sdt": {
            required: "Bắt buộc nhập sdt",
            maxlength: "Hãy nhập tối đa 15 ký tự"
          },
          "email": {
            required: "Bắt buộc nhập email",
            email: "Phải nhập đúng định dạng email"
          }
        }
      });
    });
  </script>
</head>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>UPDATE TÀI KHOẢN</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Update tài khoản</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<form action="index.php" method="post" enctype="multipart/form-data" id="demoForm">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-title">
            <label for="my-input">
              <?php
              if (isset($message)) {
                echo "<h6 style='color:red; margin-left: 20px;'>$message</h6>";
              }
              ?></label>
          </div>
          <div class="card-header">
            <h3 class="card-title">Tài khoản</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="my-input">Mã tài khoản</label>
              <input type="text" readonly name="ma_tk" class="form-control" value="<?= $ma_tk ?>">
            </div>
            <div class="form-group">
              <label for="my-input">Tên tài khoản</label>
              <input type="text" name="ten_tk" class="form-control" value="<?= $ten_tk ?>">
            </div>
            <div class="form-group">
              <label for="my-input">Họ tên</label>
              <input type="text" name="ho_ten" class="form-control" value="<?= $ho_ten ?>">
            </div>
            <div class="form-group">
              <label for="my-input">Mật khẩu</label>
              <input type="password" name="mat_khau" class="form-control" value="<?= $mat_khau ?>">
            </div>
            <div class="form-group">
              <label for="my-input">Nhập lại mật khẩu</label>
              <input type="password" name="mat_khau2" class="form-control" value="<?= $mat_khau ?>">
            </div>
            <div class="form-group">
              <label for="my-input">Vai trò</label>
              <div class="form-control">
                <label class="radio-inline"><input <?= !$vai_tro ? 'checked' : '' ?> name="vai_tro" value="0" type="radio" checked> Khách hàng </label>
                <label class="radio-inline"><input <?= $vai_tro ? 'checked' : '' ?> name="vai_tro" value="1" type="radio"> Nhân viên </label>
                <label class="radio-inline"><input <?= $vai_tro ? 'checked' : '' ?> name="vai_tro" value="2" type="radio"> Admin </label>
              </div>
            </div>
            
            <div class="form-group">
              <label for="my-input">Số điện thoại</label>
              <input type="text" name="sdt" class="form-control" value="<?= $sdt ?>">
            </div>
            <div class="form-group">
              <label for="my-input">Hình ảnh</label>
              <input type="hidden" name="anh" value="<?= $anh ?>">
              <input type="file" class="form-control" name="anh" value="<?= $anh ?>"> 
            </div>
            <div class="form-group">
              <label for="my-input">Email</label>
              <input type="email" name="email" class="form-control" value="<?= $email ?>">
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
        <button class="btn btn-success" name="btn_update">Update</button>
      </div>
    </div>
  </section>
  <!-- /.content -->
</form>