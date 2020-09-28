<?php 
//include('../top_login.php');

$cn=mysqli_connect("localhost","root","","db");
if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}

//$_SESSION["email"]= 'sam28@gmail.com';
$query1 = "SELECT * FROM personal_info WHERE user_id = '" .$_SESSION["email"] ."'";
$result1 = mysqli_query($cn,$query1);
$row1 = mysqli_fetch_assoc($result1);

$query2 = "SELECT * FROM about WHERE user_id = '" .$_SESSION["email"] ."' ";
$result2 = mysqli_query($cn,$query2);
$row2 = mysqli_fetch_assoc($result2);

$query3 = "SELECT * FROM education WHERE user_id = '" .$_SESSION["email"] ."' ";
$result3 = mysqli_query($cn,$query3);
$row3 = mysqli_fetch_assoc($result3);

$query4 = "SELECT * FROM certification WHERE user_id = '" .$_SESSION["email"] ."' ";
$result4 = mysqli_query($cn,$query4);
$row4 = mysqli_fetch_assoc($result4);

$query5 = "SELECT * FROM work_exp WHERE user_id = '" .$_SESSION["email"] ."' ";
$result5 = mysqli_query($cn,$query5);
$row5 = mysqli_fetch_assoc($result5);

$query6 = "SELECT * FROM skills WHERE user_id = '" .$_SESSION["email"] ."' ";
$result6 = mysqli_query($cn,$query6);
$row6 = mysqli_fetch_assoc($result6);

$query7 = "SELECT * FROM interest WHERE user_id = '" .$_SESSION["email"] ."' ";
$result7 = mysqli_query($cn,$query7);
$row7 = mysqli_fetch_assoc($result7);

$query8 = "SELECT * FROM language WHERE user_id = '" .$_SESSION["email"] ."' ";
$result8 = mysqli_query($cn,$query8);
$row8 = mysqli_fetch_assoc($result8);

