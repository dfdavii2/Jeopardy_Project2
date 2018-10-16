<?php
session_start();
// check the received parameters
if ($_POST["username"]=="testuser" && $_POST["password"]=="1234"){
    if (array_key_exists('remember',$_POST)) {
        // Create a new cookie, expiring in 30 days
        ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30);
        session_regenerate_id(TRUE);
    }
    $_SESSION["user"] = $_POST["username"];
    header ("Location: home.php");
}else {
    echo "no";
}
?>
 
<?php

?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Openalfa - User validation form</title>
</head>
<body>
<form action="/validate.php" method="POST">
  <fieldset>
    <p>
        <label for="username">User</label>
        <input id="username" type="text" name="username" size="18" />
    </p>
    <p>
        <label for="passwd">Password</label>
        <input id="passwd" type="password" name="password" size="18"  />
    </p>
    <p>
        <label for="remember">Remember me</label>
        <input id="remember" type="checkbox" name="remember" value="yes"/>
    <input type="submit" name="Submit" class="button" value="Identify" />
    </p>
  </fieldset>
</form>
</body>
</html>