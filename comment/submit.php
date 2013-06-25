<?php
session_start();

if(!($_SESSION['name']))header('Location:http://localhost/home.html');
global $name;
$name=$_SESSION['name'];

$type=$_POST['type'];
$time= date('Y-m-d H:i:s');
$hall= $_POST['hall'];
$room=$_POST['room'];
$complaint=$_POST['complaint'];
$suggestion=$_POST['suggestion'];
$priority=$_POST['order'];
$phone=$_POST['phone'];
$pre="com";
if($priority==1){$priority="urgent";}
else $priority="normal";
$con=mysql_connect("localhost:3306");
mysql_select_db("test",$con);
$one=mysql_fetch_array(mysql_query("select count(s_no) as count from complaint"));
$count=$one['count'];
$count++;
$status="unsolved";
$id=$pre.$count;
$filepath="null";
if($_FILES["file"]["error"]<=0){
$_FILES["file"]["name"]="image$count.jpg";
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
}
if($_FILES["file"]["name"]!="")
$filepath="upload/".$_FILES["file"]["name"];
else $filepath="null";
mysql_query("insert into complaint set id='$id',name='$name',curr_time='$time',complaint_type='$type',hall='$hall',room_no='$room',complaint='$complaint',file_address='$filepath',suggestion='$suggestion',priority_order='$priority',phone_no='$phone',status='$status'");


header ('Location:http://localhost/PCLUB/admin.php');

?>
