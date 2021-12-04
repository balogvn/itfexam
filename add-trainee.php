<?php

require_once('server/connection.php');
require_once('server/save-trainee.php');

?>















<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Trainees - ITF Trainees</title>

    <link rel="canonical" href="">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fontawesone CSS -->
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/form-validation.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
    
  <?php include_once('includes/header.php');?>

  <div class="container-fluid">
    <div class="row">
      
      <main class="col-md-7 mx-auto card">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Trainee</h1>
        </div>

        <form method="post" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="first_name" class="form-label">First name</label>
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="last_name" class="form-label">Last name</label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email"  name="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <div class="col-6">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="number" class="form-control" id="phone"  name="phone" placeholder="09067XXXXXX" required>
              <div class="invalid-feedback">
                Please enter active phone number.
              </div>
            </div>

            <div class="col-md-6">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" id="gender"  name="gender" required>
                <option value="">Choose...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
              <div class="invalid-feedback">
                Please select an option.
              </div>
            </div>

            <div class="col-md-6">
              <label for="marital_status" class="form-label">Marital Status</label>
              <select class="form-select" name="marital_status" id="marital_status" required>
                <option value="">Choose...</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
              </select>
              <div class="invalid-feedback">
                Please provide an option.
              </div>
            </div>
          </div>
		  
          <hr class="my-4">

          <button class="w-100 btn btn-danger btn-lg" name="save_trainee_btn" type="submit">Save Trainee</button>
        </form>
      </main>
      
      <footer class="my-5 pt-5 text-muted text-center text-small border-top">
        <p class="mb-1">&copy;2021. ITF Trainees</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
        </ul>
      </footer>
    </div>
  </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/form-validation.js"></script>
  </body>
</html>
