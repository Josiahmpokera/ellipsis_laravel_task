<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Register</title>
</head>
<body style="background-color: rgb(204, 220, 223);">
    <div class="container">
        <Form method="post" enctype="multipart/form-data">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3 style="text-align: center; padding: 10px">Register Today</h3>
                            <p style="text-align: center;">Fill in the data below.</p>
                            <form class="requires-validation" novalidate>
                                <div class="col-md-12">
                                   <input class="form-control" type="text" name="full_name" placeholder="Full Name" required>
                                   <div class="valid-feedback">Username field is valid!</div>
                                   <div class="invalid-feedback">Username field cannot be blank!</div>
                                </div>
    
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="user_email" placeholder="E-mail Address" required>
                                     <div class="valid-feedback">Email field is valid!</div>
                                     <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>
    
    
                               <div class="col-md-12 pb-2">
                                  <input class="form-control" type="password" name="user_password" placeholder="Password" required>
                                   <div class="valid-feedback">Password field is valid!</div>
                                   <div class="invalid-feedback">Password field cannot be blank!</div>
                               </div>
    
    
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                              <label class="form-check-label">I confirm that all data are correct</label>
                             <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div>
                      
    
                                <div class="form-button mt-3">
                                    <input id="submit" type="submit" name="submit" class="btn btn-primary form-control" >
                                </div>
                         
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </Form>
    
    </div>



</body>

<script>
    (function () {
'use strict'
const forms = document.querySelectorAll('.requires-validation')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()



</script>

</html>