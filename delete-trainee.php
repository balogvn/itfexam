<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Delete Trainee - ITF Trainees</title>

    <link rel="canonical" href="">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fontawesone CSS -->
    <link href="css/all.min.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
    
  <?php include_once('includes/header.php');?>

  <div class="container-fluid">
    <div class="row">
      
      <main class="col-md-4 mx-auto">
        <div class="h-100 p-5 text-white bg-danger rounded-3">
          <h2>Delete Trainee</h2>
          <p>Are you sure you want to delete this trainee?</p>
		  <form>
			<button type="submit" class="btn btn-outline-dark" type="button">YES</button>
			<a href="trainees.php" class="btn btn-outline-light" type="button">NO</a>
		  </form>
        </div>
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
    
  </body>
</html>
