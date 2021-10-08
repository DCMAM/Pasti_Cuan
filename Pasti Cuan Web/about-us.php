<?php
    session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='./assets/icon.png' type="image/gif" sizes="16x16">
    <title>About Page</title>

    <link rel="stylesheet" href="./css/universal.css">
    <link rel="stylesheet" href="./css/about-us.css">
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

            <div class="brand-intro">
                <div class="brand-logo">
                    <img src="./assets/icon.png" alt="">
                </div>
            </div>
            <div class="brand-vission-mission">
                <div class="vission-mission">
                    <div class="vission-mission-heading">
                        <h1>Vision</h1>
                    </div>
                    <div class="vission-mission-text">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non fugiat saepe adipisci quae, laudantium deserunt expedita? Eligendi officiis explicabo nesciunt consequatur id? Magni beatae debitis, rerum commodi sunt itaque illum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia delectus iste, et maiores aspernatur animi laudantium velit veritatis illo neque nostrum doloribus commodi quidem placeat, distinctio quaerat ipsum repudiandae eum.</p>
                    </div>
                </div>
                <div class="vission-mission">
                    <div class="vission-mission-heading">
                        <h1>Mission</h1>
                    </div>
                    <div class="vission-mission-text">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non fugiat saepe adipisci quae, laudantium deserunt expedita? Eligendi officiis explicabo nesciunt consequatur id? Magni beatae debitis, rerum commodi sunt itaque illum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia delectus iste, et maiores aspernatur animi laudantium velit veritatis illo neque nostrum doloribus commodi quidem placeat, distinctio quaerat ipsum repudiandae eum.</p>
                    </div>
                </div>
            </div>

            <div class="container-h1-ourteam">
                <h1>Our Team</h1>
            </div>

            <div class="our-team">
                <div class="card">
                    <div class="card-img">
                        <img src="./assets/harish.jpg" alt="">
                    </div>
                    <div class="card-container">
                        <h2>Harish Said Bustomi</h2>
                        <p class="title">Binus Student</p>
                        <p>harish@gmail.com</p>
                        <div class="contact-container">
                            <p><button class="button">LinkedIn</button></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="./assets/david.jpg" alt="">
                    </div>
                    <div class="card-container">
                        <h2>David Christian</h2>
                        <p class="title">Binus Student</p>
                        <p>davidalexander1712@gmail.com</p>
                        <div class="contact-container">
                            <p><button class="button">LinkedIn</button></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="./assets/azizu.jpg" alt="">
                    </div>
                    <div class="card-container">
                        <h2>Al Azizu</h2>
                        <p class="title">Binus Student</p>
                        <p>azizu@gmail.com</p>
                        <div class="contact-container">
                            <p><button class="button">LinkedIn</button></p>
                        </div>
                    </div>
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