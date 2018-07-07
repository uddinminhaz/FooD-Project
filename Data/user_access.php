<?php
	if(require_once("../Data/db.php")){
	
		function searchUser($uname){
			global $conn;
			$query="SELECT * FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
		}
		
		function addUser($name,$uname,$pass,$email,$mblno,$add,$type){
			
			global $conn;

			$query="INSERT INTO user(name, uname, pass, email, mblno, address, type) VALUES ('$name','$uname','$pass','$email','$mblno','$add','$type')";
		 	$result=mysqli_query($conn,$query);
			
			
			return $result;
		}
		function updateUser($uname,$name,$email,$mblno,$add){
			global $conn;
			$query="UPDATE user SET name='$name', email='$email', mblno='$mblno', address='$add' WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return searchUser($uname);
		
		}
		
		function deleteUser($uname){
			global $conn;
			$query="delete FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return $result;
		}
		
		
	}else{
		echo "Database not found";
	}
	
?>