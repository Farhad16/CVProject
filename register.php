<!DOCTYPE html>
<html lang="en">
<body>
<?php
    include ('head.php');
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>User Registration</h2>
        </div>
       <div class="panel-body">
           <div style="max-width:500px; margin: 0 auto;">
                <form action="regdatains.php" method="POST"><span id="demo"></span>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" />
                    </div> <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" id="phone" name="phone" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                            <label class="radio-inline">
                            <input type="radio" name="gender" value="Male"checked>Male
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="gender"  value="Female">Female
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="gender"  value="Other">Other
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="religion">Religion</label>
                        <input type="text" id="religion" name="religion" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" />
                    </div>
                    <button type="submit" name="register" class="btn btn-success">Submit</button>
                </form>
           </div>
       </div>
<?php
    include ('footer.php');
?>
</body>
</html>
