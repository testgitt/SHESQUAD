<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Login Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form name="form1" action="" method="post">
Enter email<input type="text" name="t1"><br>
Enter password<input type="text" name="t2"><br>
<input type="submit"name="submit"value="login"><br>
<div id="d1" style="color:$FFF0000"></div>
</form>

<?php
if(isset($_POST["submit1"]))
{
$pwd=md5($_POST["t2"]);
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "woman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$res=mysql_query("select * from learner where username='$_POST[t1]' && password='$pwd'");
while($row=mysql_fetch_array($res))
{

?>
<script type="text/javascript">
window.lcoation="welcome.php";
</script>
<?php

}
?>
<script type="text/javascript">
document.getElementById("d1").innerHTML="Bad username password";
</script>
<?php

}
?>
</body>
</html>









