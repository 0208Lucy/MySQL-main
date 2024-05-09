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
                    <form action="result.php"  method="POST">
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
