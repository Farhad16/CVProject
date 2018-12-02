<?php
    include ('database.php');
    $em    = $_POST['email'];
    $pa    = $_POST['password'];
    echo $em;
    echo $pa;
    $sql = "SELECT * FROM `proinfo` WHERE email='$em' and password = '$pa'"; 
    echo $sql;
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc( $result);
         if($row['email']==$em && $row['password']==$pa){
             header("Location: profile.php?email=" . $em);
         }else{
             header("Location: http:localhost/project/lib/login.php");
         }
        
    
     mysqli_close($conn);
?>