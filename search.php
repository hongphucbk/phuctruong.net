<html>
    <head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="icon.png">
        <title>Phonebook</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			    @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
				@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
				body{
					margin: 0;
					padding: 0;
					background: #fff;

					color: #fff;
					font-family: Arial;
					font-size: 12px;
				}

				.phonebook-body-main{
					position: absolute;
					top: -20px;
					left: -20px;
					right: -40px;
					bottom: -40px;
					width: auto;
					height: auto;
					background-image: url(http://sv1.upsieutoc.com/2017/07/22/ricefield.jpg);
					background-size: cover;
					-webkit-filter: blur(2px);
					z-index: 0;
				}
				.phonebook-grad{
					position: absolute;
					top: -20px;
					left: -20px;
					right: -40px;
					bottom: -40px;
					width: auto;
					height: auto;
					background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
					z-index: 1;
					opacity: 0.7;
				}

				.phonebook-header{
					position: absolute;
					top: calc(50% - 35px);
					left: calc(50% - 255px);
					z-index: 2;
				}

				.phonebook-header div{
					float: left;
					color: #fff;
					font-family: 'Exo', sans-serif;
					font-size: 35px;
					font-weight: 200;
				}

				.phonebook-header div span{
					color: #5379fa !important;
				}

				.login{
					position: absolute;
					top: calc(50% - 75px);
					left: calc(50% - 50px);
					height: 150px;
					width: 350px;
					padding: 10px;
					z-index: 2;
				}

				.login input[type=text]{
					width: 250px;
					height: 30px;
					background: transparent;
					border: 1px solid rgba(255,255,255,0.6);
					border-radius: 2px;
					color: #fff;
					font-family: 'Exo', sans-serif;
					font-size: 16px;
					font-weight: 400;
					padding: 4px;
				}

				.login input[type=password]{
					width: 250px;
					height: 30px;
					background: transparent;
					border: 1px solid rgba(255,255,255,0.6);
					border-radius: 2px;
					color: #fff;
					font-family: 'Exo', sans-serif;
					font-size: 16px;
					font-weight: 400;
					padding: 4px;
					margin-top: 10px;
				}

				.login input[type=button]{
					width: 260px;
					height: 35px;
					background: #fff;
					border: 1px solid #fff;
					cursor: pointer;
					border-radius: 2px;
					color: #a18d6c;
					font-family: 'Exo', sans-serif;
					font-size: 16px;
					font-weight: 400;
					padding: 6px;
					margin-top: 10px;
				}

				.login input[type=button]:hover{
					opacity: 0.8;
				}

				.login input[type=button]:active{
					opacity: 0.6;
				}

				.login input[type=text]:focus{
					outline: none;
					border: 1px solid rgba(255,255,255,0.9);
				}

				.login input[type=password]:focus{
					outline: none;
					border: 1px solid rgba(255,255,255,0.9);
				}

				.login input[type=button]:focus{
					outline: none;
				}

				::-webkit-input-placeholder{
				   color: rgba(255,255,255,0.6);
				}

				::-moz-input-placeholder{
				   color: rgba(255,255,255,0.6);
				}

				#phonebook.text{
					outline: none;
					border: 1px solid rgba(255,255,255,0.9);
					
				}

		</style>
    </head>
    <body>
		<div class="phonebook-body-main"> 
			<div class="phonebook-grad"></div>
			<div class="phonebook-header">
				<div>PHONE<span>BOOK</span></div>
			</div>
	        <div align="center">
	            <form action="search.php" method="get">
	                SDT | Phonenumber: <input id="phonebook.text" type="text" name="search" />
	                <input id="phonebook.submit" type="submit" name="ok" value="Search" />
	            </form>
	        </div>
		</div>
		<?php
			//Neu nguoi dung nhap
			if (isset($_REQUEST['ok'])) {
				//Gan ham addslashes de chong sql injection
				$search = addcslashes($_GET['search'],"");
				//Neu search rong thi bao loi, tuc la nguoi dung chua nhap
				$dodaichuoi = strlen($search);
				$dodaichuoi = (int)$dodaichuoi;
				//echo $dodaichuoi ." do dai chuoi.";
				if (empty($search) || ($dodaichuoi <= 3)) {
					echo "Bạn vui lòng nhập SĐT. SĐT bạn tìm phải có ít nhất là 4 kí tự";
				}
				else{
					// Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                	$query = "select * from DANHBA where SDT like '%$search%'";
                	// Kết nối sql
                	$conn = mysqli_connect("sql202.freevnn.com", "freev_18484556", "hongphuc", "freev_18484556_DANHBA") or die('Không thể kết nối tới database');
                	//mysql_select_db("basic");
 					// Thực thi câu truy vấn
	                $sql = mysqli_query($conn, $query);
	 
	                // Đếm số đong trả về trong sql.
	                $num = mysqli_num_rows($sql);
					// Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
	                if ($num > 0 && $search != "") {
	                	// Dùng $num để đếm số dòng trả về.
                    		echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
                    	// Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    		echo '<table border="1" cellspacing="0" cellpadding="10">';
                   	 		while ($row = mysqli_fetch_assoc($sql)) {
		                        echo '<tr>';
		                            //echo "<td>{$row['id']}</td>";
		                            echo "<td>{$row['hovaten']}</td>";
		                            //echo "<td>{$row['SDT']}</td>";
		                            echo "<td>{$row['sdtht']}</td>";
		                            
		                        echo '</tr>';
		                    }
		                    echo '</table>';



	                } else {
	                		echo "Không tìm thấy kết quả!";
	                }
	                

	            }
 
 			}

		?>	        

    </body>
</html>