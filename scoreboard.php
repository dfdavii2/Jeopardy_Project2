<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Project 2</title>
 <style>
  body{
        background-color: green;
    }
     table{
         height: 200px;
         width: 400px;
         background-color: red;
         position: fixed;
         top: 50%;
         left: 50%;
         margin-top: -100px;
         margin-left: -200px;
     }
     td{
         border:0px;
         padding:10px;
         font-size: 20px;
     }
     th{
         border-bottom: 2px solid;
         background-color: yellow;
         font-size: 30px;
     }
     caption{
         font-size: 40px;
         font-weight: bolder;
     }
     td {
         text-align: center;
         font-size: 50px;
            
     }
     a{
         float: right;
     }
     .goBack{
         background-color: red;
         font-size: 20px;
     }
 </style>
</head>
<body>
    <table>
     <caption>The Scoreboard</caption>
       <tr>
        <th><?php echo $_SESSION['username'];?></th>
       </tr>
       <tr>
        <td><?php echo $_SESSION['score'];?></td>
       </tr>
    </table>
    <div>
      <a href="jeopardy.php"><button class="goBack">
                 <span class="button">Go back to Game</span></button></ a>
    </div>
</body>
</html>
