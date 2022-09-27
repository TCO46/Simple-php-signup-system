<section>
    <h2>Log in</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email"> <br>
        <input type="password" name="pwd" placeholder="Password"> <br>
        <button type="submit" name="submit">Log in</button> <br>
    </form>

    
<?php

if(isset($_GET['error'])) {
    if($_GET['error'] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
    } else if($_GET['error'] == "wronglogin") {
        echo "<p>Incorrect login!</p>";
    }
    
}

?>
</section>