<?php
	
	$con=mysqli_connect("localhost","root","","rannaghara");

	
	if(isset($_POST['login']))
    {     

        $name = $_POST['phone']; 
        $password = $_POST['psw']; 
		$sql =  "SELECT phone, psw FROM signup WHERE phone = '".$name."' AND  psw= '".$password."'";
        $result = mysqli_query($con, $sql);

        if( mysqli_num_rows($result) > 0 )
        { 
			echo 'successfully login';
			header("location:index.php");
        }
        else
        {
                    header("location:twolog.php");
    
        }
	}
	


?>