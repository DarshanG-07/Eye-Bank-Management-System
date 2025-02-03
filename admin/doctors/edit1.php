<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$fname = $_POST['firstname'];
					    $lname = $_POST['lastname'];
						$mname = $_POST['bloodgroup'];
						$address = $_POST['address'];
						$contct = $_POST['contact'];
						$comment = $_POST['email'];
						$dob = $_POST['dob'];
						$gender = $_POST['gender'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE donar set fullname ="'.$fname.'",
					lastname ="'.$lname.'", bloodgroup="'.$mname.'",
					address="'.$address.'",contact='.$contct.', 
					email="'.$comment.'", 
					dob="'.$dob.'", 
					gender="'.$gender.'" WHERE
					id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "/eye/admin/?page=doctors";
		</script>
 </body>
</html>