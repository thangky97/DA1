<div class="panel panel-default">
    <h4 class="panel-heading">Danh mục</h4>
    <div class="panel-heading">
        <div class="list-group">
            <?php
            foreach ($ds_hang as $hang) {
                extract($hang);
                $link = "../san-pham/loc-hang.php?ma_hang=" . $ma_hang;
                echo "<a href='" . $link . "' class='list-group-item'>" . $ten_hang . "</a>";
            } ?>
        </div>
    </div>

</div>
