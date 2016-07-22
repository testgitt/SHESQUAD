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
 $nameErr =  $emailErr =  $ratingErr="";
//$password;
//$phone=0;
//$name = $address  = $phoneErr= $passwordErr= $email = $learn="";
//$flag=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "name is required";
   } else {
     $name = test_input($_POST["name"]);$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
}
	 
   }
   
  /* if (empty($_POST["address"])) {
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
   
   if (empty($_POST["rating"])){
    $ratingErr = "domain is required";
  } else {
    $rating = test_input($_POST["rating"]);
   }
   
    
   

   
}

function test_input($data) {
	$data = trim($data);
   $data = stripslashes($data);
	
   
   
   $data = htmlspecialchars($data);
   return $data;
}
?>


<p><span class="error">* required field.</span></p>

<p>Rating Your Teacher</p>
<form method="post" action="">

TEACHER NAME: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
   <br><br> 
   
   <br><br>
EMAIL-ID: <input type="email" name="email">

<span class="error">* <?php echo $emailErr;?></span>
   <br><br> 
   <br><br> 
RATING: <select name= "rating">
  <option value="one">1</option>
  <option value="two">2</option>
  <option value="three">3</option>
  <option value="four">4</option>
  <option value="five">5</option>

</select>

<span class="error">* <?php echo $ratingErr;?></span>
   <br><br> 
   <br><br> 
COMMENTS: <input type="text" name="comments">

 <br><br>

  <input type="submit" name="submit" value="Submit"> 
   
</form>

<?php
if(isset($_POST['submit']) && $nameErr=="" && $emailErr=="" && $ratingErr=="")
{
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "woman";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];
 
  $sql = "SELECT name, email FROM teacher where name = '$name' && email = '$email'";
  $result = mysqli_query($conn,$sql);
   if (mysqli_num_rows($result) > 0) {

         	$sql = mysqli_query($conn,"insert into review(teacher_name,teacher_email,rating,comments)
	VALUES ('$name', '$email', '$rating', '$comments')");
		echo "Data successfully added"; }
	else{
	echo "Teacher record doesnt exit please nominate if wanted";
	include('nominate.php');}

   
	if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";   }
   else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

?>

</body>
</html>