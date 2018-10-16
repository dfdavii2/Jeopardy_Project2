<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Questions and Answers</title>
    <style>
     body{
         background-color: green;
     }
     input[type=text]{
         width: 200px;
         font-weight: bolder;
         height: 35px;
         font-size: 20px;
     }
     input[type=submit]{
         width: 200px;
         font-weight: bolder;
         height: 35px;
         font-size: 20px; 
     }
     input[type=submit]{
         background-color: red;
     }
     h2{
         text-align: center;
         font-weight: bolder;
         font-size: 50px;
     }
     .goBack{
         background-color: red;
         font-size: 20px;
     }
     a {
         float: right;
         
     }
     .question{
         background-color: red;
     }
    </style>
    
</head>
<body>
<?php
   
   $answer=""; $answerErr="";
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       if(empty($_POST["answer"])){
           $answerErr = "Required field";
       } else{
           $answer = test_input($_POST["answer"]);
           if (!preg_match("/^[a-zA-Z ]*$/",$answer)) {
               $answerErr = "Only letters and white space allowed"; 
           }
       }    
   }
   function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }
?>


  <h2 class="question">The Atlanta Olympic was in what Year?<h2>
   <form autocomplete="off" method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <label for="answer">Answer:<span class="error">*<?php echo $answerErr;?></span></label>
   <input class="text" type="text" onfocus="this.value=''" name="answer" value="<?php echo $answer;?>">
   <input type="submit" name="submit" value="Submit Answer">
   </form>
   <?php
   
   echo "<br>";
   if(isset($_POST['submit'])){
       $answer = $_POST['answer'];
       if($answer == "1996"){
           $_SESSION['score'] += 200;
           header("Location:scoreboard.php");
       }
       else{
           $_SESSION['score'] -= 200;
           header("Location:scoreboard.php");
       }
   }
   ?>
   
   <a href="jeopardy.php"><button class="goBack">
                 <span class="button">Go back to Game</span></button></ a>
</body>
</html>