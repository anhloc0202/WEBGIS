<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header(header: 'location:login.php');
    }
    ?>
<a href="logout.php">
    <button type="submit" name="Logout">Logout</button>
</a>