<?php
	require 'connect.php';
	if(isset($_POST["submit"]))
	{
		
	$username = $_POST["username"];
	$pass = hash("sha256",$_POST["pass"]);
	$q1 = "select * from register where username='$username' AND pass='$pass'";
	$res = $con->query($q1);
	if(mysqli_num_rows($res)==1)
	{
	
		$username = "username";
		$r = $res->fetch_assoc();		
		setcookie($username,$r["username"]);
		echo "<script>window.location = 'index.php';</script>";
	}
	}
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Stalinist+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body {
  background-image: url("bg.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font-family: Arial, Helvetica, sans-serif;
  overflow:hidden;
}

.overlay{
width:100%;
height:93%;
position:absolute;
background-color:black;
opacity:0.7;
padding-top
}
.mobile-container {
  max-width: 100%;
  margin: auto;
  color: white;
}

.topnav {
  overflow: hidden;
  background-color: #004d1a;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a.icon {
  background: #004d1a;
  display: block;
  position: absolute;
  right: 0;
  height:58px;
  top: 0;
}
.topnav a.icon:hover {
background: #004d1a;
  color:white;
}
.topnav a:hover {
  background-color: #006622;
  transform:scale(0.97);
  transition:all 0.5s;
}

.active {
  background-color: #4CAF50;
  color: white;
  cursor:default;
  height:50px;
  font-weight:bold;
  padding-left:76px !important;
  font-family: 'Stalinist One', cursive;
  font-size:20px !important;
}
.active:hover{
  background-color: #4CAF50 !important;
  color: white !important;
  transform:scale(1) !important;
  
}
.box{
text-align:center;
padding:20px;
color:black;
}
.fa-user{
font-size:60px;
color:white;
}
.textbox{
text-align:center;
}
input[type=submit]{
color:black;
outline:none !important;
}
.textbox{
border:none;
width:250px;
margin-bottom:10px;
outline:none;
padding:5px;
border-radius:5px;
}
.textbox:hover{
box-shadow:inset 0px 0px 5px grey;
}
p{
color:white;
}
input[type=radio]{
font-size:30px !important;
}
.img{
margin-top:-10px;
}
.guitarspace{
padding-left:100px;
}
.udne{
display:none;
}
#signout{
    display:none;
}
</style>
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>

</head>
<body>
<!-- Simulate a smartphone / tablet -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
 
  <a href="#" class="active"> Rock & Roll</a>
  
  <div id="myLinks">
      <a href="index.php">Home</a>
      <a href="about.html">About</a>
      <a href="register.html">Register</a>
      <a href="login.php" id="signin">Login</a>
      <a href="#signout" id="signout" onclick="signout()">Signout</a>
    </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i id="icon" class="fa fa-bars"></i>
  </a>
</div>
<div class="overlay">
</div>
<div class="col-lg-3 guitarspace">
<img src="guitor.png" ></img>
</div>
<div class="box col-lg-9">
	<i class="fa fa-user" aria-hidden="true"></i>
	<br><br>
	<p class="udne">user doesnot exists</p>
	<form id="f2" name="f2" method="post">
		<input type="text" name="username" class="textbox" placeholder="Username" required><br><br>
		<input type="password" name="pass" class="textbox" placeholder="Password" required><br><br>
		<input type="submit" name="submit" class="btn btn-success" style="color:white" value="Login"><br>

	</form>
</div>

<!-- End smartphone / tablet look -->
</div>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    $('#myLinks').hide(500);
	$("#icon").toggleClass("fa-times");
	$("#icon").toggleClass("fa-bars");
  } else {
    $('#myLinks').show(500);
	$("#icon").toggleClass("fa-times");
	$("#icon").toggleClass("fa-bars");
  }
}
function signout()
				{
					alert("Confirm logout ?");
					document.cookie="username=no";
					$('#signout').hide();
					$('#signin').show();
				}
				if(getCookie("username")!="no"){
				    $('#signout').show();
					$('#signin').hide();
				}
				else{
				    $('#signout').hide();
					$('#signin').show();
				}
        function getCookie(cname) {
				var name = cname + "=";
				var decodedCookie = decodeURIComponent(document.cookie);
				var ca = decodedCookie.split(';');
				for(var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') {
					c = c.substring(1);
					}

				    if(c.indexOf(name) == 0) {
				    	return c.substring(name.length, c.length);
				    }
				    }
				    return null;
				}
	$(".hea").click(function() { window.location = "index.php"; })
</script>

</body>
</html>
