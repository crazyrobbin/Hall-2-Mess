<?php
include ('header.php');
?>
<b><p align=right><a href="http://localhost/status.php">Back</a>&nbsp;&nbsp;<a href="http://localhost/index.php">Home</a></p></b><br>
<?php
$id=$_GET['id'];
mysql_connect("localhost:3306");
mysql_select_db("test");
$row=mysql_fetch_array((mysql_query("select * from complaint where id='$id'")));
$src =$row['file_address'];
if($src!="null")
echo ("<img src=$src width=200 height=240 align=right>");
echo "<b> Complaint Id:  </b>".$row['id']."<br><br>";
echo "<b> Date and Time of Complaint:  </b>" .$row['curr_time'] ."<br><br>";
echo "<b> Complaint Type:  </b>".$row['complaint_type']."<br><br>";
echo "<b> Complaint:  </b>".$row['complaint']."<br><br>";
echo "<b> Suggestion:  </b>".$row['suggestion']."<br><br>";
echo "<b> Priority Order:  </b>".$row['priority_order']."<br><br>";
echo "<b> Status of your Complaint:  </b>".$row['status']."<br><br>";

