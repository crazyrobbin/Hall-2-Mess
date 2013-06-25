<?php
include ('mainheader.php');
?>

<?php
$id=$_GET['id'];
global $id;
mysql_connect("localhost:3306");
mysql_select_db("test");
$row=mysql_fetch_array((mysql_query("select * from complaint where id='$id'")));
$src =$row['file_address'];
if($src!="null")
echo ("<img src=$src width=200 height=240 align=right>");
echo "<b> Complaint Id:  </b>".$row['id']."<br><br>";
echo "<b> Complaint By:  </b>".$row['name']."<br><br>";
echo "<b> Address:  </b>". "<b><small>Hall:</small></b> " .$row['hall']. "&nbsp;&nbsp;<b><small>Room No:</small></b> " .$row['room_no']. "<br><br>";
echo "<b> Phone No:  </b>".$row['phone_no']."<br><br>";
echo "<b> Date and Time of Complaint:  </b>".$row['curr_time']."<br><br>";
echo "<b> Complaint Type:  </b>".$row['complaint_type']."<br><br>";
echo "<b> Complaint:  </b>".$row['complaint']."<br><br>";
echo "<b> Suggestion:  </b>".$row['suggestion']."<br><br>";
echo "<b> Priority Order:  </b>".$row['priority_order']."<br><br>";
echo "<b> Status of Complaint:  </b>".$row['status']."<br><br>";
?>
<hr>
<form action="http://localhost/changestatus.php" method="POST">
Change Status: &nbsp;&nbsp;&nbsp;
<select name="status">
<option value="unsolved">Unsolved</option>
<option value="solved">Solved</option></select>
<input type="hidden" value="<?php echo"$id"; ?>" name="id">
<input type="submit" value="change">
</form>
<br><br>

