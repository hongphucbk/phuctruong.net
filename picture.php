<!DOCTYPE html>
<html lang="vi">
<head>
	<title>HONG PHUC</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="icon.png">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="myjavascript.js"></script>

	
</head>

<body onload="load_xong()">
	<div id="main">
	    <?php include("layout/header.php"); ?>
	    
	    <div id="trend_content">
	    	<br> 
	    	<marquee style="font-size: 20px; color:blue;"> WELCOME - PICTURE /  HÌNH ẢNH</marquee>
	    	<hr>

	    	<div id="control-content-table-1-1">
		    	<!-- ..................-->
		    	<!-- Chèn hình ảnh vào -->
		    	<!-- ..................-->
	    		<marquee id="marq" scrollamount="4" direction="left" loop="50" scrolldelay="0" onmouseover="this.stop()" onmouseout="this.start()">

					<img src="img/pic_02.jpg" title="Phuc Truong" width="600" />
					<img src="img/pic_03.jpg" title="Phuc Truong" width="600" />
					<img src="img/pic_04.jpg" title="Phuc Truong" width="600" />

					


					

				</marquee>
			</div>
			<div id="control-content-table-1-2">
	    		<div id="control-table">
				</div>
			</div>

			<div id="info-content-table">
				<hr>
			</div>

	    </div>
	    <div id="trend_right">
	    	<H3>Hôm nay:<p id="time" style="text-align:center" ></p></H3>
	    	<hr>
	    		<iframe src="http://www.nhaccuatui.com/mh/auto/bCX35hjDcv" width="265" height="250" frameborder="0" allowfullscreen></iframe>
	    	
	    	<p style="font-size: 16px;color: blue">Để mở/tắt nhạc các bạn vui lòng bấm Play/Pause</p>
	    	<div style="font-size: 16px;color: green"> 
	    		To Play/Pause the music, please press Play/Pause</p>

	    	</div>

	    </div>
	    
	    
	    <?php include("layout/footer.php"); ?>

    </div>


</body>