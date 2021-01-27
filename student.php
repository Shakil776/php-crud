<?php

class Student{

	protected $db_connection;
	public function __construct(){
		$host_name = 'localhost';
		$user_name = 'root';
		$password  = '';
		$db_name   = 'myschool';

		$this->db_connection = mysqli_connect($host_name, $user_name, $password, $db_name);
		if (!$this->db_connection) {
			die('Database connection failed'.mysqli_error($this->db_connection));
		}
	}

	public function save_student_info($data){
		$sql = "INSERT INTO tbl_student_info (stu_name, stu_email, stu_mobile, stu_address) VALUES ('$data[stu_name]','$data[stu_email]','$data[stu_mobile]','$data[stu_address]')";

		if(mysqli_query($this->db_connection, $sql)){
			$message = "Student information save successfully";
			return $message;
		}
		else{
			die('Query problem'.mysqli_error($this->db_connection));
		}
	}

	public function select_all_student_info(){
		$sql = "SELECT * FROM tbl_student_info";

		if(mysqli_query($this->db_connection, $sql)){

			$query_result = mysqli_query($this->db_connection, $sql);
			return $query_result;
		}
		else{
			die('Query problem'.mysqli_error($this->db_connection));
		}
	}

	public function select_student_info_by_id($student_id){
		$sql = "SELECT * FROM tbl_student_info WHERE stu_id = $student_id";

		if(mysqli_query($this->db_connection, $sql)){

			$query_result = mysqli_query($this->db_connection, $sql);
			return $query_result;
		}
		else{
			die('Query problem'.mysqli_error($this->db_connection));
		}
	}
	
	public function update_student_info($data){
		$sql = "UPDATE tbl_student_info SET stu_name='$data[stu_name]', stu_email='$data[stu_email]', stu_mobile='$data[stu_mobile]', stu_address='$data[stu_address]' WHERE stu_id='$data[stu_id]'";
		
		if(mysqli_query($this->db_connection, $sql)){
			header('Location: view_student_info.php');
			
		}
		else{
			die('Query problem'.mysqli_error($this->db_connection));
		}
	}
	

}

?>