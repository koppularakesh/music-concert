<?php 
require 'connect.php';

	if(isset($_COOKIE["id"]))
		$id = $_COOKIE["id"];
	
	$q2 = "select * from concerts where id = '$id' ";
	$res3 = $con->query($q2);


?>
<html>
<head>
	<title>Event</title>
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
  overflow-x:hidden;
}
.overlay{
width:100%;
height:180%;
position:absolute;
background-color:black;
opacity:0.7;
}
.mobile-container {
  max-width: 100%;
  margin: auto;
  
  height: 100%;
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
padding:20px;
color:white	;
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
label{
font-size:45px;
color:white;
}
form p{
color:#a6a6a6;
font-size:20px;
}
ul li{
font-size:18px;
}
hr{
border:1px solid #8c8c8c;
}
form img{
border-radius:5px;
box-shadow:0px 0px 5px #b3b3b3;
 
}
.down{
margin-left:35px;
color:white;
}
form button{
margin-left:35px;
}
button a{
    color:white;
    text-decoration:none;
}
button a:hover{
    color:white;
    text-decoration:none;
}
</style>
</head>
<body>
<!-- Simulate a smartphone / tablet -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#home" class="active"> Rock & Roll</a>
  <div id="myLinks">
    <a href="#Home">Home</a>
    <a href="#About">About</a>
    <a href="register.html">Register</a>
	<a href="login.html">Login</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i id="icon" class="fa fa-bars"></i>
  </a>
</div>
<div class="overlay">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 guitarspace">
	<img src="guitor.png" ></img>
</div>
<div class="box col-lg-9 col-md-9 col-sm-9">
	<form>
		<?php while($row = $res3->fetch_assoc()) { ?>
		<img src="./pics/<?php echo $row["img"]; ?>" height="400px" width="800px"></img><br>
		<label><?php echo $row["name"]; ?></label>
		<p>By <?php echo $row["org"]; ?></p>
		<hr>
		<br>
		<ul style="list-style-type:disc">
			<li><?php echo $row["des"]; ?></li>
			<p>It includes everything you enjoy </p>
			<li>Night club DJ</li>
			<p>Night party like DJ Night </p>
			<p>Lets chill out in the night </p>
		</ul>
		
		<br><br>
		<p class="down">Entry price : &#8377;<?php echo $row["cost"]; ?></p>
		<p class="down">Event Date : <?php echo substr($row["date"],0,10); ?></p>
		<p class="down">Event Timings : <?php echo substr($row["date"],11); ?></p>
		<p class="down">Venue : <?php echo $row["venue"]; ?></p>
		<button class="btn btn-success"><a href="payment.php">Book now</a></button>
		<?php } ?>
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
 
//alert(localStorage.getItem('id'));
</script>

</body>
</html>
