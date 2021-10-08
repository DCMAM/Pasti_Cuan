<?php
    require './functions.php';

    if(isset($_POST["submit"])) {
        if(registrasi($_POST) > 0) {
            echo "<script>
                    alert('new user has been registered')
                </script>";
            header("Location: login.php");
            exit;
        } else {
            echo mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='./assets/icon.png' type="image/gif" sizes="16x16">
    <title>Register Page</title>

    <link rel="stylesheet" href="./css/universal.css">
    <link rel="stylesheet" href="./css/Universal-Welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="header">
        <div class="main-logo">
            <a href="./welcome.php">
                <h1>Pasti Cuan</h1>
            </a>
        </div>
        <div class="navigation">
            <ul>
                <li> </li>
                <li> </li>
                <li> </li>
            </ul>
        </div>
        <div class="left-nav">
            <a href="./login.php">
                <button type="submit">Login</i></button>
            </a>
            <a href="./register.php">
                <button type="submit">Sign-Up</i></button>
            </a>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <form class="modal-content animate" action="" method="post">
                <div class="txtcontainer">
                    <h3>Sign Up</h3>
                </div>

                <div class="container-2" id="mid-container">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>

                    <label for="cpassword"><b>Confirm password</b></label>
                    <input type="password" placeholder="Enter Password" name="cpassword" id="cpassword" required>

                    <button type="submit" name="submit">Sign Up</button>
                </div>

                <div class="container-2" id="lowest-container">
                    <a href="./welcome.php">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    </a>
                </div>
            </form>
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