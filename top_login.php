
     
<style>
    .topnav {
	overflow: hidden;
	background-color:transparent;
	height: 60px;
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
	padding: 10px;
  	position: absolute;
	top: 62px;
	right: 10px;
  	background-color: transparent;
  	min-width: 120px;
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
	background: #555;
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


<div class="login">
      
  	<a href="#" class="login_btn" onclick="myFunction()"><?php session_start(); echo $_SESSION["user"]; ?></a>
  	<form  action="logout.php" id="login_id" class="login_form" method="POST">
  		<input type="submit" name="submit" value="logout">
  	</form>
  </div>
  <div class="topnav">
  
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a class="logo" href="index.php">Logo</a>
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