<html>
<head>
     
	 
    <style>
ul {
    float: left;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style-type: none;
}

a.cd {
    float: left;
    width: 7.9em;
    text-decoration: none;
    color: white;
    background-color: grey;
    padding: 0.2em 0.6em;
    border-right: 1px solid white;
} h1
    {
    color : saddlebrown;
        background-color: gainsboro;
        text-align: center;
        font-size: 44px;
        margin:0;
    padding:0;
    }

a.cd:hover {background-color: #ff3300;}

li {display: inline;}
       
</style>

<style>
     div{
            background-color: #e0ebeb;
         height: auto;
        }
    /* Full-width input fields */
input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    height:10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    width=25%;
}
table {
    width :100%;
    text-align: center;
    border: 1px solid black;
    border-collapse: collapse;
    border-spacing: 10px ;
}
    
tr, th {border-collapse: collapse;
    
    border: 1px solid black;
    background-color: aliceblue;
     border-spacing: 10px ;
    padding: 15px;
	
}
/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 22%;
}
footer {
    position : absolute;
        background-color: white;
    bottom : 40px;
    height : 80px;
    margin-top : 0;
       }
/* Add padding to container elements */
.container {width:100%;
    
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
    height:30px;
}footer {
    position : absolute;
        background-color: white;
    bottom : 0px;
    height : 100px;
    margin-top : 0;
       }
    body{
        background-color: darkgoldenrod;
    }

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
    h2{
        color: blue;
    }
    </style>
    </head>
<body>
     <img src="Untitled.png" alt="some_text" height="13%" width="100%">
<ul>
    <li><a class="cd" href="index.html">Home</a></li>
  <li><a class="cd" href="index1.html">About us</a></li>
  <li><a class="cd" href="index2.html">Academics</a></li>
  <li><a class="cd" href="index3.html">Fee</a></li>
  <li><a class="cd" href="index4.html">Admissions</a></li>
  <li><a class="cd" href="index5.html" >Career</a></li>
    <li><a class="cd" href="index6.html" >Register</a></li>
    <li><a class="cd" href="index7.html" >Login</a></li>
    <li><a class="cd" href="index8.html" >Admin Login</a></li>
</ul>
   <style>h1
    {
    color : blue;
    }
       label{
min-width:180px;
display: inline-block;
}
    </style> 
    <title>
    Details</title>
 <div id='a'>   
    <h2>Entered Details and status</h2>

<?php
    $con=mysql_connect ("127.0.0.1","root","");
    mysql_select_db("se1",$con);
session_start();
if(isset($_SESSION['Name'])) {
echo "Welcome " . $_SESSION['Name']." to your Account";
     $_a=$_SESSION['Name'];
   
  $query = "SELECT * FROM std where appid='$_a';";
    function mysql_query_or_die($query) {
    $result = mysql_query($query);
    if ($result)
        return $result;
    else {
        $err = mysql_error();
        die("<br>{$query}<br>*** {$err} ***<br>");
    }
}
$result = mysql_query_or_die($query);
echo("<table>");
$first_row = true;
while ($row = mysql_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
        foreach($row as $key => $field) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
echo("</table>"); 
    /*
    $sql = "SELECT * FROM std where appid='$_a';";
$res1=mysql_query($sql,$con); 
if ($res1->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";*/
    }
     ?>
     <h3>If status is accepted <a href="index11.html">click here</a> to pay fee</h3>
    </div>
    <br>
  <footer><img src="Untitled2.png" alt="some_text" height="100%" width="100%"></footer>
    </body>
</html>