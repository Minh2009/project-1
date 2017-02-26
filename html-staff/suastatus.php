<?php

    $kn2 = mysqli_connect("localhost", "root", "toilarain", "cvcl");

    if(!$kn2) {
        echo "khong ket noi dc";
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $cv = $_POST["cvl"];
        echo var_dump($cv);

        $query = "UPDATE cv SET status = '1' WHERE id_cv = '" . $cv . "'";

        $add = mysqli_query($kn2, $query);

        if (!$add) {
            echo "khong add dc";
        }
    }

?>

