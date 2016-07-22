
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

  

  


<style>
.error {color: #FF0000;}
</style>
<body> 
<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
session_start();
// define variables and set to empty values
//$USNErr = $BUSROUTEErr = $PICKUPPOINTErr = $NAMEErr = "";
$nameErr = $addressErr  = $emailErr = $learnErr= $passwordErr=$cpasswordErr= $phoneErr= $domainErr="";
//$password;
//$phone=0;
//$name = $address  = $phoneErr= $passwordErr= $email = $learn="";
//$flag=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  /* if (empty($_POST["name"])) {
     $nameErr = "name is required";
   } else {
     $name = test_input($_POST["name"]);$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
}
   
   }
   
   if (empty($_POST["address"])) {
     $addressErr = "address is required"; 
   } else {
   $address = test_input($_POST["address"]);
   
   } */
     
   if (empty($_POST["email"])) {
     $emailErr = "email is required";
   } else {
     $email = test_input($_POST["email"]);
   $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
   } 
   //if (empty($_POST["phone"])) {
   //  $phoneErr = "phone no is required";
   //} else {
   //  $phone = test_input($_POST["phone"]);
   //}
    if (empty($_POST["password"])) {
     $passwordErr = "password is required";
   } else {
     $password = test_input($_POST["password"]);
   }
   if (empty($_POST["cpassword"])) {
     $passwordErr = "password is required";
   } else {
     $password = test_input($_POST["password"]);
   }
  /* if (empty($_POST["domain"])){
    $domainErr = "domain is required";
  } else {
    $domain = test_input($_POST["domain"]);
   }*/
   
    
   

   
}

function test_input($data) {
  $data = trim($data);
   $data = stripslashes($data);
  
   
   
   $data = htmlspecialchars($data);
   return $data;
}
?>


<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 
  
   EMAIL-ID: <input type="email" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br> 
   PASSWORD: <input type="password" name="password">
   <span class="error">* <?php echo $passwordErr;?></span>
   <br><br> 
   CONFIRM PASSWORD: <input type="password" name="cpassword">
   <span class="error">* <?php echo $cpasswordErr;?></span>
   <br><br> 
  
   
  
   <input type="submit" name="submit" value="Submit"> 
   
</form>

<?php

//$pass=$_POST['password'];
//$enpass=md5($pass);
?>
<?php
if (isset($_POST['submit'])) {
  
  if($_POST['cpassword']==$_POST['password'] && $nameErr == ""&& $emailErr=="" && $passwordErr=="" && $cpasswordErr=="" ){
  
  $pass=$_POST['password'];
$enpass=md5($pass);
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


//$sql = "INSERT INTO learner(name,address,phone,email,password,learn,domain)
//VALUES ('$_POST[name]', '$_POST[address]','$_POST[phone]' ,'$_POST[email]', '$enpass','$_POST[learn]','$_POST[domain]')";
$sql = "SELECT * from learner where email='$_POST[email]' and password='$enpass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "successful login";
    echo "<br></br>";
   // echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      // echo "<tr><td>".$row["domain"]."</td><td>".$row["learn"]." ".$row["name"]."</td></tr>";
    $dom=$row['domain'];
    // echo $dom;
     $ler=$row['learn'];
     //echo $ler;
     $sql1 = "SELECT * from teacher where domain='$dom' OR teach='$ler'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    echo "According to your interest of domain and learning";
     echo "<br></br>";
     echo "Here are the teacher details <br></br>";
   //echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
       //echo "<tr><td>".$row1["domain"]."</td><td>".$row1["teach"]." ".$row1["name"]."</td></tr>";
    echo "NAME :".$row1["name"]."<br></br> ADDRESS:".$row1["address"]. "<br></br>PHONE NO:".$row1["phone"]. "<br></br>EMAIL ID:".$row1["email"]. "<br></br>LINKED IN:".$row1["linkedin"]. "<br></br>SHE WANTS TO TEACH:".$row1["teach"]. "<br></br>HER RECOMMENDATIONS:".$row1["recommendation"]. "<br></br>HER DOMAIN:".$row1["domain"]. "<br></br>REQUIRES :".$row1["pay"]."<br></br>" ;
     $name=$row['name'];
     $sql2="SELECT * from review where teacher_name='$name'";
     $result2=$conn->query($sql2);
     if ($result2->num_rows > 0) {
       while($row2 = $result2->fetch_assoc()) {
          echo "RATING:".$row2["rating"]."<br></br>FEEDBACK:".$row2["comments"]. "<br></br>" ;
         
       }
     }
     
  //echo "successful login";
  
    }
}
   // echo "</table>";
 else {
    echo "0 results";
}
     
     
  //echo "successful login";
  
    }
}
   // echo "</table>";
 else {
    echo "0 results";
}

//if ($conn->query($sql) === TRUE) {
 //   echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
 
  

$conn->close();
echo "<a href='loginl2.php'>EXPLORE</a>";
}
}

else{ //echo "confirm password not same";
}

?>



</body>
</html>
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