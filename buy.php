<?php
    include("config.php");
    $name = $_POST["button"];
    /*抓demo.php裡面ㄉnum*/
    $num =  $_POST["num"];
    $sql_query= "SELECT  * FROM `order` WHERE `name` = '{$name}'";
    $result = $pdo->query($sql_query); 
    foreach($result as $row){
        $old_num = $row["num"];
    }
    if(empty($row[0])) {
        $sql_query= "INSERT INTO `order`(`name`, `num`) VALUES ('{$name}', {$num})";
        $result = $pdo->query($sql_query); 
        if($result) {
            echo "<script> {location.href='demo.php'} </script>";
        }
        else {
            echo "<script> {window.alert('失敗');location.href='demo.php'} </script>";
        }
    }
    else{
        $sql_query= "UPDATE `order` SET `num`={$num} + {$old_num} WHERE `name` = '{$name}'";
        $result = $pdo->query($sql_query); 
        if($result) {
            echo "<script> {location.href='demo.php'} </script>";
        }
        else {
            echo "<script> {window.alert('失敗');location.href='demo.php'} </script>";
        }
    }
?>
