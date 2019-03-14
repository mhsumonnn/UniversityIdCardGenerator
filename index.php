<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Mahmudul Hasan Sumnon" content="">

    <title>ID Card Generator</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>ID Card Generator</h2>
        <!--<p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
      </div>

      <div class="row">
        <div class="col-md-12">

          <form action="generate.php" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
            
          <div class="row">
              <div class="col-md-4 mb-3">
                <label for="fullName">Full Name</label>
                <input name="fullName" type="text" class="form-control" id="fullName" placeholder="" required>
                <div class="invalid-feedback">
                  Full name is required
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="rollNumber">Roll Number</label>
                <input name="rollNumber" type="text" class="form-control" id="rollNumber" placeholder="" required>
                <div class="invalid-feedback">
                  Roll number is required
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="session">Session</label>
                <input name="session" type="text" class="form-control" id="session" placeholder="" required>
                <div class="invalid-feedback">
                  Session is required
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="class">Class</label>
                <select name="class" class="custom-select d-block w-100" id="class" required>
                  <option value="">Choose...</option>
                  <option value="BSc (Engg)">BSc (Engg)</option>
                  <option value="BBA (Hon's)">BBA (Hon's)</option>
                  <option value="BA (Hon's)">BA (Hon's)</option>
                  <option value="BSS (Hon's)">BSS (Hon's)</option>
                </select>
                <div class="invalid-feedback">
                  Select a class
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="state">Department</label>
                <select name="department" class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option value="CSE">CSE</option>
                  <option value="EEE">EEE</option>
                  <option value="ESE">ESE</option>
                  <option value="Statistics">Statistics</option>
                  <option value="Bangla">Bangla</option>
                  <option value="English">English</option>
                  <option value="Film & Media">Film & Media</option>
                  <option value="Fine Arts">Fine Arts</option>
                  <option value="Music">Music</option>
                  <option value="TPS">TPS</option>
                  <option value="AIS">AIS</option>
                  <option value="Finance & Banking">Finance & Banking</option>
                  <option value="HRM">HRM</option>
                  <option value="Anthropology">Anthropology</option>
                  <option value="Economics">Economics</option>
                  <option value="Folklore">Folklore</option>
                  <option value="Law and Justice">Law and Justice</option>
                  <option value="Local Government">Local Government</option>
                  <option value="Populations Science">Populations Science</option>
                  <option value="Public Administration">Public Administration</option>
                </select>
                <div class="invalid-feedback">
                  Select a department
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="hall">Hall Name</label>
                <select name="hall" class="custom-select d-block w-100" id="hall" required>
                  <option value="" >Choose...</option>
                  <option value="Agnibina Hall">Agnibina Hall</option>
                  <option value="Dolonchapa Hall">Dolonchapa Hall</option>
                </select>
                <div class="invalid-feedback">
                  Select a hall
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="country">Blood Group</label>
                <select name="bloodGroup" class="custom-select d-block w-100" id="country" required>
                  <option value="" >Choose...</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                </select>
                <div class="invalid-feedback">
                  Select a blood group
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">Upload Photo</span>
                </div>
                <div class="custom-file">
                  <input name="image" type="file" class="custom-file-input" accept="image/*" id="zip" required>
                  <label class="custom-file-label" for="">Choose file</label>
                </div>
                
            </div>
            <hr class="mb-4">
            
            <button name="submit" class="btn btn-primary btn-lg btn-block" type="submit">Generate ID Card</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Mahmudul Hasan Sumon</p>
        <!--<ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul> -->
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
