<?php
    $kn = mysqli_connect("localhost", "root", "toilarain", "cvcl");
    if(!$kn)
    {
        echo "khong the ket noi";
    }
    mysqli_query($kn,"set names utf8");

    $time = date('Y/m/d');

        //tim tat ca cv
    $query = "SELECT * FROM cv";
    $querytcv = mysqli_query($kn, $query);
    $tccv = mysqli_num_rows($querytcv);

    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $query2 = "SELECT * FROM cv WHERE Time_add2 = '".$time."'";
    $querycvn = mysqli_query($kn, $query2);
    $limit = mysqli_num_rows($querycvn);

    // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
    $total_page = ceil($tccv / $limit);

    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }

    // Tìm Start
    $start = ($current_page - 1) * $limit;

    // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
    // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
    $result = mysqli_query($kn, "SELECT * FROM cv ORDER BY Time_add2 DESC LIMIT $start, $limit");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="60">
    <link rel="stylesheet" type="text/css" href="../css/style-staff.css">

    <title>Công Việc</title>

    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/js-staff.js"></script>
</head>
<body>
    <table class="table table-striped" border="2px">
        <thead>
            <tr>
                <th>
                    Mã Công Việc
                </th>

                <th>
                    Tên Khách Hàng
                </th>

                <th>
                    Số Điện Thoại
                </th>

                <th>
                    Email
                </th>

                <th>
                    Yêu Cầu
                </th>

                <th>
                    Hoàn Thành
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            $j=0;

            while($i=mysqli_fetch_array($result)) {
                $i++;
                $j++;
                ?>
                <tr class="<?php echo $j; ?>">
                    <td class="cot">
                        <?php echo $i["id_cv"]; ?>
                    </td>

                    <td class="cot">
                        <?php echo $i["Username"]; ?>
                    </td>

                    <td class="cot">
                        <?php echo $i["phone"]; ?>
                    </td>

                    <td class="cot">
                        <?php echo $i["Mail"]; ?>
                    </td>

                    <td class="cot">
                        <?php echo $i["Quest"]; ?>
                    </td>

                    <td class="cot" style="background-color: white">

                            <?php
                                if($i["status"] == '1') {
                                    ?>
                                    <input type="checkbox" class="complete<?php echo $j; ?>" checked>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <input type="checkbox" class="complete<?php echo $j; ?>"
                                           onclick="doistatus(<?php echo $i["id_cv"]; ?> )">
                                    <script>
                                        $(document).ready(function () {
                                            $('.complete<?php echo $j; ?>   ').click(function () {
                                               $('.<?php echo $j; ?>').addClass("checked-box");
                                            });
                                        });
                                    </script>

                                    <?php

                                }
                            ?>
                    </td>
                </tr>

                <?php

                $a = (time() - strtotime($i["Time_add"]));
                if ($a >= 600)
                {
                    ?>
                    <script>
                        $(document).ready(function () {
                            $('.<?php echo $j; ?>').addClass("warning");
                        });
                    </script>
                    <?php
                }
                if ($i["status"] == '1')
                {
                    ?>
                    <script>
                        $(document).ready(function () {
                            $('.<?php echo $j; ?>').addClass("checked-box");
                        });
                    </script>
                    <?php
                }
                ?>
            <?php
            }



            ?>

        </tbody>
    </table>

    <div class="pagination">
        <?php
        //HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1){
            echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page){
                echo '<span>'.$i.'</span> | ';
            }
            else{
                echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
            }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1){
            echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
        }
        ?>
    </div>




</body>
</html>