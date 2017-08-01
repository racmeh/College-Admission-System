<?php

$con=mysql_connect ("127.0.0.1","root","");
$a=$_POST['aid'];
$b=$_POST['psw'];
 mysql_select_db("se1",$con);
 
 $sq="select * from std where appid='$a' and password='$b'; ";
 $res1=mysql_query($sq,$con); 
 $count = mysql_num_rows($res1); 
 if ($count==1)
 {	session_start();
	$_SESSION['Name'] = $a;
	 header ("location: php3.php");
 }
 else
	 echo "INVALID CREDENTIALS"
 ?>