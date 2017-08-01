<html>
 <?php 
 $con1=mysql_connect ("127.0.0.1","root","");
  if ($con1==false)
 {
	 echo "connection failed".mysql_error();
 }
 
 mysql_select_db("se1",$con1);
 $res=mysql_query ("std",$con1);
 $a=$_POST['sname'];
 $b=$_POST ['fname'];
 $c=$_POST ['mname'];
 $d=$_POST['DOB'];
    $e=$_POST['gender'];
    $f=$_POST['address'];
    $g=$_POST['appid'];
    $h=$_POST['password'];
 $i=$_POST ['repassword'];
 $j=$_POST ['course'];
    $k=$_POST['marks1'];
    $l=$_POST['marks2'];
    $m=$_POST['jee'];
    $n='Pending..';
    $sq="select * from std where appid='$g';";
        $res1=mysql_query($sq,$con1); 
    $count = mysql_num_rows($res1); 
    if($count==0)
    {
 if ($h!=$i || $a==NULL || $b==NULL || $c==NULL || $d==NULL || $e==NULL || $f==NULL || $g==NULL || $h==NULL || $i==NULL || $j==NULL || $k==NULL || $l==NULL || $m==NULL)
 {
	 echo '<script type="text/javascript">'; 
echo 'alert("review your entries");'; 
echo 'window.location.href = "index6.html";';
echo '</script>';
 }
 else
 {
 $in="insert into std Values ('$a','$b','$c','$d','$e','$f','$g','$h','$j','$k','$l','$m','$n')";
 $res1=mysql_query($in,$con1);
 if ($in)
 header("Location:index9.html");
	else
	{
		echo "Enter Valid Details";
		header("Location:index6.html");
	}
 }
    }
    else
        {
	 echo '<script type="text/javascript">'; 
echo 'alert("Application id not valied");'; 
echo 'window.location.href = "index6.html";';
echo '</script>';
 }
        
 
 ?>
 </html>