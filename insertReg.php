<?php

session_start();
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","db");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}

$cn=mysqli_connect("localhost","root","","db");

if(isset($_POST["signup"]))
{
	$cn=makeconnection();
    
    $password= password_hash($_POST["password"], PASSWORD_DEFAULT);
	$s="insert into login_info(user_id,password,user_name,contact_no) values('" . $_POST["email"] ."','" . $password ."','" . $_POST["username"] ."','" . $_POST["contact_number"] ."')";
    

	if(mysqli_query($cn,$s)){
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["user"]= $_POST["username"];
        header("location:newpage.html");
        
    }
    else{
        echo("Error: " . mysqli_error($cn));
    }
	mysqli_close($cn);
	//echo "<script>alert('Record Saved'); window.history.go(-2);</script>";

	
}

?>
    