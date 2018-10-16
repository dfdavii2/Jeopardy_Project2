<?php
$username="david";
$pass="1234";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    if($username =="david" && $pass == "1234"){
        if(isset($_POST['stillMe'])){
            setcookie('username', $username, time()+60*60*7);    
        }
        session_start();
        $_SESSION['username'] = $username;
        header("location: jeopardy.php");    
    } else{
        header("location:entrance.php");
    }              
} else{
    header("location: entrance.php");
}
?> 