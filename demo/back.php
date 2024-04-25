<?php
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    include("config.php");

    
    $price_all = $_COOKIE['price_all'];

    date_default_timezone_set('Asia/Taipei');
    $today = date("Y-m-d H:i:s");
    
    $id = rand(2147483647,1000000000);
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $ps = $_POST["ps"];
    $taketime = $_POST["time"];
    $ordertime = $today;
    $sql_query = "SELECT * FROM `order`" ;
    $result = $pdo->query($sql_query); 
    foreach($result as $row){
        $sql_query = "INSERT INTO`client`(`name`, `phone`, `mail`, `ps`, `taketime`, `ordertime`, `price`, `id`, `food`, `num`) VALUES 
        ('{$name}', '{$phone}','{$mail}','{$ps}','{$taketime}','{$ordertime}','{$price_all}','{$id}','{$row['name']}','{$row['num']}')";
        $result = $pdo->query($sql_query);
        
    }
    $sql_query = "TRUNCATE TABLE `demo`.`order`";
    $result = $pdo->query($sql_query);
    echo "<script> {window.alert('訂單完成!\u000d$today\u000d總金額：$$price_all\u000d訂單編號:$id');location.href='demo.php'} </script>";
?>
