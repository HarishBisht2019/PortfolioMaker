<?php 
session_start();
$_SESSION['loginstatus']="";
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
if(isset($_POST["submit"]))
{
	$cn=makeconnection();
    $s1="select * from login_info where user_id='". $_POST["t1"] ."'";
    $x=mysqli_query($cn,$s1);
    $row=mysqli_fetch_array($x);

	if(password_verify($_POST["t2"],$row[1]))
	{
		$_SESSION["User_id"]= $_POST["t1"];
		$_SESSION["user"]=$row[2];
		$_SESSION['loginstatus']="yes";
        //echo ("<script>alert('". $_SESSION["user"]. "');</script>");
		header("location:newpage.html");
       
        
	}
	else
	{
	echo "<script>alert('Invalid User Name or Password');</script>";
    }
    mysqli_close($cn);
}
?>