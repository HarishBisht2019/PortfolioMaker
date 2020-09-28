
     
<style>
    .topnav {
	overflow: hidden;
/*    background: linear-gradient(to right, #c04848, #480048);*/
	background-color:transparent;
	height: 60px;
    scroll-behavior: smooth;
}

.topnav .logo {
	float: left;
	position: absolute;
	left: 25px;
	;
}
.login {
	float: right;
	overflow: hidden;
}

.topnav a, .login .login_btn{
	float: right;
	color: #f2f2f2;
	text-align: center;
	padding: 20px 20px;
	text-decoration: none;
	font-size: 17px;
	font-weight: 800;
    z-index: 500;
}
.login_form {
  	display: none;
	padding: 20px;
  	position: absolute;
	top: 62px;
	right: 10px;
  	background-color: transparent;
  	min-width: 160px;
  	box-shadow: 0px 8px 8px 0px #222;
  	z-index: 1;
	text-align: center;
	border-bottom-left-radius: 4px;
	border-bottom-right-radius: 4px;
}

.login_form input
{
   padding: 15px;
	margin: 10px;
	background:#eee;
    text-decoration: none;
    display: block;
	box-shadow: 2px #222;
	border: none;
   border-radius: 2px;
}
.login_form input[type="submit"]{
	display: inline-block;
	border-radius: 5px;
	padding: 10px 20px;
	background: #f7be16;
	color: #fff;
	font-weight: 600;
}
.login_form input:hover{
	box-shadow: 0px 8px 8px 0px #222;
}
.login_form input[type="submit"]:hover
{
	background: #00818a;
	cursor: pointer;
}
.topnav a:hover, .login:hover {
	color: #ff2e63;
	background-color: #999;
}

.topnav a:active {
	background-color: #4CAF50;
	color: white;
}

.show{
	display: block;
}

.login:active, .login:focus .login_form{
	display: block;

</style>
 <link rel="shortcut icon" href="images/logo/output-onlinepngtools.png"> 

<div class="login">
     
     
  	<a href="#" class="login_btn" onclick="myFunction()">Login</a>
  	<form action="login.php" id="login_id" class="login_form" method="POST">
  		<input type="email" name="t1" placeholder="your email" required>
  		<input type="password" name="t2" placeholder="password" required>
  		<input type="submit" name="submit" value="login">
  	</form>
  </div>
  
 
  
  <div class="topnav">
      <a href="#popup" class="pop_register">Register</a>
  
  <a href="#section-5">Contact</a>
  <a href="#about">About</a>
  <a class="logo" href="index.php"> <img class="img-square img-responsive img-center" src="images/logo/output-onlinepngtools.png" width="120" height="100" alt=""></a>
<!--  <a class="logo" href="index.php">Logo</a>-->
  </div>
 <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("login_id").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.login_btn')) {
    var dropdowns = document.getElementsByClassName("login_form");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

$('.login_form input').click(function(e){
    e.stopPropagation();
});
</script>