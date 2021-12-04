<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Edit Training - ITF Trainees</title>

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
          <h1 class="h2">Update Training</h1>
        </div>

        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-12">
              <label for="course" class="form-label">Select Course</label>
              <select class="form-control" id="course" required>
                <option value=""> -- Select a course --</option>
                <option value="1">List of courses</option>
              </select>
              <div class="invalid-feedback">
                Please select course.
              </div>
            </div>
			<div class="col-12">
              <label for="faculty" class="form-label">Select Faculty</label>
              <select class="form-control" id="faculty" required>
                <option value=""> -- Select a faculty --</option>
                <option value="Admin & Management">Admin & Management</option>
                <option value="Banking,Finance & Allied Course">Banking,Finance & Allied Course</option>
                <option value="Capacity Building for HRM">Capacity Building for HRM</option>
                <option value="Engineering, Vocational & Technical">Engineering, Vocational & Technical</option>
                <option value="Environmental,Safety,Health & Security Programme">Environmental,Safety,Health & Security Programme</option>
                <option value="Finance">Finance</option>
                <option value="Human Capacity Development Programmes">Human Capacity Development Programmes</option>
                <option value="ICT">ICT</option>
                <option value="Micro Small & Medium Enterprise">Micro Small & Medium Enterprise</option>
                <option value="Process & Prod Improvement Training">Process & Prod Improvement Training</option>
              </select>
              <div class="invalid-feedback">
                Please select faculty.
              </div>
            </div>
			<div class="col-12">
              <label for="type" class="form-label">Select Type</label>
              <select class="form-control" id="type" required>
                <option value=""> -- Select a type --</option>
                <option value="Scheduled">Scheduled</option>
                <option value="Unscheduled">Unscheduled</option>
                <option value="Modular">Modular</option>
                <option value="Long -Term VTP">Long -Term VTP</option>
                <option value="Special Intervention">Special Intervention</option>
                <option value="ITF-NECA-TSDP">ITF-NECA-TSDP</option>
                <option value="NISDP">NISDP</option>
                <option value="WOSEP">WOSEP</option>
              </select>
              <div class="invalid-feedback">
                Please select type.
              </div>
            </div>
            
            <div class="col-12">
              <label for="venue" class="form-label">Venue</label>
              <input type="text" class="form-control" id="venue" placeholder="course venue" required>
              <div class="invalid-feedback">
                Please enter training venue.
              </div>
            </div>
            
            <div class="col-6">
              <label for="starts" class="form-label">Start Date</label>
              <input type="text" class="form-control" id="starts" placeholder="Start date" required>
              <div class="invalid-feedback">
                Please enter training start date.
              </div>
            </div>
            
            <div class="col-6">
              <label for="duration" class="form-label">Duration (in days)</label>
              <input type="number" class="form-control" id="duration" placeholder="Duration" required>
              <div class="invalid-feedback">
                Please enter Duration (in days).
              </div>
            </div>
            
          </div>
		  
          <hr class="my-4">

          <button class="w-100 btn btn-danger btn-lg" type="submit">Update Training</button>
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
