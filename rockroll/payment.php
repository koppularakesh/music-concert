<?php 
require 'connect.php';

	if(isset($_COOKIE["id"]))
		$id = $_COOKIE["id"];
	
	$q2 = "select * from concerts where id = '$id' ";
	$res3 = $con->query($q2);


?>
<!Doctype>
<HTML>
<head>
	<title>Payment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<script src="js/jquery-2.2.3.min.js" ></script>
	<link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Stalinist+One&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<style>
		*{
		box-sizing:border-box;
		}
		body{
		margin:0px;
		padding:0px;
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
height:130%;
position:absolute;
background-color:black;
opacity:0.7;
z-index:-1;
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

		#call{
		font-size:17px;
		color:#00ff00;
		}
		#os{
		width:25%;
		float:left;
		margin-left:3%;
		margin-top:1%;
		padding-left:2%;
		padding-right:2%;
		background-color:white;
		border-top-left-radius:30px;
		border-bottom-right-radius:30px;
		box-shadow:0px 0px 5px #a6a6a6;
		}
		#ostext{
		letter-spacing:0.3em;
		font-weight:bold;
		font-size:13px;
		padding-top:3%;
		color:black;
		}
		#tickets{
		margin-right:6%;
		float:right;
		margin-top:-4%;
		font-weight:bold;
		font-size:18px;
		color:black;
		}
		#ttext{
		margin-right:-7%;
		float:right;
		margin-top:2%;
		font-size:12px;
		color:#404040;
		}
		#mntext{
		font-size:18px;
		margin-top:-8%;
		color:black;
		padding-top:13%;
		font-weight:bold;
		}
		.mtypet{
		font-size:13px;
		color:black;
		color:#808080;
		}
		.seatsdt{
		font-size:17px;
		font-family: 'Courier Prime', monospace;
		margin-bottom:-10px;
		color:black;
		}
		.st{
		color:#808080;
		font-size:11px;
		margin-top:6%;
		}
		.strs{
		font-size:15px;
		margin-top:-8.5%;
		float:right;
		color:black;
		}
		#icrs{
		font-size:13px;
		color:black;
		}
		#amt{
		background-color:#4CAF50;
		padding:3%;
		border-top-left-radius:10px;
		border-bottom-right-radius:10px;
		font-weight:bold;
		}
		#amtrs{
		float:right;
		margin-top:-13%;
		padding-right:3%;
		font-weight:bold;
		}
		#paym{
		width:67%;
		float:left;
		margin-left:3%;
		}
		#paymtext{
		background-color:#4CAF50;
		padding:1%;
		border:1px solid black;
		border-radius:5px;
		}
		.link{
		width:270px;
		height:70px;
		border-top:none;
		border-right:none;
		border-left:none;
		border-bottom:1px solid black;
		outline:none;
		background-color:white;
		border-radius:10px;
		box-shadow:0px 0px 10px #737373;
		}
		#options{
		width:20%;
		float:left;
		}
		.content{
		width:60%;
		margin-left:20%;
		margin-top:0%;
		float:left;
		}
		.ctext{
		font-size:20px;
		font-weight:bold;
		margin-left:12%;
		}
		#op1,#op2,#op3,#op4,#op5{
		display:none;
		}
		#cdcards{
		background-color:white;
		height:220px;
		border-radius:10px;
		width:390px;
		margin-bottom:2%;
		box-shadow:0px 0px 5px #a6a6a6;
		}
		#cntext{
		color:#8c8c8c;
		font-size:13px;
		padding:5% 0% 1% 5%;
		}
		.tb{
		border:1px solid black;
		margin:0% 0% 4% 5%;
		height:30px;
		width:300px;
		padding-left:10px;
		border-radius:5px;
		outline:none;
		}
		#exptext{
		color:#8c8c8c;
		font-size:13px;
		margin:-1% 0% 2% 5%;
		}
		#mm{
		float:left;
		padding-left:10px;
		border:1px solid black;
		margin-left:5%;
		outline:none;
		width:50px;
		height:30px;
		border-radius:5px;
		text-align:center;
		}
		#yy{
		float:left;
		padding-left:10px;
		outline:none;
		margin-left:1%;
		width:50px;
		height:30px;
		border-radius:5px;
		border:1px solid black;
		text-align:center;
		}
		#cvvtext{
		float:left;
		margin-left:24%;
		margin-top:-5%;
		font-size:13px;
		color:#8c8c8c;
		}
		#cvv{
		margin-left:-7%;
		border-radius:5px;
		height:30px;
		text-align:center;
		width:100px;
		border:1px solid black;
		outline:none;
		}
		#mp{
		height:40px;
		width:390px;
		border:none;
		background-color:#004d1a;
		color:white;
		outline:none;
		border-radius:5px;
		}
		#mp:hover{
		background-color:white;
		color:#004d1a;
		transition:0.3s;
		font-weight:bold;
		border:2px solid #004d1a;
		}
		.ni{
		height:30px;
		width:250px;
		text-align:center;
		margin-left:7%;
		margin-bottom:3%;
		outline:none;
		border-radius:5px;
		border:1px solid black;
		}
		#op4{
		font-size:18px;
		}
		.wop{
		margin-left:20%;
		margin-bottom:3%;
		}
		#opp{
		font-size:30px;
		font-weight:bold;
		color:#b3b3b3;
		margin-left:-3%;
		margin-top:20%;
		}
		#nttext{
		color:#8c8c8c;
		margin-left:10%;
		font-weight:bold;
		float:left;
		}
		#note{
		color:#8c8c8c;
		
		margin-left:10%;
		}
		#conttext{
		color:#8c8c8c;
		margin-left:10%;
		font-size:13px;
		}
		#email{
		color:#8c8c8c;
		margin-left:76%;
		margin-top:-4.5%;
		}
		.fa-phone{
		font-weight:bold;
		color:#009900;
		}
	</style>
