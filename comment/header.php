<?php
session_start();

if(!($_SESSION['name']))header('Location:http://localhost/home.html');
global $name;
$name=$_SESSION['name'];
$option=$_SESSION['option'];
if($option!="student")header('Location:http://localhost/home.html');
?>
<html>
<head>
<title>
<?php echo"$name";  ?> </title>
<link rel="shortcut icon" href="http://localhost/favicon.ico" />
</head>
<body>
<h1>Complaint Box</h1><b> Welcome</b> <?php echo"$name"?>
<p align=right><a href="http://localhost/logout.php">Logout</a></p>
<hr color="green">
