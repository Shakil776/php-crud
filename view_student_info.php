<?php
	require_once 'student.php';
	$student = new Student();
	$query_result = $student->select_all_student_info();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Student Information</title> 
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

				<h1 class="text-center text-success"><!-- <?php echo $message;?> --></h1>
				<div class="well">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<th>Student ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Address</th>
							<th>Action</th>
						</tr>

						<?php 
						while($student_info = mysqli_fetch_assoc($query_result)) { ?>
						<tr>
							<td><?php echo $student_info['stu_id'];?></td>
							<td><?php echo $student_info['stu_name'];?></td>
							<td><?php echo $student_info['stu_email'];?></td>
							<td><?php echo $student_info['stu_mobile'];?></td>
							<td><?php echo $student_info['stu_address'];?></td>
							<td>
								<a href="edit_student_info.php?id=<?php echo $student_info['stu_id'];?>" class="btn btn-success" title="Edit">
									<span class="glyphicon glyphicon-edit"></span>
								</a>
								<a href="" class="btn btn-danger" title="Delete">
									<span class="glyphicon glyphicon-trash"></span>
								</a>
							</td>
						</tr>

						<?php }?>
					</table>
				</div>

			</div>
		</div>
	</div>
</body>
</html>