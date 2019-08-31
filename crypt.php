<php
	//Author: Xr00tgh0st
?>
<!doctype html>
<html>

	<head>
		<title>MD5</title>
		<meta charset="utf8">
		<style>
			.main{
				height: 150px;
				width: 350px;
				margin: auto;
				position: relative;
			}
			
			.main input{
				border-radius: 3px;
				border: 1px solid #ddd;
				padding : 5px;
				margin-top: 30px;
			}
			
			.main input[type=text]{
				width: 210px;
			}
			
			.main input[type=submit]:hover{
				color: #fff;
				background-color: black;
				cursor:pointer;
			}
			
			.hash {
				margin: auto;
				position: relative;
				height: 150px;
				width: 380px;
				font-family: "Courier New",Courier,monospace
			}
			
			.hash span{
				color: #5bc0de;
			}
		</style>
	</head>

	<body>
		<form method="get">
			<div class="main">
				<tr>
					<td><input type="text" name="text" autocomplete="off"></td>
					<td><input type="submit" value="generate"></td>
				</tr>
			</div>
		</form>
	</body>

</html>
<?php
	
	if($_GET){
		
		$pass = $_GET["text"];
		if(empty($pass)){
			echo "Boş yapma";
		}else{
			$hash = md5($pass);
			echo "<div class='hash'>TEXT = "."<span style='width: 480px' onfocus='this.select();' onmouseup='return false;'>$hash</span></div>";
		}
	}
?>