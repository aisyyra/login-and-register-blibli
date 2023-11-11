<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['pass']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM login_tbl WHERE username='$uname' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['password'] = $row['password'];
            	header("Location: index.html");
		        exit();
            }else{
				header("Location: form.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: form.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: form.php");
	exit();
}