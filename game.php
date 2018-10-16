board.php
 
<?php
$dbusername='someuser';
$db='somedb';
$dbpassword='password';
function getdbHandle()
{
	global $dbusername,$dbpassword,$db;
 
   if (!($link=mysql_connect("localhost",$dbusername,$dbpassword)))
   {
      echo "Error connecting to the database server.";
      exit();
   }
   if (!mysql_select_db($db,$link))
   {
      echo "Error connecting to the database on the server.";
      exit();
   }
   return $link;
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Diagnostic Radiology Jeopardy</title>
<style type="text/css">
body {
background-color:#333333;
}
body, table, table td {
border:0px;
border-collapse:collapse;
margin:0px;
padding:0px;
}
a {
color:#FFFF00;
}
#board {
margin-left:20px;
color:#FFFF00;
}
#board #categories td {
background-color:#000000;
background-image:none;
border:#FFFFFF solid 3px;
}
#board tr td{
background-image:url(boardelementgrad.gif);
background-repeat:none;
height:100px;
width:180px;
border:#000000 solid 3px;
border-collapse:collapse;
text-align:center;
font-size:24px;
}
#container {
text-align:center;
padding:20px;
}
#score {
margin-left:20px;
margin-top:20px;
background-color:#000000;
color:#FFFF00;
}
#score tr td {
border:#FFFFFF solid 3px;
border-collapse:collapse;
text-align:center;
font-size:24px;
height:50px;
width:180px;
}
.team {
background-color:#000000;
color:#FFFF00;
font-size:18px;
border:none;
max-width:180px;
}
.score {
background-color:#000000;
color:#FFFF00;
font-size:18px;
border:none;
max-width:180px;
text-align:right;
}
</style>
</head>
 
<body>
<div id="container">
<table id="board">
  <tr id="categories">
    <td id="categories1"></td>
    <td id="categories2"></td>
    <td id="categories3"></td>
    <td id="categories4"></td>
    <td id="categories5"></td>
  </tr>
  <tr id="row1">
    <td id="row1_1"></td>
    <td id="row1_2"></td>
    <td id="row1_3"></td>
    <td id="row1_4"></td>
    <td id="row1_5"></td>
  </tr>
  <tr id="row2">
    <td id="row2_1"></td>
    <td id="row2_2"></td>
    <td id="row2_3"></td>
    <td id="row2_4"></td>
    <td id="row2_5"></td>
  </tr>
  <tr id="row3">
    <td id="row3_1"></td>
    <td id="row3_2"></td>
    <td id="row3_3"></td>
    <td id="row3_4"></td>
    <td id="row3_5"></td>
  </tr>
  <tr id="row4">
    <td id="row4_1"></td>
    <td id="row4_2"></td>
    <td id="row4_3"></td>
    <td id="row4_4"></td>
    <td id="row4_5"></td>
  </tr>
  <tr id="row5">
    <td id="row5_1"></td>
    <td id="row5_2"></td>
    <td id="row5_3"></td>
    <td id="row5_4"></td>
    <td id="row5_5"></td>
  </tr>
</table>
<table id="score">
<tr><td><input type="text" value="" class="team" /></td><td><input type="text" value="" class="score" id="score1" /></td><td><input type="button" value="+100" class="score" onclick="document.getElementById('score1').value = parseFloat(document.getElementById('score1').value)+100" /><input type="button" value="-100" class="score" onclick="document.getElementById('score1').value = parseFloat(document.getElementById('score1').value)-100"/></td></tr>
<tr><td><input type="text" value="" class="team" /></td><td><input type="text" value="" class="score" id="score2"/></td><td><input type="button" value="+100" class="score" onclick="document.getElementById('score2').value = parseFloat(document.getElementById('score2').value)+100" /><input type="button" value="-100" class="score" onclick="document.getElementById('score2').value = parseFloat(document.getElementById('score2').value)-100"/></td></tr>
<tr><td><input type="text" value="" class="team" /></td><td><input type="text" value="" class="score" id="score3"/></td><td><input type="button" value="+100" class="score" onclick="document.getElementById('score3').value = parseFloat(document.getElementById('score3').value)+100" /><input type="button" value="-100" class="score" onclick="document.getElementById('score3').value = parseFloat(document.getElementById('score3').value)-100"/></td></tr>
</table>
</div>
<script type="text/javascript">
var catArray = new Array(2);
catArray[0] = new Array(5);
catArray[1] = new Array(5);
</script>
<?php
$query_categories="select * from categories";
$result_categories=mysql_query($query_categories,getdbHandle());
for( $i=0; $temp1=mysql_fetch_array($result_categories); $i++ )
		{
		for( $j=0; $j<5; $j++ )
		{
		echo "<script type=\"text/javascript\">\n";
		echo "catArray[$i][$j] = '$temp1[$j]';\n";
		echo "</script>\n";
		$catArray[$i][$j] = $temp1[$j];
		}
		}
