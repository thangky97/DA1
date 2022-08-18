<?php
function show()
{
    $ttgh="";
    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
        if (sizeof($_SESSION['cart']) > 0) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                $tt = $_SESSION['cart'][$i][2] * $_SESSION['cart'][$i][3];
                $tong += $tt;
                $ttgh.= '<tr>
                        <td>' . ($i + 1) . '</td>
                        <td ><img src="../../images/' . $_SESSION['cart'][$i][0] . '" alt="" width="100px"></td>
                        <td>' . $_SESSION['cart'][$i][1] . '</td>
                        <td>' . number_format($_SESSION['cart'][$i][2]) . '</td>
                        <td>' . $_SESSION['cart'][$i][3] . '</td>
                        <td>
                            <div>' .number_format($tt)   . '</div>
                        </td>
                        <td>
                        <a href="cart.php?delid=' . $i . '"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
            }
            $ttgh.= '<tr>
                    <th colspan="5">Tổng tiền hàng</th>
                    <th>
                        <div>' .number_format($tong)  . ' VNĐ</div> 
                    </th>

                </tr>';
        }
    }
    return $ttgh;
}
function tong(){
    $tong = 0;
    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
        if (sizeof($_SESSION['cart']) > 0) {
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                $tt = $_SESSION['cart'][$i][2] * $_SESSION['cart'][$i][3];
                $tong += $tt;
            }
        }
    }
    return $tong;
}
function don_hang()
{
    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
        if (sizeof($_SESSION['cart']) > 0) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                $tt = $_SESSION['cart'][$i][2] * $_SESSION['cart'][$i][3];
                $tong += $tt;
                echo '<tr>
                        <td>' . ($i + 1) . '</td>
                        <td ><img src="../../images/' . $_SESSION['cart'][$i][0] . '" alt="" width="60px"></td>
                        <td>' . $_SESSION['cart'][$i][1] . '</td>
                        <td>' . number_format($_SESSION['cart'][$i][2]) . '</td>
                        <td>' . $_SESSION['cart'][$i][3] . '</td>
                        <td>
                            <div>' .number_format($tt)   . '</div>
                        </td>
                        <td>
                        <a href="cart.php?delid=' . $i . '"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
            }
        } else {
            echo "Giỏ hàng rỗng!";
        }
    }
}
