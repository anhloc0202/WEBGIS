<?php 
include("connect.php");
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO thanhvien (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $sql);
    header('location: login.php');
}
?>

<form action="signup.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <button type="submit" name="signup">Đăng Ký</button>
</form>