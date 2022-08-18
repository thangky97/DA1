<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="container">
  <div class="col-md-1">
    <button class="btn btn-primary-success dropdown-toggle" type="button" data-toggle="dropdown">Mùi hương
      <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><?php
          require_once '../../dao/danh-muc.php';
          $ds_mh = mh_select_all();
          foreach ($ds_mh as $mui_huong) {
            extract($mui_huong);
            $link = "../san-pham/loc-hang.php?ma_mh=" . $ma_mh;
            echo "<a href='" . $link . "' class='list-group-item'>" . $ten_mh . "</a>";
          } ?>
      </li>
    </ul>
  </div>
  <div class="col-md-1">
    <button class="btn btn-primary-success dropdown-toggle" type="button" data-toggle="dropdown">Dung tích
      <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li>
        <a href="../san-pham/loc-hang.php?size=50">50 ml</a>
        <a href="../san-pham/loc-hang.php?size=75">75 ml </a>
        <a href="../san-pham/loc-hang.php?size=100">100 ml </a>
        <a href="../san-pham/loc-hang.php?size=150">150 ml </a>
      </li>
    </ul>

  </div>
  <div class="col-md-1">
    <button class="btn btn-primary-success dropdown-toggle" type="button" data-toggle="dropdown">Giới tính
      <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li>
        <a href="../san-pham/loc-hang.php?gioi_tinh=1">Nước hoa nữ</a>
        <a href="../san-pham/loc-hang.php?gioi_tinh=0">Nước hoa nam</a>
      </li>
    </ul>

  </div> 

</div>



<script>
  $(document).ready(function() {
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".dropdown-menu li").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

<style>
  /* Style the input field */
  #myInput {
    padding: 20px;
    margin-top: -6px;
    border: 0;
    border-radius: 0;
    background: #f1f1f1;
  }
</style>