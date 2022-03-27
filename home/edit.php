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
              if(isset($_GET['edit'])){
                $edit_id = $_GET['edit'];
            

               $select = "SELECT * FROM user WHERE user_id='$edit_id'";
               $run = mysqli_query($conn, $select);
               $row_user = mysqli_fetch_array($run);
               $user_name = $row_user['user_name'];
               $user_email = $row_user['user_email'];
               $user_passwrd = $row_user['user_password'];
            }



            if(isset($_POST['insert_btn'])){
                //POST the user data
            $edit_user_name = $_POST['full_name'];
            $edit_user_email = $_POST['user_email'];
            $edit_user_passwrd = $_POST['user_password'];
    
            $update = "UPDATE user SET user_name='$edit_user_name', user_email='$edit_user_email', user_password='$edit_user_passwrd' WHERE user_id=''$edit_id";
    
             $run_update= mysqli_query($conn, $update);
    
             if($run_update === true){
                 echo "Data Hase Been Inserted";
             } else {
                 echo "Failed Tyr Again";
             }
    
        }
    

            ?>


        <div class="jumbotron p-5" style="background-color: white">
            <div class="row">
                <div class="col-md-7">
                    <form action="" class="form-control">
                        <label for="#">Full Name</label>
                        <input type="text" name="user_name" class="form-control mb-4" value="<?php echo $user_name ?>">
                        <label for="#" >Email address</label>
                        <input type="text" name="user_email" class="form-control mb-4" value="<?php echo $user_email ?>">
                        <label for="#">Password</label>
                        <input type="text" name="user_password" class="form-control mb-4" value="<?php echo $user_passwrd ?>">
                        <div class="form-button mt-3 ">
                            <button id="submit" type="submit" name="insert_btn" class="btn btn-success form-control">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>



</html>