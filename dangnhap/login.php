<?php
   include ("connect.php");
//kết nối đến database//
    if(isset($_POST['Login']) ){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = ("SELECT * FROM thanhvien WHERE username = '$username' AND password = '$password'");
        $result = mysqli_query(mysql: $conn, query: $sql);
        if(mysqli_num_rows(result: $result) == 1){
            $_SESSION['username'] = $username;
            header(header: 'location: map.html');
        }
        else{
            echo 'Invalid username or password';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form>
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="username" />
                <input type="password" placeholder="Password" />
                <button>Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username">
            <label for="password">Password:</label>
            <input type="password" name="password">
            <button type="submit" name="Login">Đăng Nhập</button>
        </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right" action="signup.php" method="POST">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button type="submit" name="Signup" style="background-color:azure"><a href="signup.php">Đăng ký</a></button>
                </div>
            </div>
        </div>
    </div>
</body>