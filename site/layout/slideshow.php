<div class="container" style="padding-bottom: 15px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php
      require_once "../../dao/ql_anh.php";
      $kich_hoat = 2;
      $anh = anh_select_by_kh2($kich_hoat);
      foreach ($anh as $ds) : ?>
        <div class="item active">
          <img src="../../images/banner/<?= $ds['anh'] ?>" alt="Chicago" style="width:100%; height: 550px;">
        </div>
      <?php endforeach; ?>
      <?php
      require_once "../../dao/ql_anh.php";
      $kich_hoat = 1;
      $anh = anh_select_by_kh2($kich_hoat);
      foreach ($anh as $ds) : ?>
        <div class="item">
          <img src="../../images/banner/<?= $ds['anh'] ?>" alt="Chicago" style="width:100%; height: 550px;">
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>