?>
<script type="text/javascript">
jeopardyMultiplier = 1;
for (i = 0; i <5; i++) {
document.getElementById('categories' + (i+1)).innerHTML = catArray[jeopardyMultiplier-1][i];
}
for (j = 1; j <=5; j++) {
for (i = 1; i <=5; i++) {
document.getElementById('row'+j+'_'+i).innerHTML = '<a href="" target="_blank">'+jeopardyMultiplier * 100 * j+'</a>';
}
}
</script>
</body>
</html>
 
 
upload.php
 
<?php
 
// Connect to database
 
$errmsg = "test";
if (! @mysql_connect("localhost","root","olorin")) {
        $errmsg = "Cannot connect to database";
        }
@mysql_select_db("jeopardy");
 
// First run ONLY - need to create table by uncommenting this
// Or with silent @ we can let it fail every sunsequent time ;-)
//$q = 'create table images (pid int primary key not null auto_increment, title text,imgdata longblob)';
//@mysql_query($q);
 
// Insert any new image into database
 
if ($_REQUEST[completed] == 1) {
        // Need to add - check for large upload. Otherwise the code
        // will just duplicate old file ;-)
        // ALSO - note that latest.img must be public write and in a
        // live appliaction should be in another (safe!) directory.
        move_uploaded_file($_FILES['imagefile']['tmp_name'],"latest.img");
        $instr = fopen("latest.img","rb");
        $image = addslashes(fread($instr,filesize("latest.img")));
        if (strlen($instr) < 149000) {
                mysql_query ("insert into images (title, imgdata) values (\"".
                $_REQUEST[whatsit].
                "\", \"".
                $image.
                "\")");
        } else {
                $errmsg = "Too large!";
        }
}
 
// Find out about latest image
 
$gotten = @mysql_query("select * from images order by pid desc limit 1");
if ($row = @mysql_fetch_assoc($gotten)) {
        $title = htmlspecialchars($row[title]);
        $bytes = $row[imgdata];
} else {
        $errmsg = "There is no image in the database yet";
        $title = "no database image available";
        // Put up a picture of our training centre
        $instr = fopen("../wellimg/ctco.jpg","rb");
        $bytes = fread($instr,filesize("../wellimg/ctco.jpg"));
}
 
// If this is the image request, send out the image
 
if ($_REQUEST[gim] == 1) {
        header("Content-type: image/jpeg");
        print $bytes;
        exit ();
        }
?>
 
<html><head>
<title>Upload an image to a database</title>
<body bgcolor=white><h2>Here's the latest picture</h2>
<font color=red><?= $errmsg ?></font>
<center><img src=?gim=1 width=144><br>
<b><?= $title ?></center>
<hr>
<h2>Please upload a new picture and title</h2>
<form enctype=multipart/form-data method=post>
<input type=hidden name=MAX_FILE_SIZE value=150000>
<input type=hidden name=completed value=1>
Please choose an image to upload: <input type=file name=imagefile><br>
Please enter the title of that picture: <input name=whatsit><br>
then: <input type=submit></form><br>
<hr>
By Graham Ellis - graham@somewhere.net
</body>
</html>