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
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav pull-right">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="">Logout</a></li>
        </ul>
        <ul class="nav navbar-nav pull-left">
            <li><a href="profile.php">Personal Info</a></li>
            <li><a href="login.php">Education</a></li>
        </ul>
    </div>
    </nav>
<?php
include ('database.php');
//show 
$email = $_GET['email'];
$sql = "SELECT * FROM proinfo";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) {
    if($email==$row['email']){
        $current_name = $row['name'];
        $current_email = $row['email'];
        $current_phone = $row['phone'];
        $current_gender = $row['gender'];
        $current_religion = $row['religion'];
        $current_address = $row['address'];
        $current_age = $row['age'];
        $id=$row['id'];
    }
    
}

?>
    <div class="panel panel-default">
       <div class="panel-body">
            <form action="updateinfo.php" method="POST">
                <table class="info">
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" class="form-control" value="<?php echo $current_name?>"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" class="form-control" value="<?php echo $current_email?>"></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type="number" name="phone" class="form-control" value="<?php echo $current_phone?>"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="text" name="gender" class="form-control" value="<?php echo $current_gender?>"></td>
                    </tr>
                    <tr>
                        <td>Religion:</td>
                        <td><input type="text" name="religion" class="form-control" value="<?php echo $current_religion?>"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="address" class="form-control" value="<?php echo $current_address?>"></td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td><input type="number" name="age" class="form-control" value="<?php echo $current_age?>" ></td>
                    </tr>
                    <tr>
                        
                        <td><input type="hidden" name="id" class="form-control" value="<?php echo $id;?>" ></td>
                    </tr>
                </table>
                <button type="submit" name="infochng" class="btn btn-success pos">Save</button>
            </form>
        </div>
    </div>

<?php
    include ('footer.php');
?>