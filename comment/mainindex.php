<?php
include ('mainheader.php');
?>

<b>
Recent Complaint are as follows:</b><br><br>
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

<?php
$con=mysql_connect("localhost:3306");
mysql_select_db("test",$con);
$result=mysql_query("select * from complaint order by status desc,priority_order desc,curr_time desc");
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
</table>
