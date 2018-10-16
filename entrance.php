<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Entrance to Jeopardy</title>
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
     h2{
         text-align: center;
     }
     .right{
         text-align: right;
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
     
    </style>
</head>
<body>

    <form action="validator.php" method="post">
      <table>
        <tr>
          <th colspan="2">Let's Play Jeopardy</th>
        </tr>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="pass"></td>
        </tr>
        <tr>
          <td class="right" colspan="2"><input type="submit"
          name="login" value="Start Game"><input type="checkbox"
          name="stillMe" value="1">Don't forget me</td>
        </tr>
      </table>
     </form>

</body>
</html>