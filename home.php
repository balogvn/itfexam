
<?php

require_once('server/connection.php');
require_once('server/list-courses.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Training courses - ITF Trainees</title>

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
          <h1 class="h2">Training courses</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="add-course.php" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-circle"></i> Add Course</a>
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
                <th scope="col" width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
              
              <?php while($row = mysqli_fetch_array($rows)){?>
			  	<tr>

          <td></td>     
					<td><?php echo $row['code']?></td>
					<td><?php echo $row['title']?></td>
					
					<td>
						<a href="edit-course.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm" >Edit</a>
						<a href="delete-course.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			        <?php }?>
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
