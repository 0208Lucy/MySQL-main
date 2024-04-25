<?php
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    include("config.php");
    $sql_query = "TRUNCATE TABLE `demo`.`order`";
    $result = $pdo->query($sql_query);
    if($result) {
        echo "<script> {location.href='demo.php'} </script>";
    }
    else {
        echo "<script> {window.alert('失敗');location.href='demo.php'} </script>";
    }
?>