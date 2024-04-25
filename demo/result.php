<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>G排 預訂快取 !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link
        rel="stylesheet" type="text/css">
    <!--插入demo.css
    <link rel="stylesheet" href="demo.css">這ㄍ會讀取堵塞 沒辦法及時更新 改用下面那ㄍ來強制瀏覽器每次重新載入
    <link rel="stylesheet" type="text/css" href="demo.css?version=&lt;?php echo time(); ?&gt;">-->
    <!--<body style="width:1700px;overflow:hidden;">-->
    <link rel="stylesheet" href="demo.css">
</head>

<body>
    <div id="mainWrapper">
        <header>
            <div id="logo">
            </div>
            <div id="headerLinks"><a href="#" title="Login/Register"></a><a href="#" title="Cart"></a>
            </div>
        </header>
        <section id="offer">
            <h2>&nbsp</h2>
            <p>&nbsp</p>
        </section>
        <div id="content">
            <section class="sidebar">
                <!--左側購物車-->
                <div id="menubar">
                    <nav class="menu">
                        <h1>訂單編號</h1>
                        <form action="result.php" method="POST">
                        <input type="text" name="s_id" required="required" style="width:100% ;height:25px;"> 
                        </br>
                        </br>
                        <hr>    
                        
                    </nav>
                    
                        <input type="submit" value="查詢" style="width:100% ;height:35px;" class="checkout">
                    </form>
                    </br>
                    </br>
                    <form action="demo.php">
                        <input type="submit" value="返回" style="width:100% ;height:35px;" class="checkout">
                    </form>
                </div>
            </section>
<!-------------------------------------------------------------------------------------------------------->
<section class="mainContent">
    <?php
        include("config.php");
        $id = $_POST["s_id"];
        $sql_query = "SELECT * FROM `client` WHERE `id` = '{$id}'" ;
        $result = $pdo->query($sql_query); 
        echo '<table border="1">';
        
        echo '<tr>';
        echo '<th>姓名</th>';
        echo '<th>手機</th>';
        echo '<th>信箱</th>';
        echo '<th>備註</th>';
        echo '<th>金額</th>';
        echo '<th>取餐時間</th>';
        echo '<th>下單時間</th>';
        echo '</tr>';
        
        foreach($result as $row){
            echo '<tr>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['phone'].'</td>';
            echo '<td>'.$row['mail'].'</td>';
            echo '<td>'.$row['ps'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td>'.$row['taketime'].'</td>';
            echo '<td>'.$row['ordertime'].'</td>';
            echo '</tr>';
            break; 
        }
        $result = $pdo->query($sql_query); 
        echo '<tr>';
        echo '<td colspan=5>品項</td>';
        echo '<td colspan=2>數量</td>';
        echo '</tr>';
        foreach($result as $row){
            echo '<tr>';
            echo '<td colspan=5>'.$row['food'].'</td>';
            echo '<td colspan=2>'.$row['num'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
    ?>
</section>
<!-------------------------------------------------------------------------------------------------------->
        <footer>
            <div>
                <p>- Produced in 2022 -</p>
            </div>
            <div>
                <!--<img alt="sample"
                    src="images/map.JPG">-->
            </div>
        </footer>
    </div>
</body>

</html>
