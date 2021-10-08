<?php
    session_start();
    require './functions.php';

    // cek cookies
    // if(isset($_COOKIE['login'])) {
    //     if($_COOKIE['login'] == 'true') {
    //         $_SESSION['login'] = true;
    //     }
    // }
    
    // cek cookies 2
    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];
        
        // ambil username berdasarkan idnya
        $result = mysqli_query($conn, "SELECT username FROM users WHERE UserID = '$id' ");
        $row = mysqli_fetch_assoc($result);

        // cek cookies dan username
        if($key === hash('sha256', $row['username']) ) {
            $_SESSION['login'] = true;
        }
    }

    if(isset($_SESSION["login"]) ) {
        header("Location: index.php");
        exit;
    }

    if(isset($_POST["submit"]) ){

        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");

        // cek userame
        if(mysqli_num_rows($result) === 1) {

            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"]) ){
                // cek session
                $_SESSION["login"] = $row["UserID"];

                // cek remember me
                if(isset($_POST["remember"])){
                    // buat cookie

                    setcookie('id', $row['UserID'], time()+ 1800);
                    setcookie('key', hash('sha256', $row['username']) , time()+ 1800);
                    
                }

                header("Location: index.php");
                exit;
            }
        }

        $error = true;

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='./assets/icon.png' type="image/gif" sizes="16x16">
    <title>Login Page</title>

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
                    <h3>Hi, welcome back!</h3>
                </div>

                <div class="container-2" id="mid-container">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>

                    <?php if(isset($error) ) : ?>
                        <p style="color:red;">Invalid user or password!</p>
                    <?php endif; ?>

                    <button type="submit" name="submit">Login</button>
                    <label>
                      <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container-2" id="lowest-container">
                    <a href="./welcome.php">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    </a>
                    <span class="psw">Forgot <a href="#">password?</a></span>
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