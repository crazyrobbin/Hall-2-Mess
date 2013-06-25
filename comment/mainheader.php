<?php
session_start();

if(!($_SESSION['name']))header('Location:http://localhost/home.html');
global $name;
$name=$_SESSION['name'];
$option=$_SESSION['option'];
if($option!="maintenance")header('Location:http://localhost/home.html');
?>
<html>
<head>
<title>
<?php echo"$name";  ?> </title>
<link rel="shortcut icon" href="http://localhost/favicon.ico" />
</head>
<body>
<h1>Complaint Box</h1>
<p align=right><b> Welcome</b> <?php echo"$name"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/logout.php">Logout</a></p>
<hr color="green"><form action="http://localhost/search.php" method="POST">
<p align="right">
<a href="http://localhost/mainindex.php">Home</a>&nbsp;&nbsp;
<a href="http://localhost/type.php?type=academics">Academics</a>&nbsp;&nbsp;
<a href="http://localhost/type.php?type=mess">Mess</a>&nbsp;&nbsp;
<a href="http://localhost/type.php?type=electricity">Electricity</a>&nbsp;&nbsp;
<a href="http://localhost/type.php?type=plumber">Plumber</a>&nbsp;&nbsp;
<a href="http://localhost/type.php?type=carpenter">Carpenter</a>&nbsp;&nbsp;&nbsp;&nbsp;Search By: &nbsp;&nbsp;
<select name="type">
<option value="complaint_type">Type</option>
<option value="name">Complainer</option>
<option value="curr_time">Date(YYYY-MM-DD)</option>
<option value="priority_order">Priority</option>
<option value="id">Complaint Id</option>
</select>
<input type="text" size=30 name="search" placeholder="Write keywords to search">
<input type="submit" value="go">
</p></form><br>
