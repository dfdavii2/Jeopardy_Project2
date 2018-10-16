<?php session_start();
?>
<?php
$user="david";
$passW="1234";

/* if(isset($_SESSION['use'])){
    header("location:jeopardy.php");
} */
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    if(($username == $user && $pass == $passW) ||($username == "player2" && $pass == "0000")){
        if(isset($_POST['stillMe'])){
            setcookie('username', $username, time()+60*60*24*30);    
        }
        //session_start();
        $_SESSION["username"] = $username;
        //$_SESSION["pass"] = $pass;
        header("Location: jeopardy.php");    
    } else{
        echo "Wrong Login";
        echo "<br><br>
        <a href='entrance.php'>Back to Login</a>";
        
    }              
} else{
    header("Location: entrance.php");
    
}
?>