<?php
	require_once('server/connection.php'); // import connection file
	$firstName = '';
	$lastName = '';
	
	if(isset($_POST['submit'])){
		$firstName = $_POST['first_name'];
		$lastName = $_POST['last_name'];
		

		$sql = "INSERT INTO students
				(first_name, last_name)VALUES
				('{$firstName}', '{$lastName}')";

		$stm = mysqli_prepare($conn, $sql);
		if($stm) {
			mysqli_stmt_execute($stm);
			header('location: index.php');
		}else{
			die('Sorry, something went wrong: '. mysqli_error());
		}
	}
?>
<!doctype>
<html>
	<head>
		<title>Add student</title>
		<style>
			div {margin-bottom: 10px;}
		</style>
	</head>
	<body>
		<h3>Add student</h3>
		<form method="POST">
			<div>
				<label for="firstName">First Name</label> <br />
				<input id="firstName" type="text" name="first_name" />
			</div>
			<div>
				<label for="lastName">Last Name</label><br />
				<input id="lastName" type="text" name="last_name" />
			</div>
			<div>
				<button type="submit" name="submit">Submit Form</button>
			</div>
		</form>
	</body>
</html>
