<?php
	$student_id = $_GET['id'];
	require_once 'student.php';
	$student = new Student();
	$query_result = $student->select_student_info_by_id($student_id);
	$student_info = mysqli_fetch_assoc($query_result);
	
	if(isset($_POST['submitBtn'])){
		$student->update_student_info($_POST);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Student Information</title> 
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

				<h1 class="text-center text-success"></h1>
				<div class="well">
					<form action="" method="post">

						<div class="form-group">
							<label>Name</label>
							<input type="text" name="stu_name" value="<?php echo $student_info['stu_name'];?>" class="form-control">
							<input type="hidden" name="stu_id" value="<?php echo $student_info['stu_id'];?>" class="form-control">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" name="stu_email" value="<?php echo $student_info['stu_email'];?>" class="form-control">
						</div>

						<div class="form-group">
							<label>Mobile</label>
							<input type="text" name="stu_mobile" value="<?php echo $student_info['stu_mobile'];?>" class="form-control">
						</div>

						<div class="form-group">
							<label>Address</label>
							<textarea name="stu_address" class="form-control"> <?php echo $student_info['stu_address'];?></textarea>
						</div>

						<input type="submit" name="submitBtn" class="btn btn-success btn-block" value="Update Student Information">

					</form>
				</div>

			</div>
		</div>
	</div>
</body>
</html>