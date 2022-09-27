<?php

session_start();

if(isset($_SESSION['useruid'])) {
    echo "<li><a href='profile.php'>Profile page</a></li>";
    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
} else {
    echo "<li><a href='signup.php'>Sign up</a></li>";
    echo "<li><a href='login.php'>Login</a></li>";
}

?>