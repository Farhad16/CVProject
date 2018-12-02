<?php
include('database.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$address = $_POST['address'];
$age = $_POST['age'];
$id = $_POST['id'];


echo $id;
    $sql = "UPDATE `proinfo` SET name='$name', email='$email', phone='$phone', gender='$gender', religion='$religion', address='$address', age='$age' WHERE id='$id'";
    // echo $sql;
    mysqli_query($conn, $sql);
    header("Location: http://localhost/project/lib/profile.php?email=" . $email);
    mysqli_close($conn);
    // new comment her

?>