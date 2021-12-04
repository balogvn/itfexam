<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Participants - ITF Trainees</title>

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
          <h1 class="h2">Trainings</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="add-training.php" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-circle"></i> Add Training</a>
            </div>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Course Code</th>
                  <th scope="col">Course TItle</th>
                  <th scope="col">Faculty</th>
                  <th scope="col">Type</th>
                  <th scope="col">Venue</th>
                  <th scope="col">Days</th>
                  <th scope="col">Starts</th>
                  <th scope="col" class="text-center" width="5%">No. of Participants</th>
                  <th scope="col" class="text-center" width="20%">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>random</td>
                  <td>data</td>
                  <td>data</td>
                  <td>data</td>
                  <td>data</td>
                  <td>data</td>
                  <td>data</td>
                  <td class="text-center">50</td>
				  <td>
					<a href="edit-training.php" class="btn btn-primary btn-sm">Edit</a>
					<a href="delete-training.php" class="btn btn-danger btn-sm">Delete</a>
					<a href="course-participants.php" class="btn btn-warning btn-sm">View</a>
				  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>placeholder</td>
                  <td>irrelevant</td>
                  <td>irrelevant</td>
                  <td>irrelevant</td>
                  <td>irrelevant</td>
                  <td>irrelevant</td>
                  <td>irrelevant</td>
                  <td class="text-center">88</td>
				  <td>
					<a href="edit-training.php" class="btn btn-primary btn-sm">Edit</a>
					<a href="delete-training.php" class="btn btn-danger btn-sm">Delete</a>
					<a href="course-participants.php" class="btn btn-warning btn-sm">View</a>
				  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>data</td>
                  <td>rich</td>
                  <td>rich</td>
                  <td>rich</td>
                  <td>rich</td>
                  <td>rich</td>
                  <td>rich</td>
                  <td class="text-center">40</td>
				  <td>
					<a href="edit-training.php" class="btn btn-primary btn-sm">Edit</a>
					<a href="delete-training.php" class="btn btn-danger btn-sm">Delete</a>
					<a href="course-participants.php" class="btn btn-warning btn-sm">View</a>
				  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>information</td>
                  <td>placeholder</td>
                  <td>placeholder</td>
                  <td>placeholder</td>
                  <td>placeholder</td>
                  <td>placeholder</td>
                  <td>placeholder</td>
                  <td class="text-center">25</td>
				  <td>
					<a href="edit-training.php" class="btn btn-primary btn-sm">Edit</a>
					<a href="delete-training.php" class="btn btn-danger btn-sm">Delete</a>
					<a href="course-participants.php" class="btn btn-warning btn-sm">View</a>
				  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>text</td>
                  <td>random</td>
                  <td>random</td>
                  <td>random</td>
                  <td>random</td>
                  <td>random</td>
                  <td>random</td>
                  <td class="text-center">300</td>
				  <td>
					<a href="edit-training.php" class="btn btn-primary btn-sm">Edit</a>
					<a href="delete-training.php" class="btn btn-danger btn-sm">Delete</a>
					<a href="course-participants.php" class="btn btn-warning btn-sm">View</a>
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
