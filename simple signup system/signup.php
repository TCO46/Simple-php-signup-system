<?php
require_once "header.php";
?>
<section>
    <h2>sign up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name"> <br>
        <input type="text" name="email" placeholder="Email"> <br>
        <input type="text" name="uid" placeholder="Username"> <br>
        <input type="password" name="pwd" placeholder="Password"> <br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password"> <br>
        <button type="submit" name="submit">Sign up</button> <br>
    </form>
    <a href="login.php">login</a>
</section>

<?php

if(isset($_GET['error'])) {
    if($_GET['error'] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
    } else if($_GET['error'] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
    } else if($_GET['error'] == "invalidemail") {
        echo "<p>Email is not exist</p>";
    } else if($_GET['error'] == "passwordnotmatch") {
        echo "<p>Please type the password again</p>";
    } else if($_GET['error'] == "usernametaken") {
        echo "<p>Username taken!</p>";
    }
}

?>