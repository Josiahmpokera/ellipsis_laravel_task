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
                        <a href="#"><li>Add users</li></a>
                        <a href="#"><li>View Users</li></a>
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
            <h3>Update</h3>
        </div>
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


        ?>

        <div class="jumbotron p-5" style="background-color: white">
            <div class="row">
                <div class="col-md-7">
                    <form action="" class="form-control">
                        <label for="#">Full Name</label>
                        <input type="text" name="user_name" class="form-control">
                        <label for="#" >Email address</label>
                        <input type="text" name="user_email" class="form-control">
                        <label for="#">Password</label>
                        <input type="text" name="user_password" class="form-control">
                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-secondary form-control">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>