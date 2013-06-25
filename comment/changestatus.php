<?php
$status=$_POST['status'];
$id=$_POST['id'];

mysql_connect("localhost:3306");
mysql_select_db("test");
mysql_query("update complaint set status='$status' where id='$id'");

header("Location:http://localhost/mainview.php?id=".urlencode("$id"));

?>