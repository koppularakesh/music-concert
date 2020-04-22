<?php
	require 'connect.php';
	$q1 = "select * from concerts";
	$res1 = $con->query($q1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Stalinist+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	
  <style>
.carousel-inner img {
    width: 100%;
    height: 100%;
}
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg {
  background-image: url("./images/bg.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  margin-top:-20px;
}
.overlay{
width:100%;
height:303.5%;
position:absolute;
background-color:black;
opacity:0.7;
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
hr{
    display:block;
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

.activev {
  background-color: #4CAF50;
  color: white;
  cursor:default;
  height:50px;
  font-weight:bold;
  padding-left:76px !important;
  font-family: 'Stalinist One', cursive;
  font-size:20px !important;
}
.activev:hover{
  background-color: #4CAF50 !important;
  color: white !important;
  transform:scale(1) !important;
}
.box{
text-align:center;
padding:20px;
color:black;
}
.container-fluid{
width:80%;
border-radius:20px;
}
.carousel{
box-shadow:0px 0px 15px #b3b3ff;
border-radius:5px;
}
.carousel-inner{
border-radius:5px;
}
.card{
border-top-left-radius:10px;
border-top-right-radius:10px;
border-bottom-left-radius:0px;
border-bottom-right-radius:0px;
color:white;
}
.card:hover{
transform: scale(1.05);
transition:all 0.5s;
 }
.card-img-top{
border-top-left-radius:10px;
border-top-right-radius:10px;
}
.card hr{
border:0.5px solid #b3b3ff;
color:white;
}
.card-title{
font-weight:bold;
}
.card-body, .bg-success{
background-color:#00802b !important;
} 
.card .btn{
background-color:#33ff77;
}
.card .btn:hover{
background-color:#00e64d;
 
}
#footerhr{
	width:60%;
	height:8px;
	background-image:linear-gradient(90deg,transparent,white,transparent);
	border:0px;
	height:1px;
}
.footer-links{
	margin-left:3%;
	margin-right:3%;
	color:#bfbfbf;
	text-decoration:none;
}
.footer-links:hover{
	color:white;
	text-decoration:none;
}
i.af{
  display: inline-block;
  border-radius: 80px;
  padding: 0.4em 0.3em;
  background-color:white;
  color:#003311;
}
i.af:hover{
	background-color:#003311;
	color:white;
	transition:all 0.3s;
}
#followus{
	text-align:center;
	background-color:#003311;
	color:white;
	padding-top:15px;
	padding-bottom:15px;
}

.text {
  position: absolute;
  top: 60px;
  left: 80px;
  color:#bfbfbf;
  font-family:'Roboto', sans-serif;
  font-size:30px;
  font-weight:bold;
}

</style>

</head>
<body>	  
<!-- Top Navigation Menu -->
<div class="topnav">
    <a href="#home" class="activev"> Rock & Roll</a>
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
<div class="bg">
	<div class="mobile-container">
		<center>
		<div class="container-fluid p-4 my-3  text-white">
        <div class="row" style="text-align:center;">
            <div class="col " style="text-align:center;">
			  <div id="demo" class="carousel slide" data-ride="carousel" >

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" ></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
              
                <!-- The slideshow -->
                <div class="carousel-inner" style="height:500px;">
                  <div class="carousel-item active">
                    <img src="./images/h1.jpg" alt="Los Angeles">
					
                  </div>
                  <div class="carousel-item">
                    <img src="./images/h2.jpg" alt="Chicago">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/h3.jpg" alt="New York">
                  </div>
                </div>
				<div class="text">Connect Music Love With Us<br>Move Together With Music</div>
              
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              
              </div>
			</div>
		</center>
            <div class="col"></div>
        </div>
		
		</br>
          <div class="container">
            <div class="row" >
				<?php while($row1 = $res1->fetch_assoc()) { ?>
                <div class="col view" id="<?php echo $row1["id"]; ?>" style="padding-bottom:5%">
                    <div class="card" style="width:300px;height: 500px;">
                        <img class="card-img-top" src="./pics/<?php echo $row1["img"];?>" alt="Card image" style="height:200px">
                        <div class="card-body bg-success">
                          <h4 class="card-title"><?php echo $row1["name"]; ?></h4>
                          <h6 class="card-text">by <?php echo $row1["org"]; ?></h6>
						  <hr>
                          <ul style="margin-left:-25px;list-style-type:disc;">
                            <li><?php echo $row1["des"]; ?></li>
                            
                          </ul>
                          <p class="card-text">Venue : <?php echo $row1["venue"]; ?></p>
                          <a href="event.php" class="btn">View</a>
                        </div>
                    </div>
				</div>
				<?php } ?>
            </div>
			</div>
			<br><br>
		</div>
    </div>
</div>
<div id="followus" >
	<div >
		<a href="#" class="footer-links" onclick="topFunction()">Music concerts</a>							
		<a href="#" class="footer-links" style="border-right:2px solid #6B6B6C;" ></a>
		<a href="#" class="footer-links" onclick="topFunction()">DJ nights</a>
		<a href="#" class="footer-links" style="border-right:2px solid #6B6B6C;" ></a>
		<a href="#" class="footer-links" >Privacy policy</a>
		<a href="#" class="footer-links" style="border-right:2px solid #6B6B6C;" ></a>
		<a href="about.html" class="footer-links">About</a>
	</div>
	<center> 
		<hr id="footerhr"  />
	</center>
	Follow us&nbsp&nbsp
	<a href="#" ><i class="fa fa-facebook-square fa-lg af" aria-hidden="true"></i></a>
	<a href="#" ><i class="fa fa-twitter-square fa-lg af" aria-hidden="true"></i></a>
	<a href="#" ><i class="fa fa-whatsapp fa-lg af" aria-hidden="true"></i></a>
	<a href="#" ><i class="fa fa-youtube-play fa-lg af" aria-hidden="true"></i></a>			
</div>
      <script>
      var un = getCookie("username");
      if(un!="no")
		{
				    $('#signout').show();
					$('#signin').hide();
		}
		else{
				$('#signout').hide();
				$('#signin').show();
		}
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
		$(".view").click(function(){
			
			if (typeof(Storage) !== "undefined") {
				
				var id = this.getAttribute('id');
			//	localStorage.setItem("id",id);	
				document.cookie = "id="+id;
			//	alert(document.cookie);
			} else {
				alert("sorry");
			}
		});
		function signout()
				{
					alert("Confirm logout ?");
					document.cookie="username=no";
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
        </script>
</body>
</html>
