<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Register</title>
    <link rel="stylesheet" href="style.css">;
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include('database.php');
$email = $_GET['email'];

$sql = "SELECT * FROM proinfo";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) {
    if($email==$row['email']){
        $name = $row['name'];
        $email =$row['email'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $religion = $row['religion'];
        $address = $row['address'];
        $age = $row['age'];
        $id= $row['id'];
    }
    
}

    
?>    
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav pull-right">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="">Logout</a></li>
        </ul>
        <ul class="nav navbar-nav pull-left">
            <li><a href="profile.php?email=<?php echo $email;?>" >Personal Info</a></li>
            <li><a href="login.php">Education</a></li>
        </ul>
    </div>
    </nav>
    <div class="panel panel-default">
       <div class="panel-body">
           <form action="" method="POST">
                <table class="info">
                    <tr>
                        <td>Name:</td>
                        <td><?php echo $name?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $email?></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><?php echo $phone?></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><?php echo $gender?></td>
                    </tr>
                    <tr>
                        <td>Religion:</td>
                        <td><?php echo $religion?></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><?php echo $address?></td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td><?php echo $age?></td>
                    </tr>
                </table>
                <button type="submit"class="btn btn-success pos"><a href="update.php?email=<?php echo $email;?>">Update</a></button>
           </form>
       </div> 
<?php
    include ('footer.php');
?>