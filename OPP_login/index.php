<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPP login system</title>
</head>
<body>
    <h3>SIGN UP</h3>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <button type="submit">SIGN UP</button>
    </form>

    <h3>LOGIN</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit">LOGIN</button>
    </form>
</body>
</html>