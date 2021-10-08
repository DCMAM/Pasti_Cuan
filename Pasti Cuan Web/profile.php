<?php
    require 'functions.php';
    session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    $id = $_COOKIE['id'];

    $result = mysqli_query($conn, "SELECT * FROM userdetail WHERE UserID = '$id' ");
    $result2 = mysqli_query($conn, "SELECT username FROM users WHERE UserID = '$id' ");
    
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='./assets/icon.png' type="image/gif" sizes="16x16">
    <title>Profile</title>

    <link rel="stylesheet" href="./css/universal.css">
    <link rel="stylesheet" href="./css/profile.css">
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
        <div class="container-1">
            <div class="left-container">
                <div class="left-inner-container">
                    <img src="./<?= $row['Gambar'] ?>" alt="">
                    <p id="profile-name"> <?= $row['FullName'] ?> </p>
                    <p id="profile-username">@<?= $row2['username'] ?> </p>    
                </div>
            </div>
            <div class="right-container">
                <div class="right-inner-container">
                <table>
                    <tr>
                        <td>Balance</td>
                        <td> $<?= $row['Balance'] ?>  </td>
                        <td> <a href="#">Deposit</a></td>
                    </tr>
                    <tr>
                        <td>Membership</td>
                        <td><?= $row['Membership'] ?> </td>
                        <td> <a href="#">Upgrade</a> </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?= $row['Gender'] ?> </td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>Birthday</td>
                        <td><?= $row['Birthday'] ?> </td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $row['Email'] ?> </td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><?= $row['PhoneNumber'] ?> </td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>Change Password</td>
                        <td>*********</td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    
                </table>        
                    <a href="./logout.php">
                        <button>Logout</button>
                    </a>
                </div>
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