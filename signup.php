<?php
$signup_First_Name = $_POST['firstName'];
$signup_Last_Name = $_POST['lastName'];
$signup_Password = $_POST['password'];
$signup_email = $_POST['email'];
$phone=$_POST['phone'];

$con = new mysqli("localhost", "root", "", "log");
if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    $insert_query = $con->prepare("INSERT INTO client (firstname, lastname, phone, email, password) VALUES ( ?, ?, ?, ?, ?)");
    $insert_query->bind_param("sssss", $signup_First_Name, $signup_Last_Name,$phone, $signup_Password,$signup_email);
    $insert_query->execute();
    header("Location:login.html");
}
?>


