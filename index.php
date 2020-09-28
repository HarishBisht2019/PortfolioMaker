<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CV-Builder</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
       
       
		<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>

<script>
$(function(){
  $("#topnav").load("top.php");
});
</script>


<section id="main">
	
	<div class="main_container">
	        <img src="images/1.jpg" class="myslides">
         	<img src="images/2.jpg" class="myslides">
         	<img src="images/3.jpg" class="myslides">
         	<img src="images/4.jpg" class="myslides">
         	<img src="images/5.jpg" class="myslides">
	</div>
	<div id="topnav"></div>
	<div class="text">
		<h2 class="heading" style ="font-size:50px" >Build a resume</h2>
		<h3 class="quote" style ="font-size:40px">that will get you hired</h3>
		
	</div>
	<button class="btn"><a href="#popup">Start &rarr;</a> </button>
	
</section>
       

   
    
<script>
var myIndex1 = 0,myIndex2=0;
carousel1();
carousel2();

function carousel1() {
    var i;
    var x = document.getElementsByClassName("myslides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex1++;
    if (myIndex1 > x.length) {myIndex1 = 1}    
    x[myIndex1-1].style.display = "block";  
    setTimeout(carousel1, 6000); // Change image every 2 seconds
}
function carousel2() {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex2++;
    if (myIndex2 > x.length) {myIndex2 = 1}    
    x[myIndex2-1].style.display = "block";  
    setTimeout(carousel2, 6000); // Change image every 2 seconds
}
    
</script>
    
    <div class="popup" id="popup">
        <div class="popup_content"> 
              <div id="login-box">
                 <div class="left-box">
                 <form action="insertReg.php"  method="POST">
                     <div class="col text-center"> <h1>Sign Up</h1></div>
                    <input type ="text" name="username" placeholder="Username.." required />
                    <input type ="text" name="email" placeholder="Email ID.." required />
                    <input type ="text" name="contact_number" placeholder="Contact Number.."required />
                    <input type ="password" name="password" placeholder="Password.." required />
                    <input type ="password" name="confirm" placeholder ="Confirm Password.." required />
                    <div class="col text-center">
                    <input type="submit" name="signup" value="Sign Up"/>
                    </div>
                </form>  
                </div>
                <div class="right-box"> 
                    <a href="#main" class="popup_close"> &#10006</a>
                    <span class="signinwith">Create account using</span>
                    <button class="social facebook">Log in with Facebook</button>
                    <button class="social linkedln">Log in with Linkedln</button>
                    <button class="social google">Log in with Google</button>
                </div>
                <div class="or">OR</div>
            </div>   
        </div>
         
    </div>
        
<?php include('contact.php'); ?>
<?php include('about.php'); ?>

</body>
</html>