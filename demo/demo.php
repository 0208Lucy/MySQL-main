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
                        <form action="del.php">
                        <input type="submit" value="清空"  style="width:50px ;height:35px;background-color:#D3D3D3;" class="del">
                        </form>
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
                    <form action="checkout.php">
                        <input type="submit" value="結帳"  style="width:100% ;height:35px;" class="checkout">
                    </form>
                    </br>
                    <form action="search.php">
                        <input type="submit" value="訂單查詢" style="width:100% ;height:35px;" class="checkout">
                    </form>
                </div>
            </section>
            <section class="mainContent">
                <div class="productRow">
                    <article class="productInfo">
                        <div><img alt="sample"
                                src="images/G.png">
                        </div>
                        <p class="price">$105</p>
                        <p class="productContent">脆皮厚切雞排</p>
                    
                        <form action="buy.php" method="POST">
                            <!---------下拉式選單------------------->
                            <select name="num" class="down">
                            <option value="1"selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select></br>
                            <!---------Buyㄉ按鈕------------------->
                            <button name="button" type="submit" value="脆皮厚切雞排" class="buyButton">BUY</button>
                        </form>
                    </article>

                    <article class="productInfo">
                        <div><img alt="sample"
                                src="images/L.png">
                        </div>
                        <p class="price">$105</p>
                        <p class="productContent">檸檬厚切雞排</p>
                        <form action="buy.php" method="POST">
                            <select name="num" class="down">
                                <option value="1"selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><br>
                            <button name="button" type="submit" value="檸檬厚切雞排" class="buyButton">BUY</button>
                        </form>
                    </article>

                    <article class="productInfo">
                        <div><img alt="sample"
                                src="images/C.png">
                        </div>
                        <p class="price">$110</p>
                        <p class="productContent">黃金起司豬排</p>
                        <form action="buy.php" method="POST">
                            <select name="num" class="down">
                                <option value="1"selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><br>
                            <button name="button" type="submit" value="黃金起司豬排" class="buyButton">BUY</button>
                        </form>
                    </article>
                </div>
                <div class="productRow">
                    <article class="productInfo">
                        <div><img alt="sample"
                                src="images/K.png">
                        </div>
                        <p class="price">$70</p>
                        <p class="productContent">黃金香酥雞塊</p>
                        <form action="buy.php" method="POST">
                            <select name="num" class="down">
                                <option value="1"selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><br>
                            <button name="button" type="submit" value="黃金香酥雞塊" class="buyButton">BUY</button>
                        </form>
                    </article>
                    <article class="productInfo">
                        <div><img alt="sample"
                                src="images/F.png">
                        </div>
                        <p class="price">$60</p>
                        <p class="productContent">現炸酥脆脆薯</p>
                        <form action="buy.php" method="POST">
                            <select name="num" class="down">
                                <option value="1"selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><br>
                            <button name="button" type="submit" value="現炸酥脆脆薯" class="buyButton">BUY</button>
                        </form>
                    </article>
                    <article class="productInfo">
                        <div><img alt="sample"
                                src="images/O.png">
                        </div>
                        <p class="price">$60</p>
                        <p class="productContent">邪惡酥炸圈圈</p>
                        <form action="buy.php" method="POST">
                            <select name="num" class="down">
                                <option value="1"selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><br>
                            <button name="button" type="submit" value="邪惡酥炸圈圈" class="buyButton">BUY</button>
                        </form>
                    </article>
                    <article class="productInfo">
                        <div><img alt="sample"
                                src="images/B.png">
                        </div>
                        <p class="price">$70</p>
                        <p class="productContent">美式酥脆雞腿</p>
                        <form action="buy.php" method="POST">
                            <select name="num" class="down">
                                <option value="1"selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><br>
                            <button name="button" type="submit" value="美式酥脆雞腿" class="buyButton">BUY</button>
                        </form>
                    </article>
                    <article class="productInfo">
                        <div><img alt="sample"
                                src="images/M.png">
                        </div>
                        <p class="price">$60</p>
                        <p class="productContent">黃金地瓜薯條</p>
                        <form action="buy.php" method="POST">
                            <select name="num" class="down">
                                <option value="1"selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><br>
                            <button name="button" type="submit" value="黃金地瓜薯條" class="buyButton">BUY</button>
                        </form>
                    </article>
                    <article class="productInfo">
                        <div><img alt="sample"
                                src="images/S.png">
                        </div>
                        <p class="price">$120</p>
                        <p class="productContent">炸深海大魷魚</p>
                        <form action="buy.php" method="POST">
                            <select name="num" class="down">
                                <option value="1"selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><br>
                            <button name="button" type="submit" value="炸深海大魷魚" class="buyButton">BUY</button>
                        </form>
                    </article>
            </section>
        </div>
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
