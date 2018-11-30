<?php
    include ('head.php');
    include ('database.php');
    //show 
    $email = $_GET['email'];

    $sql = "SELECT * FROM Users";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)) {
        if($email==$row['email']){
            $current_Name = $row['name'];
            $current_userName = $row['username'];
            $current_useremail = $row['email'];
        }
        
    }
?>
    <div class="panel panel-default">
    <div class="panel-heading">
            <h2>User Profile<span class="pull-right"><strong><a href="index.php" class="btn btn-primary">Back</a>
            </strong></span></h2>
        </div>
       <div class="panel-body">
           <div style="max-width:500px; margin: 0 auto;">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" value=<?php echo $current_Name;?>>
                    </div> 
                    <div class="form-group">
                        <label for="email">User Name</label>
                        <input type="text" id="username" name="username" class="form-control" value=<?php echo $current_userName;?>>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" class="form-control" 
                        value=<?php echo  $current_useremail;?>>
                    </div>
                    <button type="submit" name="register" class="btn btn-success">Submit</button>
                </form>
           </div>
       </div>
<?php
    include ('footer.php');
?>