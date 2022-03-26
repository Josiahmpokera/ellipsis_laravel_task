<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'ellipse_db');

    /*if(mysqli_connect_errno()){
        echo "Connection failed";
    } else {
        echo "Connection OK";
    }
    */

    if(isset($_POST['submit'])){
            //POST the user data
        $full_name = $_POST['full_name'];
        $email_address = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        $insert = " INSERT INTO user(user_name, user_email, user_password )
         VALUES ('$full_name', '$email_address', '$user_password')";

         $run_insert= mysqli_query($conn, $insert);

         if($run_insert === true){
             echo "Data Hase Been Inserted";
         } else {
             echo "Failed Tyr Again";
         }

    }




?>