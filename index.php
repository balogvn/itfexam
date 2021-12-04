<?php 
require_once 'server/connection.php';
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
$rows = [];
if($result) {
	$rows = $result;
}else{
	die('Sorry, something went wrong: '. mysqli_error($conn));
}
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
      
      <main class="mx-auto">
        <div class="position-relative overflow-hidden p-3 px-md-5 py-md-3 mb-md-3 text-center bg-light">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal text-danger">International Students Academy</h1>
            <p class="lead fw-normal">Motto: Excellence and Service.</p>
          </div>
          <div class="product-device shadow-sm d-none d-md-block"></div>
          <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        
        <div class="col-12 col-md-10 mx-auto card p-5">
          <h3>List of students</h3>
          <div><a href="add.php">Add Student</a></div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>


                  
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col" class="text-center" width="15%">Action</th>
                </tr>
              </thead>
              <tbody>
                
              <?php while($row = mysqli_fetch_array($rows)){?>
				<tr>


					  <td><?php echo $row['first_name']?></td>
					  <td><?php echo $row['last_name']?></td>
					  <td>
						<a href="update.php?id=<?php echo $row['id']?>">Edit</a>
						<a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
					</td>
				</tr>
			<?php }?>





                
              </tbody>
            </table>
          </div>
        </div>


        <div class="col-12 col-md-10 mx-auto card p-5">
          <h3>List of courses</h3>
          <div><a href="server/addcourse.php">Add Course</a></div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Course code</th>
                  <th scope="col">Course title</th>
                  <th scope="col" class="text-center" width="15%">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>random</td>
                  <td>data</td>
                  <td>
                    <a href="course-participants.php" class="btn btn-dark btn-sm">View Participants</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>placeholder</td>
                  <td>irrelevant</td>
                  <td>
                    <a href="course-participants.php" class="btn btn-dark btn-sm">View Participants</a>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>

        
      </main>
      
      <footer class="my-5 pt-5 text-muted text-center text-small border-top">
        <p class="mb-1">&copy;copyright Kayode Balogun 2021</p>
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
