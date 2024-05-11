<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="log";

$conn =  new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
  die("connection failed: " . $conn->connect_error);
}

// if(isset($_POST['Submit'])){

  $username = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $check_query = "SELECT * FROM user WHERE username = '$username' AND email = '$email' AND password = '$password'";

  $check_query =$conn->query($check_query);
if($check_result->num_rows>0){
  echo "error: ";

}
else{
  $insert_query = "INSERT INTO user (username,email, password) VALUES('$username','$email','$password')";
   
  if($conn->query($insert_query) === TRUE){
    echo"success";
    header("Location:index.html");
  }
else {
  echo "error";
}
}
// }
$conn->close();
?>