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

    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
    
  <?php include_once('includes/header.php');?>

  <div class="container-fluid">
    <div class="row">
      
      <main class="col-md-9 mx-auto card">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Students List</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="add-trainee.php" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-circle"></i> Add Trainee</a>
            </div>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>

                <th scope="col">#</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col" width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>random</td>
                <td>data</td>
                <td>
                  <a href="edit-trainee.php" class="btn btn-primary btn-sm">Edit</a>
                  <a href="delete-trainee.php" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>placeholder</td>
                <td>irrelevant</td>
                <td>
                  <a href="edit-trainee.php" class="btn btn-primary btn-sm">Edit</a>
                  <a href="delete-trainee.php" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>data</td>
                <td>rich</td>
                <td>
                  <a href="edit-trainee.php" class="btn btn-primary btn-sm">Edit</a>
                  <a href="delete-trainee.php" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>information</td>
                <td>placeholder</td>
                <td>
                  <a href="edit-trainee.php" class="btn btn-primary btn-sm">Edit</a>
                  <a href="delete-trainee.php" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>text</td>
                <td>random</td>
                <td>
                  <a href="edit-trainee.php" class="btn btn-primary btn-sm">Edit</a>
                  <a href="delete-trainee.php" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
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
