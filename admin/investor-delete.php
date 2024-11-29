<?php
include('db_connect.php');

if(!isset($_GET['id'])){
	echo 'id parameter is not passed';die;
} else if($_GET['id'] == ''){
	echo 'Please fill the id';die;
}

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = '$id'";

if(mysqli_query($conn,$query)){
	echo '<script>
		  	alert("Project Deleted Successfully!");
		  	window.location.href="student_projects.php";
		  </script>';
} else {
	echo '<script>
		  	alert("ERROR! Data Not be Deleted");
		  	window.location.href="investorlist.php";
		  </script>';
}
?>