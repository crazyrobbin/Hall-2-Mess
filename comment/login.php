<?php
$name=$_POST['loginid'];
$password=$_POST['password'];
$option=$_POST['option'];
session_start();
$_SESSION['name']=$name;
$_SESSION['option']=$option;

if($option!="maintenance")   // login by student
{
$ftps = "webhome.cc.iitk.ac.in";

$foo=ftp_connect($ftps) or die("Could not connect");

if(@ftp_login($foo,$name,$password))
{
	echo "connected";
	header('Location:http://localhost/index.php');
}
else
{
	echo "login failed";
}

ftp_close($foo);

}


else {                        // Login by maintenance

$con=mysql_connect("localhost:3306");
mysql_select_db("test",$con);

$result=mysql_query("select * from  login_maintenance where cc_login_id='$name'");
$row=mysql_fetch_array($result);
$pass=$row['cc_password'];
if(($pass==$password)&&($row['cc_login_id']!="")){
echo "<b>Welcome</b>";
header('Location:http://localhost/mainindex.php');
} 

else { echo"Incorrect";

header('Location:http://localhost/home.html');

}


}




