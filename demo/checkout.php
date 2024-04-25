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
                        <h1>購物車</h1>
                        <?php
                            include("config.php");
                            $price_105 = 0;
                            $price_110 = 0;
                            $price_120 = 0;
                            $price_70 = 0;
                            $price_60 = 0;
                            $price_all = 0;
                            $sql_query = "SELECT * FROM `order`" ;
                            $result = $pdo->query($sql_query); 
                            /*echo像是print =>表格*/
                            echo  '<ul>';
                            foreach($result as $row){
                                switch ($row['name']){
                                    case '脆皮厚切雞排':
                                        $price_105 += $row['num'];
                                        break;
                                    case '檸檬厚切雞排':
                                        $price_105 += $row['num'];
                                        break;
                                    case '黃金起司豬排':
                                        $price_110 += $row['num'];
                                        break;
                                    case '黃金香酥雞塊':                                    
                                        $price_70 += $row['num'];
                                        break;
                                    case '現炸酥脆脆薯':                                    
                                        $price_60 += $row['num'];
                                        break;
                                    case '邪惡酥炸圈圈':                                    
                                        $price_60 += $row['num'];
                                        break;
                                    case '美式酥脆雞腿':                                    
                                        $price_70 += $row['num'];
                                        break;
                                    case '黃金地瓜薯條':                                    
                                        $price_60 += $row['num'];
                                        break;
                                    case '炸深海大魷魚':                                    
                                        $price_120 += $row['num'];
                                        break;
                                }
                                echo $row['name'];
                                /* &nbsp=空白 */
                                echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                                echo $row['num'];
                                echo '</br>' ;
                            }
                            /*總計 金額*/
                            $price_all = ($price_105 * 105) + ($price_110 * 110) + ($price_70 * 70) + ($price_60 * 60) + ($price_120 * 120);
                            echo '</br>' ;
                            echo '</br>' ;
                            echo '</ul>';
                            echo '<hr>';
                            echo '總計 金額';
                            echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                            echo $price_all;  
                            setcookie('price_all',$price_all) 
                        ?>
                    </nav>
                    <form action="demo.php">
                        <input type="submit" value="返回" style="width:100% ;height:35px;" class="checkout">
                    </form>
                </div>
            </section>
<!-------------------------------------------------------------------------------------------------------->
<form action="back.php" method="POST">
<section class="mainContent">

    <label>姓名：</label>
    <input type="text" name="name" required="required"> 
    </br>

    </br>
    <label>電話：</label>
    <input type="text" name="phone" required="required"> 
    </br>

    </br>
    <label>信箱：</label>
    <input type="text" name="mail" required="required">
    </br>

    </br>
    <label>備註：</label>
    <input type="text" name="ps"> 
    </br>

    </br>
    <label>預計取餐時間：</label>
    <input type="date" name="time" required="required"> 
    </br>

    </br>
    <input type="submit" value="確定" style="width:20% ;height:25px;" >
    </br>
<!--<
</br>

</br>
<label>口味選擇</label>
</br>
</br>
<label>辣度 ：</label>
<select>
    <option>不辣</option>
    <option>小辣</option>
    <option>中辣</option>
    <option>大辣</option>
</select>
</br>

</br>
<label>雞排切不切 ：</label>
<input type="radio" name="gender" id="yes" value="yes">
<label for="yes">切</label>
<input type="radio" name="gender" id="no" value="no">
<label for="no">不切</label>
>-->

</section>
</form>
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
