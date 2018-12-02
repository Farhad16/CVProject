<?php
include('database.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$address = $_POST['address'];
$age = $_POST['age'];
$password = $_POST['password'];
if ($name == "" || $email == "" || $phone == "" || $gender=="" || $religion=="" || $address =="" || $age  == "" || $password=="") {
    header("Location: http://localhost/project/lib/register.php");
} else {
    $sql = "INSERT INTO proinfo (name, email, phone, gender, religion, address, age,password) VALUES ('$name', '$email','$phone','$gender','$religion','$address','$age','$password')";
    mysqli_query($conn, $sql);
    header("Location: http://localhost/project/lib/login.php");
    mysqli_close($conn);
    // new comment here
}

?>