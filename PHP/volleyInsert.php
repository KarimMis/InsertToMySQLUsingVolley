
<?php
$servername = "127.0.0.1";
$dbusername = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $dbusername, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  $username =$_POST['username'];
 $email =$_POST['email'];
 $password =$_POST['password'];


    $sql_query = "insert into person (username,email,password) values('$username','$email','$password');";
   
	if ($conn->multi_query($sql_query) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	

$conn->close();
?>