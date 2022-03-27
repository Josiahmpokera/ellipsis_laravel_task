<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <style>
        ul li {
            margin: 10px;
            padding: 10px;
            background-color: white;
            width: 200px;
            color: black;
            list-style: none;
            border-radius: 3px;
        }

        ul a {
            text-decoration: none;
            color: black;
        }
        ul li:hover {
            backgrouond-color: grey;
        }
    </style>
</head>
<body>
    <input type="checkbox" name="" id="menu-toggle">

    <div class="sidebar">
        <div class="sidebar-container">
            <div class="brand"> 
                <h3 style="text-align: center; color: #152733">
                    Ellipse
                </h3>
            </div>

            <div class="avartar-wrapper">
                <div class="avatar-info">
                </div>
                
                <div class="sidebar-card mt-5">
                    <img src="" alt="">
                    <div>
                        <h4>Manages Users</h4>
                        <p>View, edit and delete data</p>
                    </div>
                    <ul style="margin: 10px">
                        <a href="dashboard.php"><li>View Users</li></a>
                        <a href="#"><li>Manage Users</li></a>
                        <a href="#"><li>Add users</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-container" style="background-color: white>
        <header style="padding: 10px;">
            <div class="row">
               <div class="p-3 col-md-9">
                   <h5 style="color: white">Analytics</h5>
               </div>
               <div class="p-3 col-md-3">
                   <h6 style="color: white"><a href="#" style="text-decoration: none; color: #e9eefd;">Josephine Michael</a></h6>
               </div>
            </div>
        </header>

        <div class="jumbotron" style="background-color: #e9eefd; padding: 25px">
            <h3>View User</h3>
        </div>

        <div class="jumbotron p-5" style="background-color: white">
            <table class="table table-bordered">
                <thead class="thead-dark" style="background-color: #152733; color: white; padding: 10px">
                    <tr>
                        <th>User ID</th>
                        <th>Full Name</th>
                        <th>Email address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                     $conn = mysqli_connect('localhost', 'root', '', 'ellipse_db');
                    if(isset($_GET['del'])){
                        $del_id = $_GET['del'];
                        $delete = "DELETE FROM user WHERE user_id='$del_id'";
                        $run_delete = mysqli_query($conn, $delete);
                        if($run_delete === true){
                                echo "Record Has been Deleted";
                        } else {
                            echo "Faied to delete the record";
                        }
                    }




                     $select = "SELECT * FROM user";
                     $run = mysqli_query($conn, $select);
                     while ($row_user = mysqli_fetch_array($run)){
                     $user_id = $row_user['user_id'];
                     $user_name = $row_user['user_name'];
                     $user_email = $row_user['user_email'];
                     $user_passwrd = $row_user['user_password']

                ?>
                    <tr>
                        <td><?php echo $user_id ?></td>
                        <td><?php  echo $user_name ?></td>
                        <td><?php echo $user_email ?></td>
                            <td>
                                <div class="input-group btn-group-sm">
                                <a href="dashboard.php?del=<?php echo $user_id ?>" class="btn btn-danger">Delete</a>
                                <a href="edit.php?edit=<?php echo $user_id ?>" class="btn btn-secondary">Edit</a>
                                </div>
                            </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>