</head>
<body>
<div class="mobile-container">
<div class="topnav">
  <a href="#home" class="active"> Rock & Roll</a>
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
	<div >
	<?php while($row = $res3->fetch_assoc()) { ?>
		<div id="os" >
			<p id="ostext" >ORDER SUMMARY</p>
			<p id="tickets" >1</p>
			<p id="ttext" >Ticket</p>
			<p id="mntext" ><?php echo $row["name"]; ?></p>
			<p class="mtypet" >Music concert</p>
			<p class="mtypet" id="tname">Venue : <?php echo $row["venue"]; ?></p> <br>
			<!-- <p class="seatsdt" id="seat1"></p>
			<p class="seatsdt" id="seat2"></p>
			<p class="seatsdt" id="seat3"></p> -->
			<p class="seatsdt" id="datetime">Date : <?php echo substr($row["date"],0,10); ?></p> 
			<p class="seatsdt" id="timing">Time : <?php echo substr($row["date"],11); ?></p><br>
			<hr id="oshr" >
			<p class="st" >Sub Total</p>
			<p class="strs" id="price">&#8377;<?php echo $row["cost"]; ?></p>
			<p class="st" >+internet handling charges</p>
			<p class="strs" id="icrs" >Rs.30.62</p>
			<p id="amt" >Amount payable</p>
			<p id="amtrs" ><?php echo (int)$row["cost"]+30.62; ?></p>
		</div>
	<?php }?>
	
		<div id="paym" >
			<p id="paymtext" >Payment Options</p>
			<form method="POST">
			<div id="options">
					<button onclick="show('op1')" name="g" class="link" >Credit/Debit Card</button><br>
					<button onclick="show('op2')" class="link" >Net Banking</button><br>
					<button onclick="show('op3')" class="link" >UPI</button><br>
					<button onclick="show('op4')" href="#" class="link" >Mobile Wallets</button><br>
					<button onclick="show('op5')" href="#" class="link" >Redeem Voucher</button><br>
			</div>
			<div class="content" >
				<p id="opp" class="op">Select any payment Method to continue</p>
				<div id="op1" class="op">
					<p class="ctext">Enter your Card details</p>
					<div id="cdcards">
						<p id="cntext">Card Number</p>
						<input type="text" class="tb" placeholder="Enter Your Card Number" required /><br>
						<input type="text" class="tb" placeholder="Name on the Card" required />
						<p id="exptext">Expiry</p>
						<input type="text" id="mm" placeholder="MM" required />
						<input type="text" id="yy" placeholder="YY" required />
						<p id="cvvtext" >CVV</p>
						<input type="text" id="cvv" placeholder="CVV" required />
					</div>
					<button type="submit" onclick="pay()" id="mp" name="mpbtn">MAKE PAYMENT</button>
				</div>
				<div id="op2" class="op">
					<p class="ctext" style="margin-left:10%;">Pay using Netbanking</p>
					<input type="text" class="ni" placeholder="Bank name" required ><br>
					<input type="text" class="ni" placeholder="Account Holder name" required><br>
					<input type="text" class="ni" placeholder="Account number" required><br>
					<input type="text" class="ni" placeholder="IFSC Code" required><br>
					<input type="submit" onclick="pay()" id="mp" value="MAKE PAYMENT"><br>
				</div>
				<div id="op3" class="op">
					<p class="ctext" style="margin-left:25%;">Pay using UPI</p>
					<input type="text" class="ni" placeholder="ex:sbi123" required> @ 
					<input type="text" class="ni" style="margin-left:1%;width:100px;" placeholder="Bank name" required>
					<input type="submit" onclick="pay()" id="mp" style="margin-left:7%;" value="MAKE PAYMENT"><br>
				</div>
				<div id="op4" class="op">
					<p class="ctext" >Pay using mobile Wallet</p>
					<input type="radio" class="wop" name="wallet" required>Amazon pay<br>
					<input type="radio" class="wop" name="wallet" required>Paytm<br>
					<input type="radio" class="wop" name="wallet" required>Phone pe<br>
					<input type="radio" class="wop" name="wallet" required>Mobiwik<br>
					<input type="radio" class="wop" name="wallet" required>Paypal<br><br>
					<input type="submit" onclick="pay()" id="mp"   value="MAKE PAYMENT"><br>
				</div>	
				<div id="op5" class="op">
					<p class="ctext" style="margin-left:6%;">Pay using Redeem Vouchers</p><br>
					<input type="text" name="redeemv" class="ni" style="width:300px;" placeholder="Enter GV Code to redeem" required><br><br>
					<input type="submit" onclick="pay()" id="mp"   value="REDEEM"><br>
				</div>
			</div>
			</form>
		</div>
		<br>
	</div>
	<div>
		<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br>
		<br>
		<hr style="background-color:#00264d;width:80%;height:0.3%;">
		<br>
		<p id="nttext">Note : </p>
		<p id="note"> &nbsp Don't press the back button or refresh the page while payment is processing</p>
		<p id="conttext" ><i class="fa fa-phone" aria-hidden="true"></i> &nbsp 044 4043 5050, 044 6654 5050</p>
		<!-- <p id="email" >mail : watchmyshow@filmy.com</p> -->
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
	function show(s)
	{
	
		for(var i=0;i<6;i++)
		{
			var k= document.getElementsByClassName("op")[i].id;
			if(k!=s)
			{
				document.getElementById(k).style.display = "none";
			}
			else
			{
				document.getElementById(s).style.display = "block";
			}
		}
	}
	function pay()
	{
		alert("PAYMENT SUCESSFULL ");
		window.location ="tickets.php";
		//alert("PAYMENT SUCESSFULL ");
	}
	</script>
	</div>
</body>
</html>
	