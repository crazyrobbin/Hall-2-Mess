<?php
include ('mainheader.php');
?>
<?php

$type=$_POST['type'];
$search=$_POST['search'];
mysql_connect("localhost:3306");
mysql_select_db("test");
$result=mysql_fetch_array(mysql_query("select count(id) as count from complaint where $type like '%$search%'"));
if($result['count']==0)echo("No result Found");
else
{echo("
<table border=1>
<tr>
<td width=70><b>S. No.</b> </td>
<td width=110><b>Complaint Id</b></td>
<td width=200><b>Date & Time of complaint</b></td>
<td width=150><b>Type of Complaint</b></td>
<td width=100><b>Priority</b></td>
<td width=100><b>Status</b></td>
<td width=100><b>Complainer</b></td>
</tr>
");
}

$con=mysql_connect("localhost:3306");
mysql_select_db("test",$con);
$result=mysql_query("select * from complaint where $type like '%$search%'");
$count=1;
while($row=mysql_fetch_array($result))
{echo"<tr>"; 
echo"<td>";
$id=$row['id'];
echo "<a href=http://localhost/mainview.php?id=$id> " .$count. "</a>";
echo"</td>";
echo"<td>";
echo "<a href=http://localhost/mainview.php?id=$id> " .$row['id']. "</a>";
echo"</td>";
echo"<td>";
echo "<a href=http://localhost/mainview.php?id=$id> " .$row['curr_time']. "</a>";
echo"</td>";
echo"<td>";
echo "<a href=http://localhost/mainview.php?id=$id> " .$row['complaint_type']. "</a>";
echo"</td>";
echo"<td>";
echo "<a href=http://localhost/mainview.php?id=$id> " .$row['priority_order']. "</a>";
echo"</td>";
echo"<td>";
echo "<a href=http://localhost/mainview.php?id=$id> " . $row['status']. "</a>";
echo"</td>";
echo"<td>";
echo "<a href=http://localhost/mainview.php?id=$id> " . $row['name']. "</a>";
echo"</td></tr>";$count++;if($count==21)break;
}?>