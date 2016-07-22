
<html lang="en">
<head>
	<title>SIGNUPL</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>
<body>
	




<!-- about header section -->
<div id="about-headerr">
	<div class="container">
		





<!DOCTYPE HTML>

<html>
  
  <body>
<?php
session_start();
echo "<br></br>";
echo "EXPLORE OTHER DOMAINS ALSO";
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" name="EDUCATION" value="EDUCATION" />
</form>

<!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" name="MEDICINE" value="MEDICINE" />
</form> -->

<!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" name="MISCELLANEOUS" value="MISCELLANEOUS" />
</form>-->
<?php
echo "<br></br>";

if(isset($_POST['EDUCATION'])){
   
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
$sql = "SELECT *FROM teacher where domain='education'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //echo "<table><tr><th>name</th><th>pickup</th><th>time</th></tr>";
    // output data of each row
    while($row1 = $result->fetch_assoc()) {
         
       
            echo "NAME :".$row1["name"]."<br></br> ADDRESS:".$row1["address"]. "<br></br>PHONE NO:".$row1["phone"]. "<br></br>EMAIL ID:".$row1["email"]. "<br></br>LINKED IN:".$row1["linkedin"]. "<br></br>SHE WANTS TO TEACH:".$row1["teach"]. "<br></br>HER RECOMMENDATIONS:".$row1["recommendation"]. "<br></br>HER DOMAIN:".$row1["domain"]. "<br></br>REQUIRES :".$row1["pay"]."<br></br>";
                $name=$row1['name'];
     $sql2="SELECT * from review where teacher_name='$name'";
     $result2=$conn->query($sql2);
     if ($result2->num_rows > 0) {
       while($row2 = $result2->fetch_assoc()) {
          echo "RATING:".$row2["rating"]."<br></br>FEEDBACK:".$row2["comments"]. "<br></br>" ;
         
       }
     }
   }
  
   // echo "</table>";
} 
   // echo "0 results";

/* if(isset($_POST['HOLI'])){
   echo "NEAR YOU!!!!!!!!!!!!";
   
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "green";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */
/*$sql = "SELECT shop_name,product_name,info,address FROM holi where address LIKE '%$r%' OR address LIKE '%$p'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //echo "<table><tr><th>name</th><th>pickup</th><th>time</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        echo " <br></br>*shop name:".$row["shop_name"]." product:".$row["product_name"]."<br></br> ".$row["info"].""."<br></br> ".$row["address"]."<br></br>";
        
    }
   // echo "</table>";
} else {
    echo "0 results";
}*/

$conn->close();
}
?>
<?php
echo "<br></br>";
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" name="MEDICINE" value="MEDICINE" />
</form>
<?php

if(isset($_POST['MEDICINE'])){
   
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
$sql = "SELECT *FROM teacher where domain='medicine'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //echo "<table><tr><th>name</th><th>pickup</th><th>time</th></tr>";
    // output data of each row
    while($row1 = $result->fetch_assoc()) {
         
       
            echo "NAME :".$row1["name"]."<br></br> ADDRESS:".$row1["address"]. "<br></br>PHONE NO:".$row1["phone"]. "<br></br>EMAIL ID:".$row1["email"]. "<br></br>LINKED IN:".$row1["linkedin"]. "<br></br>SHE WANTS TO TEACH:".$row1["teach"]. "<br></br>HER RECOMMENDATIONS:".$row1["recommendation"]. "<br></br>HER DOMAIN:".$row1["domain"]. "<br></br>REQUIRES :".$row1["pay"]."<br></br>";
                $name=$row1['name'];
     $sql2="SELECT * from review where teacher_name='$name'";
     $result2=$conn->query($sql2);
     if ($result2->num_rows > 0) {
       while($row2 = $result2->fetch_assoc()) {
          echo "RATING:".$row2["rating"]."<br></br>FEEDBACK:".$row2["comments"]. "<br></br>" ;
         
       }
     }
  }
   // echo "</table>";
} else {
   // echo "0 results";

}
$conn->close();
}
?>
<?php
echo "<br></br>";
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" name="MISCELLANEOUS" value="MISCELLANEOUS" />
</form>
<?php
echo "<br></br>";
if(isset($_POST['MISCELLANEOUS'])){
   
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
$sql = "SELECT *FROM teacher where domain='miscellaneous'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //echo "<table><tr><th>name</th><th>pickup</th><th>time</th></tr>";
    // output data of each row
    while($row1 = $result->fetch_assoc()) {
         
       
            echo "NAME :".$row1["name"]."<br></br> ADDRESS:".$row1["address"]. "<br></br>PHONE NO:".$row1["phone"]. "<br></br>EMAIL ID:".$row1["email"]. "<br></br>LINKED IN:".$row1["linkedin"]. "<br></br>SHE WANTS TO TEACH:".$row1["teach"]. "<br></br>HER RECOMMENDATIONS:".$row1["recommendation"]. "<br></br>HER DOMAIN:".$row1["domain"]. "<br></br>REQUIRES :".$row1["pay"]."<br></br>";
                $name=$row1['name'];
     $sql2="SELECT * from review where teacher_name='$name'";
     $result2=$conn->query($sql2);
     if ($result2->num_rows > 0) {
       while($row2 = $result2->fetch_assoc()) {
          echo "RATING:".$row2["rating"]."<br></br>FEEDBACK:".$row2["comments"]. "<br></br>" ;
         
       }
     }
   }
   // echo "</table>";
} else {
   // echo "0 results";

}
$conn->close();
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
SEARCH
<input type="text" name="ans">
<br>

<input type="submit" name="submit" value="Submit">
</form>
<?php
$key="";
//echo "$w";
echo "<br></br>";
 if(isset($_POST['submit'])){
   $ans=$_POST['ans'];
   
   echo "$ans";
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
$sql = "SELECT *FROM teacher where domain LIKE '%$ans%' OR teach LIKE '%$ans%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //echo "<table><tr><th>name</th><th>pickup</th><th>time</th></tr>";
    // output data of each row
    while($row1 = $result->fetch_assoc()) {
         
       
            echo "NAME :".$row1["name"]."<br></br> ADDRESS:".$row1["address"]. "<br></br>PHONE NO:".$row1["phone"]. "<br></br>EMAIL ID:".$row1["email"]. "<br></br>LINKED IN:".$row1["linkedin"]. "<br></br>SHE WANTS TO TEACH:".$row1["teach"]. "<br></br>HER RECOMMENDATIONS:".$row1["recommendation"]. "<br></br>HER DOMAIN:".$row1["domain"]. "<br></br>REQUIRES :".$row1["pay"]."<br></br>";
                $name=$row1['name'];
     $sql2="SELECT * from review where teacher_name='$name'";
     $result2=$conn->query($sql2);
     if ($result2->num_rows > 0) {
       while($row2 = $result2->fetch_assoc()) {
          echo "RATING:".$row2["rating"]."<br></br>FEEDBACK:".$row2["comments"]. "<br></br>" ;
         
       }
     }
  }
   // echo "</table>";
} else {
   // echo "0 results";

}
$conn->close();
}
echo "<a href='review.php'>REVIEW</a>";

session_unset();
session_destroy();
?>


</body>
</html>













	
	</div>
</div>




<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<p></p>
			</div>
			<div class="col-md-6 col-sm-6">
				<ul class="social-icons">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-pinterest"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-envelope-o"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>