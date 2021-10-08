<?php
    session_start();
    require './functions.php';
    
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    // $result = mysqli_query($conn, "SELECT * FROM stocks");

    $stocks = query("SELECT * FROM stocks");
    // var_dump(json_encode($stocks));

    // $result = getStock($row["StockName"]);

    // var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='./assets/icon.png' type="image/gif" sizes="16x16">
    <title>Home</title>

    <link rel="stylesheet" href="./css/universal.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div id="header">
        <div class="main-logo">
            <a href="./index.php">
                <h1>Pasti Cuan</h1>
            </a>
        </div>
        <div class="navigation">
            <ul>
                <li> <a href="./index.php">Home</a></li>
                <li> <a href="./watchlist.php">Transaction</a></li>
                <li> <a href="./profile.php">Profile</a></li>
            </ul>
        </div>
        <div class="left-nav">
            <input type="text" placeholder="Search stocks.." name="keyword" id="keyword">
            <button type="submit" name="cari" id="tombol-cari"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <div id="content">
        <div class="container">
            
            <div class="stock-list" id="stock-container">
                
                <?php foreach($stocks as $row) : ?> 
                    <div class="stock">
                        <div class="stock-detail">
                            <div class="stock-name-container">
                                <p class="stock-name"><?= $row["StockName"] ?></p>
                            </div>
                            <div class="stock-price-container">
                                <p class="stock-price"><?php echo getStockPrice($row["StockName"]); ?></p>
                            </div>
                            <div class="stock-percentage-container">
                                <p class="stock-price"><?php echo getStockPercentage($row["StockName"]); ?></p>
                            </div>
                        </div>
                        <div class="decision">
                            <button id="buy-button" class="stock-list-button">BUY</button>
                            <button id="sell-button" class="stock-list-button">SELL</button>
                        </div>
                    </div>                
                    
                <?php endforeach; ?>

                <?php foreach($stocks as $row) : ?> 
                    <div class="stock">
                        <div class="stock-detail">
                            <div class="stock-name-container">
                                <p class="stock-name">TEST</p>
                            </div>
                            <div class="stock-price-container">
                                <p class="stock-price">PRICE</p>
                            </div>
                            <div class="stock-percentage-container">
                                <p class="stock-price">PERCENTAGE</p>
                            </div>
                        </div>
                        <div class="decision">
                            <button id="buy-button" class="stock-list-button">BUY</button>
                            <button id="sell-button" class="stock-list-button">SELL</button>
                        </div>
                    </div>                
                <?php endforeach; ?>

                <?php foreach($stocks as $row) : ?> 
                    <div class="stock">
                        <div class="stock-detail">
                            <div class="stock-name-container">
                                <p class="stock-name">TEST</p>
                            </div>
                            <div class="stock-price-container">
                                <p class="stock-price">PRICE</p>
                            </div>
                            <div class="stock-percentage-container">
                                <p class="stock-price">PERCENTAGE</p>
                            </div>
                        </div>
                        <div class="decision">
                            <button id="buy-button" class="stock-list-button">BUY</button>
                            <button id="sell-button" class="stock-list-button">SELL</button>
                        </div>
                    </div>                
                <?php endforeach; ?>

            </div>


        </div>
    </div>

    <div id="footer">
        <div class="container">
            <section class="mid-footer">
                <div class="mid-footer-content">
                    <div class="mid-footer-heading">
                        <h4>About Pasti Cuan</h4>

                    </div>
                    <div class="mid-footer list">
                        <ul>
                            <li><a href="./about-us.php">About Us</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">How Pasti Cuan Works</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mid-footer-content">
                    <div class="mid-footer-heading">
                        <h4>Help</h4>
                    </div>
                    <div class="mid-footer list">
                        <ul>
                            <li><a href="">Help Center</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Security</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mid-footer-content">
                    <div class="mid-footer-heading">
                        <h4>Business Recources</h4>
                    </div>
                    <div class="mid-footer list">
                        <ul>
                            <li><a href="">Advertise</a></li>
                            <li><a href="">Marketing</a></li>
                            <li><a href="">Marketing</a></li>
                            <li><a href="">Pasti Cuan Data</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <hr class="footer-border">
            <section class="lower-footer">
                <ul>
                    <li>© 2021 Pasti Cuan, Inc.</li>
                    <li><a href="">English (US)</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Terms</a></li>
                    <li><a href="">Sitemap</a></li>
                </ul>
            </section>
        </div>
    </div>
    
    <script src="./js/index.js"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <!-- <script src="//firebase/8.6.5/firebase-app.js"></script> -->

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <!-- <script src="//firebase/8.6.5/firebase-analytics.js"></script> -->

    <!-- Initialize Firebase -->
    <!-- <script src="/__/firebase/init.js"></script> -->
</body>

</html>