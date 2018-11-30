<?php
include('database.php');
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if ($name == "" || $username == "" || $email == "" || $password == "") {
    header("Location: http://localhost/project/lib/register.php");
} else {
    $sql = "INSERT INTO user (name, username, email, password) VALUES ('$name','$username','$email','$password')";
    mysqli_query($conn, $sql);
       //header("Location: http://localhost/project/lib/register.php");
    mysqli_close($conn);
}

?>