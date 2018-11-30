<?php
    include ('database.php');
    $em    = $_POST['email'];
    $pa = $_POST['password'];
    // echo $em;
    // echo $pa;
    $sql = "SELECT `id`, `name`, `username`, `email`, `password` FROM `user`";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc( $result)){
        if($row['email']==$em && $row['password']==$pa){
            header("Location: http://localhost/project/lib/profile.php?email=" . $em);
        }else{
            header("Location: http://localhost/project/lib/login.php");
        }
        
       
    }
    mysqli_close($conn);
?>