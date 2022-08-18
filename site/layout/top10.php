<div class="panel panel-default">
    <h4 class="panel-heading">Top 10 yêu thích</h4>
    <div class="panel-body nn-panel-body container-fluid">
        <?php
        require_once "../../dao/san-pham.php";
        $hh_arr = sp_select_top10();
        foreach ($hh_arr as $sp) {
            extract($sp);
        ?>
            <div class="row" style="margin-bottom: 20px !important;">
                <div class="col-xs-3">
                    <a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>">
                        <img src="../../images/<?= $anh ?>" alt="" width="50px">
                    </a>
                </div>
                <div class="col-xs-7"><a href="../san-pham/chi-tiet.php?ma_sp=<?= $ma_sp ?>"><?= $ten_sp?></a></div>
            </div>
        <?php }; ?>
    </div>
</div>