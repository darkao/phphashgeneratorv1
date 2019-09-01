<php
	//Author: Xr00tgh0st
?>
<!doctype html>
<html>

	<head>
		<title>MD5</title>
		<meta charset="utf8">
		<style>
		
			footer {
			  position: fixed;
			  left: 0;
			  bottom: 0;
			  width: 100%;
			  text-align: center; 
			}
			
			footer a {
				text-decoration: none;
				color: black;
				font-family: "Courier New";
			}
			
			footer a:hover {
				color: skyblue;
			}
			
			h1 {
				margin: auto;
				width: 250px;
				font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
				color: skyblue;
				margin-top: 30px;
			}
			
			.main{
				height: 200px;
				width: 400px;
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
			
			.main select{
				padding: 4px;
				border: 1px solid #ddd
			}
			
			.hash {
				margin: auto;
				position: relative;
				height: auto;
				width: auto;
				font-family: "Courier New",Courier,monospace
			}
			
			.hash span{
				color: #5bc0de;
			}

		</style>
	</head>

	<body>
		<h1>Hash Generator</h1><br><br>
		<form method="get">
			<div class="main">
				<tr>
					<td><input type="text" name="text" autocomplete="off"></td>
					<td>
						<select name="hashes">
						  <option value="md5" selected>md5</option>
						  <option value="sha1">sha1</option>
						  <option value="base64">base64</option>
						</select>
					</td>
					<td><input type="submit" value="generate"></td>
				</tr>
			</div>
		</form>
		<footer>
			<p><a href="http://darkjon.tk" target="_blank">Xr00tgh0st</a></p>
		</footer>
	</body>

</html>
<?php
	
	if($_GET){
		
		$hashes = $_GET['hashes'];
		switch($hashes){
			case 'md5':
				$text = $_GET["text"];
				if(empty($text)){
					echo "Dont do this";
				}else{
					$hash = md5($text);
					echo "<center><div class='hash'><label>$text = </label>"."<span style='width: 480px' onfocus='this.select();' onmouseup='return false;'>$hash</span></div></center>";
				}
			break;
			
			case 'sha1':
				$text = $_GET["text"];
				if(empty($text)){
					echo "Boş yapma";
				}else{
					$hash = sha1($text);
					echo "<center><div class='hash'><label>$text = </label>"."<span style='width: 480px' onfocus='this.select();' onmouseup='return false;'>$hash</span></div></center>";
				}
			break;
			
			case 'base64':
				$text = $_GET["text"];
				if(empty($text)){
					echo "Boş yapma";
				}else{
					$hash = base64_encode($text);
					echo "<center><div class='hash'><label>$text = </label>"."<span style='width: 480px' onfocus='this.select();' onmouseup='return false;'>$hash</span></div></center>";
				}
			break;
		}
		
	}
?>
