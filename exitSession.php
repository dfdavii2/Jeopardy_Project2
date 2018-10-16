<?php

session_start();
session_destroy();
session_unset();
header("Location:entrance.php");
 
/* echo "<br><br>";
echo "You have logged out.";
echo " Go to Login Page<a href='entrance.php'>  Back to Login</a>"; */

?>