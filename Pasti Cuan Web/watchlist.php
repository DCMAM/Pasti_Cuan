<?php
    session_start();
    require './functions.php';

    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    $id = $_COOKIE['id'];

    // $result = mysqli_query($conn, "SELECT * FROM `transaction` WHERE UserID = '$id'  ");
    // $stocks = mysqli_fetch_assoc($result);

    $stocks = query("SELECT * FROM transactionss WHERE UserID = '$id' " );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='./assets/icon.png' type="image/gif" sizes="16x16">
    <title>Watchlist</title>

    <link rel="stylesheet" href="./css/universal.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <input type="text" placeholder="Search." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <div id="content">
    <div class="container">
            
            <div class="stock-list">
                
                <?php foreach($stocks as $row2) : ?> 
                    <div class="stock">
                        <div class="stock-detail">
                            <div class="stock-date">
                                <p class="test"><?= $row2["TransactionDate"] ?></p>
                            </div>
                            <div class="stock-name">
                                <p><?= $row2["StockID"] ?></p>
                            </div>
                            <div class="stock-type">
                                <p class="Type"><?= $row2["Type"] ?></p>
                            </div>
                            <div class="stock-price">
                                <p><?= $row2["OpenAt"] ?></p>
                            </div>
                        </div>
                        <div class="decision">
                            <button id="buy-button" class="stock-list-button">Close Position</button>
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
                    <li><a href="">© 2021 Pasti Cuan, Inc.</a></li>
                    <li><a href="">English (US)</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Terms</a></li>
                    <li><a href="">Sitemap</a></li>
                </ul>
            </section>
        </div>
    </div>
</body>

</html>