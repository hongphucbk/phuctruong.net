<!DOCTYPE html>
<html lang="vi">
<head>
	<title>PHUC TRUONG</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="icon.png">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
		function gettime() {
			setInterval(function() {
				d = new Date();
			    n = d.toLocaleString();
				document.getElementById("time").innerHTML = n;
				thoigian = n;
			}, 1000);
		}
	</script>
</head>

<body onload="gettime()">
	<div id="main">
	    <?php include("layout/header.php"); ?>
	    
	    <div id="content">
	    	<br> 
	    	<marquee style="font-size: 20px; color:blue;"> WELCOME - INTRODUCE /  GIỚI THIỆU</marquee>
	    	<hr>
		    <div id="introduce-content-1">
		    	<div id="introduce-table">
					<p>My name is Phuc, I graduated in Ho Chi Minh City University of Technology.
					I was born in 1994 in Phu My, Binh Dinh Province.
					My major is Automation & Control Engineering.
					My current work is Maintenance for a steel company.</p>
					<p>I like travelling with my friend, reading books and writting web...and sharing good knowleadge for everyone who need it.</p>
				</div>			 
			</div>
			<br>

			<div id="introduce-content-1">
		    	<div id="introduce-table">
					<H2 style="text-align: center;">RESEARCH</H2>
					<h3 style="">Industrial IOT</h3>
					<h3 style="">Factory Digitization</h3>

				</div>			 
			</div>
			

	    </div>
	    <div id="introduce-right">
	    	<H3>Hôm nay |Today<p id="time" style="text-align:center" ></p></H3>
	    	<hr>
	    	    
	    </div>
	    
	    <?php include("layout/footer.php"); ?>

    </div>


</body>