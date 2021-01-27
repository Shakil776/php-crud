<?php

$message = '';

	if(isset($_POST['submitBtn'])){
		require_once 'student.php';
		$student = new Student();
		$message = $student->save_student_info($_POST);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>HOME || Add Student Information</title> 
	<meta charset="utf-8">     
	<link rel="stylesheet" href="css/bootstrap.min.css"/>	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<hr/>
				<a href="add_student_info.php"><button class="btn btn-primary">Add Student Information</button></a>
				<a href="view_student_info.php"><button class="btn btn-primary">View All Student Information</button></a>
				<hr/>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row ">				

			<div class="col-lg-12">

				<h1 class="text-center text-success"><?php echo $message;?></h1>
				<div class="well">
					<form action="" method="post">

						<div class="form-group">
							<label>Name</label>
							<input type="text" name="stu_name" placeholder="Full Name" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" name="stu_email" placeholder="Email" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Mobile</label>
							<input type="text" name="stu_mobile" placeholder="Phone" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Address</label>
							<textarea name="stu_address" placeholder="Address" class="form-control" rows="4" required></textarea>
						</div>

						<input type="submit" name="submitBtn" class="btn btn-success btn-block" value="Save Student Information">

					</form>
				</div>

			</div>
		</div>
	</div>
</body>
</html>


