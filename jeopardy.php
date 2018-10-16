<?php   
session_start();
echo "Let's Play " . $_SESSION['username'];
echo "  <a href='exitSession.php'>Log Out</a>";

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Project 2</title>
<link rel="stylesheet" type="text/css" href="jeopardy.css" />
</head>
<body>
 
 <div id="game">
        <div class="table-row" id="categories">
            <table>
              <caption>Let's Play Jeopardy</caption>
               <thead>
                <tr>
                 <th>Sports</th>
                 <th>World History</th>
                 <th>Movie</th>
                 <th>World Capitals</th>
                 <th>Atlanta History</th>
                 <th>Music</th>
                </tr>
               </thead>
               <tbody>
                <tr>
                 <td><form class="100" method="post" autocomplete="off"/* onsubmit="submit.disabled=true; return true" */ action="questAnswer100.php">
                 <input type="submit" name="submit" value="100"></form></td>
                 <td><a href="questAnswer100H.php"><button class="buttn">
                 <span class="button">100</span></button></ a></td>
                 <td><a href="questAnswer100M.php"><button class="buttn">
                 <span class="button">100</span></button></ a></td>
                 <td><a href="questAnswer100W.php"><button class="buttn">
                 <span class="button">100</span></button></ a></td>
                 <td><a href="questAnswer100A.php"><button class="buttn">
                 <span class="button">100</span></button></ a></td>
                 <td><a href="questAnswer100MU.php"><button class="buttn">
                 <span class="button">100</span></button></ a></td>
                </tr>
                <tr>
                 <td><a href="questAnswer200.php"><button class="buttn">
                 <span class="button">200</span></button></ a></td>
                 <td><a href="questAnswer200W.php"><button class="buttn">
                 <span class="button">200</span></button></ a></td>
                 <td><a href="questAnswer200M.php"><button class="buttn">
                 <span class="button">200</span></button></ a></td>
                 <td><a href="questAnswer200H.php"><button class="buttn">
                 <span class="button">200</span></button></ a></td>
                 <td><a href="questAnswer200A.php"><button class="buttn">
                 <span class="button">200</span></button></ a></td>
                 <td><a href="questAnswer200MU.php"><button class="buttn">
                 <span class="button">200</span></button></ a></td>
                </tr>
                <tr>
                 <td><a href="questAnswer300.php"><button class="buttn">
                 <span class="button">300</span></button></ a></td>
                 <td><a href="questAnswer300H.php"><button class="buttn">
                 <span class="button">300</span></button></ a></td>
                 <td><a href="questAnswer300M.php"><button class="buttn">
                 <span class="button">300</span></button></ a></td>
                 <td><a href="questAnswer300WC.php"><button class="buttn">
                 <span class="button">300</span></button></ a></td>
                 <td><a href="questAnswer300A.php"><button class="buttn">
                 <span class="button">300</span></button></ a></td>
                 <td><a href="questAnswer300MU.php"><button class="buttn">
                 <span class="button">300</span></button></ a></td>
                </tr>
                <tr>
                 <td><a href="questAnswer400.php"><button class="buttn">
                 <span class="button">400</span></button></ a></td>
                 <td><a href="questAnswer400H.php"><button class="buttn">
                 <span class="button">400</span></button></ a></td>
                 <td><a href="questAnswer400M.php"><button class="buttn">
                 <span class="button">400</span></button></ a></td>
                 <td><a href="questAnswer400WC.php"><button class="buttn">
                 <span class="button">400</span></button></ a></td>
                 <td><a href="questAnswer400A.php"><button class="buttn">
                 <span class="button">400</span></button></ a></td>
                 <td><a href="questAnswer400MU.php"><button class="buttn">
                 <span class="button">400</span></button></ a></td>
                </tr>
                <tr>
                 <td><a href="questAnswer500.php"><button class="buttn">
                 <span class="button">500</span></button></ a></td>
                 <td><a href="questAnswer500H.php"><button class="buttn">
                 <span class="button">500</span></button></ a></td>
                 <td><a href="questAnswer500M.php"><button class="buttn">
                 <span class="button">500</span></button></ a></td>
                 <td><a href="questAnswer500WC.php"><button class="buttn">
                 <span class="button">500</span></button></ a></td>
                 <td><a href="questAnswer500A.php"><button class="buttn">
                 <span class="button">500</span></button></ a></td>
                 <td><a href="questAnswer500MU.php"><button class="buttn">
                 <span class="button">500</span></button></ a></td>
                </tr>
                
               </tbody>
            </table>
        </div>
 </div>
 </body>
 </html>