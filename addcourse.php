<?php
	require_once('connection.php'); // import connection file
	$code = '';
	$title = '';
	
	if(isset($_POST['submit'])){
		$code = $_POST['code'];
		$title = $_POST['title'];
		

		$sql = "INSERT INTO courses
				(code, title)VALUES
				('{$code}', '{$title}')";

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
		<title>PHP Form</title>
		<style>
			div {margin-bottom: 10px;}
		</style>
	</head>
	<body>
	
		<h3>PHP Form</h3>
		<form method="POST">
			<div>
				<label for="code">Course Code</label> <br />
				<input id="code" type="text" name="code" />
			</div>
			<div>
				<label for="title">Course title</label><br />
				<input id="title" type="text" name="title" />
			</div>
			
			<div>
				<button type="submit" name="submit">Submit Form</button>
			</div>
		</form>
	</body>
</html>
