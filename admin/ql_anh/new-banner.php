 <section class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1>THÊM BANNER</h1>
             </div>
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active">Thêm Banner</li>
                 </ol>
             </div>
         </div>
     </div><!-- /.container-fluid -->
 </section>
 <!-- Main content -->
 <form action="index.php" method="post" id="demoForm" enctype="multipart/form-data" >
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
                         <h3 class="card-title">Banner</h3>
                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                 <i class="fas fa-minus"></i>
                             </button>
                         </div>
                     </div>
                     <div class="card-body">
                         <div class="form-group">
                             <label for="input">Mã ảnh</label>
                             <input type="text" id="ma_anh" readonly value="auto number" name="ma_anh" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="my-input">Hình ảnh</label>
                             <input type="file" class="form-control" name="anh">
                             <?php if (!empty($errors['anh'])) : ?>
                                 <p style="color: red;"><?php echo $errors['anh'] ?></p>
                             <?php endif; ?>
                         </div>
                         <input type="hidden" name="vai_tro" value="1">
                         <input type="hidden" name="kich_hoat" value="0">
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <button type="reset" class="btn btn-secondary">Nhập lại</button>
                 <a href="index.php?vai_tro=1" class="btn btn-secondary">danh sách</a>
                 <button class="btn btn-success" name="btn_new-banner">Thêm mới</button>
             </div>
         </div>
     </section>
     <!-- /.content -->
 </form>