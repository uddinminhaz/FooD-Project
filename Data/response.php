
<?php
   include_once("../Data/user_access.php");
		if(isset($_GET['uname'])){
        $uname = $_GET['uname'];								
		$result=searchUser($uname);
		
		if($result==null){
			
			}else{$flag=1;
				echo "*Username already in use ";
			}
			     
    }
	

	
   
?>