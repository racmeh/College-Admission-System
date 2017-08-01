<?php

$con=mysql_connect ("127.0.0.1","root","");
$a=$_POST['aname'];
$b=$_POST['passk'];
 mysql_select_db("se1",$con);
 
 $sq="select * from admin where adminname='$a' and pass='$b'; ";
 $res1=mysql_query($sq,$con); 
 $count = mysql_num_rows($res1); 
 if ($count==1)
 {	session_start();
	$_SESSION['Name'] = $a;
	 header ("location: php4.php");
 }
 else
	 echo "INVALID CREDENTIALS"
 ?>