$query9 = "SELECT * FROM professional_skill WHERE user_id = '" .$_SESSION["email"] ."' ";
$result9 = mysqli_query($cn,$query9);
$row9 = mysqli_fetch_assoc($result9);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Template Design One</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="assets/favicon.ico">  
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
        
    <link id="theme-style" rel="stylesheet"  href="assets/css/orbit-2.css">
    <style type="text/css" media="print">
        @media print {
           #wrapper {-webkit-print-color-adjust: exact;}
        }

        #wrapper 
        {
          background: #4CAC9D;
          max-width: 1150px;
          margin: 0 auto;
          margin-top: 10px;
          position: relative;
          -webkit-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
          -moz-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        #container
        {
            visibility: hidden;
        }
/*
        @page {
            size:A4 landscape;
             size: 5in 11in;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
            margin: 0px;
            -webkit-print-color-adjust: exact;
        }
*/
    </style>

    
</head> 

<body>
    <div id="wrapper" class="wrapper">
        
        <div id="printableArea" media="print">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" style ="width: 120px; height: 120px; border-radius: 50%; " src= "../images/profile/<?php echo $row1["user_photo"] ?>" alt="" />
                <h1 class="name"><?php  echo $row1["user_name"] ?></h1>
                <h3 class="tagline"><?php  echo $row1["jobprofile"] ?></h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><a><?php  echo $row1["user_id"] ?></a></li>
                    <li class="phone"><i class="fas fa-phone"></i><a><?php  echo $row1["contact_no"] ?></a></li>
                    <li class="linkedin"><i class="fab fa-linkedin-in"></i><a><?php  echo $row1["linkedin"] ?></a></li>
                    <li class="address"><i class="fas fa-globe"></i><a><?php  echo $row1["user_address"] ?></a></li>
                    <li class="dob"><i class="fas fa-birthday-cake "></i><a><?php  echo $row1["user_dob"] ?></a></li>
                </ul>
            </div><!--//contact-container-->
           
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Programming Skills</h2>
                <ul class="list-unstyled interests-list">
                    <li><?php  echo $row6["tskill1"] ?> </li>
                    <li><?php  echo $row6["tskill2"] ?> </li>
                    <li><?php  echo $row6["tskill3"] ?> </li>
                    
                </ul>
            </div><!--//interests-->
            
             <div class="education-container container-block">
                <h2 class="container-block-title">Certifications</h2>
                <div class="item">
                    <h4 class="degree"><?php echo $row4["cert_name"] ?></h4>
                    <h5 class="meta"><?php  echo $row4["ins_name"] ?></h5>
                    <div class="time"><?php  echo $row4["issue_date"] ?></div>
                </div><!--//item-->
                <div class="item">
                    <?php $row4 = mysqli_fetch_assoc($result4) ?>
                    <h4 class="degree"><?php  echo $row4["cert_name"] ?></h4>
                    <h5 class="meta"><?php  echo $row4["ins_name"] ?></h5>
                    <div class="time"><?php  echo $row4["issue_date"] ?></div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            
             <div class="interests-container container-block">
                <h2 class="container-block-title">Professional Skills</h2>
                <ul class="list-unstyled interests-list">
                    <li><?php  echo $row9["pskill1"] ?></li>
                    <li><?php  echo $row9["pskill2"] ?></li>
                    <li><?php  echo $row9["pskill3"] ?></li>
                </ul>
            </div>
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li><?php  echo $row7["interest1"] ?></li>
                    <li><?php  echo $row7["interest2"] ?></li>
                    <li><?php  echo $row7["interest3"] ?></li>
                </ul>
            </div><!--//interests-->
            
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Career Profile</h2>
                <div class="summary">
                    <p><?php  echo $row2["description"] ?></p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Experiences</h2>
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?php  echo $row5["designation"] ?></h3>
                            <div class="time"><?php  echo $row5["from_date"] ?> - <?php  echo $row5["to_date"] ?></div>
                        </div><!--//upper-row-->
                        <div class="company"><?php  echo $row5["employer_name"] ?> , <?php  echo $row5["location"] ?></div>
                    </div><!--//meta-->
                    <div class="details">
                       <div class="item">
                             <span class="project-title"><a><?php  echo $row5["project1"] ?></a><br/></span><span class="project-tagline"><?php  echo $row5["project1_desc"] ?> </span>
                         </div>
                          <div class="item">
                                <span class="project-title"><a><?php  echo $row5["project2"] ?></a><br/></span><span class="project-tagline"><?php  echo $row5["project2_desc"] ?> </span>
                         </div>
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row"><?php $row5 = mysqli_fetch_assoc($result5) ?>
                            <h3 class="job-title"><?php  echo $row5["designation"] ?></h3>
                            <div class="time"><?php  echo $row5["from_date"] ?> - <?php  echo $row5["to_date"] ?></div>
                        </div><!--//upper-row-->
                        <div class="company"><?php  echo $row5["employer_name"] ?> , <?php  echo $row5["location"] ?></div>
                    </div><!--//meta-->
                    <div class="details">
                         <div class="item">
                             <span class="project-title"><a><?php  echo $row5["project1"] ?></a><br/></span>
                         </div>
                        <div class="item">
                                <span class="project-title"><a><?php  echo $row5["project2"] ?></a><br/></span>
                         </div>


                    </div><!--//details-->
                </div><!--//item-->
            
                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-archive"></i></span>Education</h2>
                
                 <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?php  echo $row3["program"] ?></h3>
                            <div class="time"><?php  echo $row3["start_year"] ?> - <?php  echo $row3["pass_year"] ?></div>
                        </div><!--//upper-row-->
                        <div class="company"><?php  echo $row3["uni_board"] ?><br/><?php  echo $row3["percentage"] ?>%</div>
                    </div><!--//meta-->
                      <div class="item">
                             <span class="project-title"><a><?php  echo $row3["uniproject1"] ?></a><br/></span>
                         </div>
                       <div class="item">
                                <span class="project-title"><a><?php  echo $row3["uniproject2"] ?></a><br/></span>
                       </div>
                        
                </div><!--//item-->
               
              
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Skills &amp; Proficiency</h2>
                <div class="skillset">        
                    <div class="item">
                        <h3 class="level-title"><?php  echo $row6["tskill1"] ?></h3>
                        <div class="progress level-bar">
                            
                            <?php
                                $num1 = $row6["rate1"]*10;
                                $num2 = $row6["rate2"]*10;
                                $num3 = $row6["rate3"]*10;
                                $num4 = $row6["rate4"]*10;
                                $num5 = $row6["rate5"]*10;
                                          
                            ?>
                            
    
    
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: <?php echo $num1 ?>%"                          aria-valuenow="<?php echo $num1 ?>" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                               
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php  echo $row6["tskill2"] ?></h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: <?php echo $num2 ?>%" aria-valuenow="<?php echo $num2 ?>%" 
                                 aria-valuemin="0" aria-valuemax="100"></div>
						</div>                              
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php  echo $row6["tskill3"] ?></h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width:  <?php echo $num3 ?>%" aria-valuenow="<?php echo $num3 ?>" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php  echo $row6["tskill4"] ?></h3>
                        <div class="progress level-bar">
							    <div class="progress-bar theme-progress-bar" role="progressbar" style="width:  <?php echo $num4 ?>%" aria-valuenow=" <?php echo $num4 ?>%" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php  echo $row6["tskill5"] ?></h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width:  <?php echo $num5 ?>%" aria-valuenow=" <?php echo $num5 ?>%" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                  
                    </div><!--//item-->
                    
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
        </div>
    </div>
<!--
 
            <input type="button" onclick="printDiv('main-wrapper')" value="print a div!" />
-->

    
    <div id ="container" class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-default btn-primary" style="margin:10px 0;" onclick="printPage()">Print</button>
    </div>
  </div>
</div>
    <script type="text/javascript">
    function printPage()
        {
            window.print();
        }</script>
      
    <link rel="stylesheet" href="../css/bootstrap.min.css">



</body>
</html> 

