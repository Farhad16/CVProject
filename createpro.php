<?php
include('database.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$address = $_POST['address'];
$age = $_POST['age'];
if ($name == "" || $email == "" || $phone == "" || $gender == "" || $religion == "" || $address == "" ) {
    header("Location: http://localhost/project/lib/infochng.php");
} else{
    $sql = "INSERT INTO proinfo (name, email, phone, gender, religion, address, age) VALUES ('$name', '$email','$phone','$gender','$religion','$address','$age')";
    // echo $sql;
    mysqli_query($conn, $sql);
    header("Location: http://localhost/project/lib/profile.php?email=" . $email);
    mysqli_close($conn);
    // new comment here
}

?>