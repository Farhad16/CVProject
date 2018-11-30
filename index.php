<?php
    include 'head.php';
    include 'user.php';
    include_once('database.php');
    $user = new user();
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>User List<span class="pull-right"><strong>Welcome</strong>Farhad</span></h2>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <th width="20%">Serial</th>
                <th width="20%">Name</th>
                <th width="20%">Username</th>
                <th width="20%">Email</th>
                <th width="20%">Action</th>

                <tr>
                    <td>01</td>
                    <td>Farhad</td>
                    <td>farhad16</td>
                    <td>fhossain389@gmail.com</td>
                    <td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Sakib</td>
                    <td>sjahus16</td>
                    <td>sff389@gmail.com</td>
                    <td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Farhad</td>
                    <td>fsdfhjdh</td>
                    <td>ghhh389@gmail.com</td>
                    <td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
                </tr>
            </table>
        </div>
    </div>
<?php
    include 'footer.php';
?>