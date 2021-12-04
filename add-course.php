<?php

require_once('server/connection.php');
require_once('server/save-course.php');


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Add Course - ITF Trainees</title>

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
          <h1 class="h2">Add Course</h1>
        </div>

        <form  method="post" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-12">
              <label for="code" class="form-label">Course code</label>
              <input type="text"  name = "code" class="form-control" id="code" placeholder="Code" required>
              <div class="invalid-feedback">
                Please enter course code.
              </div>

              <div class="row g-3">
            <div class="col-12">
              <label for="title" class="form-label">Course Title</label>
              <input type="text" name = "title" class="form-control" id="title" placeholder="Title" required>
              <div class="invalid-feedback">
                Please enter course title.
              </div>
            </div>
			<div class="col-12">
              <label for="description" class="form-label">Course Description</label>
              <textarea class="form-control" name = "description" id="description" placeholder="Description" required></textarea>
              <div class="invalid-feedback">
                Please enter course description.
              </div>
            </div>
          </div>
		  
          <hr class="my-4">

          <button class="w-100 btn btn-danger btn-lg" name="save_course_btn" type="submit">Save Course</button>
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
