


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body style="background-color: rgb(204, 220, 223);">
    <div class="container">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3 style="text-align: center; padding: 10px">Login </h3>
                            <form class="requires-validation" novalidate>
    
                                <div class="col-md-12 pb-2">
                                    <input class="form-control" type="email" name="email" placeholder="User name" required>
                                     <div class="valid-feedback">Username is valid!</div>
                                     <div class="invalid-feedback">User name cannot be blank!</div>
                                </div>
    
    
                               <div class="col-md-12 pb-3">
                                  <input class="form-control" type="password" name="password" placeholder="Password" required>
                                   <div class="valid-feedback">Password field is valid!</div>
                                   <div class="invalid-feedback">Password field cannot be blank!</div>
                               </div>
    
    

    
                            <div class="form-check">
                              <label class="form-check-label">I don't have account</label>
                              <a href="#">Register</a>
                            </div>
    
                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary form-control">Login</button>
                                </div>
                            </form>

                            <!---Make Connecction witth Database-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
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