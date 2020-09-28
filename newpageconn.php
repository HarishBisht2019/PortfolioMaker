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


if(isset($_POST["save"]))
{
    
	$cn=makeconnection();
   $f1=0; 
	
$target_dir = "images/profile";
	//user_photo
	$target_file = $target_dir.basename($_FILES["user_photo"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["user_photo"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["user_photo"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["user_photo"]["tmp_name"], $target_file)){
			$f1=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	
	
		if($f1>0)
		{
            $s1="insert into personal_info(user_id,user_name,linkedin,contact_no,user_dob,jobprofile,user_address,user_photo) values('" . $_SESSION["email"] ."','" . $_POST["user_name"] ."','" . $_POST["linkedin"] ."','" . $_POST["contact_no"] ."','" . $_POST["user_dob"] ."','" . $_POST["job_profile"] ."','" . $_POST["user_address"] ."','" . $fileName ."')";

		}
	
    
		    
    
   $s2="insert into about(user_id,description) values('" . $_SESSION["email"]. "','" . $_POST["about"]."')";

    $s3="insert into education(education_sn,user_id,program,uni_board,uniproject1,uniproject2,percentage,start_year,pass_year) values('" ."','" . $_SESSION["email"] ."','" . $_POST["program"] ."','" . $_POST["uni_board"] ."','" . $_POST["uniproject1"]  ."','" . $_POST["uniproject2"] ."','" . $_POST["percentage"] ."','" . $_POST["start_year"] ."','" . $_POST["pass_year"] ."')";
    

    $s4="insert into work_exp(exp_key,user_id,employer_name,designation,location,project1,project1_desc,project2,project2_desc,from_date,to_date) values('" ."','" . $_SESSION["email"] ."','" . $_POST["emp_name"] ."','" . $_POST["designation"] ."','" . $_POST["location"] ."','" . $_POST["project1"] ."','" . $_POST["project1_desc"] ."','" . $_POST["project2"] ."','" . $_POST["project2_desc"] ."','" . $_POST["from"] ."','" . $_POST["to"] ."')";
  
    $s5="insert into skills(user_id,tskill1,rate1,tskill2,rate2,tskill3,rate3,tskill4,rate4,tskill5,rate5) values ('" . $_SESSION["email"]."','" . $_POST["tskill1"]."','". $_POST["rate1"]."','" . $_POST["tskill2"]."','". $_POST["rate2"]."','" . $_POST["tskill3"]."','". $_POST["rate3"]."','" . $_POST["tskill4"]."','". $_POST["rate4"]."','" . $_POST["tskill5"]."','". $_POST["rate5"]."')";
    
    
    $s6="insert into certification(cert_id,user_id,cert_name,ins_name,issue_date) values ('" . $_SESSION["email"] ."','" . $_POST["cert_name"] ."','" . $_POST["insname"] ."','" .  $_POST["issue_date"] ."')";


   $s7="insert into interest(interest_id,user_id,interest1,interest2,interest3) values('" ."','" . $_SESSION["email"] ."','" . $_POST["hobby1"] ."','" . $_POST["hobby2"] ."','" . $_POST["hobby3"] ."')";
    
    $s8="insert into professional_skill(user_id,pskill1,pskill2,pskill3) values('" . $_SESSION["email"] ."','" . $_POST["pskill1"] ."','" . $_POST["pskill2"] ."','" . $_POST["pskill3"] ."')";



    mysqli_query($cn,$s2);
    mysqli_query($cn,$s3);
    mysqli_query($cn,$s4);
    mysqli_query($cn,$s5);
    mysqli_query($cn,$s6);
    mysqli_query($cn,$s7);
    mysqli_query($cn,$s8);
	if(mysqli_query($cn,$s1)){
        echo "<script>alert('Record Saved');";
        header("location:theme1/theme1.php");
        
    }
    else{
        echo("Error: " .mysqli_error($cn));
    }
	mysqli_close($cn);
}

	


?>