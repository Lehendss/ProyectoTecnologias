<?php
	
	session_start();
	$username="Alex";
	$password="1234";

    $username_1="Mizhu";
	$password_1="rock";

	if(isset($_POST['username']) && isset($_POST['password'])){
		if ($_POST['username'] == $username && $_POST['password']==$password) {
            echo "O username submetido foi:".$_POST['username']."<br>";
			echo "A password submetida foi:".$_POST['password']."<br>";
			
			$_SESSION["username"]=$_POST['username'];
			header('Location:dashboard.php');

        } elseif ($_POST['username'] == $username_1 && $_POST['password']==$password_1) {
            echo "O username submetido foi:".$_POST['username']."<br>";
			echo "A password submetida foi:".$_POST['password']."<br>";
			
			$_SESSION["username"]=$_POST['username'];
			header('Location:dashboard.php');
        } else {
            echo "Credenciais erradas!!!" . "<br>";
        }
	}       
	
?>


<!doctype html>
<html lang="pt">
	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">

		<title> Log In | The Vault</title>
	</head>

	<body style="height: 1px; background-color:#2C82FF;">
		
		<!--top: 70px; left: 130px; box-shadow: 2px 2px 15px 8px #FFC44F;-->
		<img src="api/img/imagen.png" alt="" width="800" height="800" style="position: fixed ; filter: opacity(65%); ">
		
		<div class="container" style="position: fixed; top: 100px; left: 510px;">
			<form class="form_ti" method="post">
				
				<a href="autenticacion.php"><img src="api/img/logo.png" alt="" width="462" height="252" style="position: relative; right: 72px; "></a>
				
				<div class="form-group" style="color:#DCDCDC">
					<label for="usr">Username:</label>
					<input type="text" class="form-control" id="usr" name="username" placeholder="Username" required>
				</div>
				
				<div class="form-group" style="color:#DCDCDC">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
				</div>
				
				<input type="submit" class="btn btn-primary" value="Submit" style="position: relative; top: 12px; left:120px;">
			
			</form> 
		</div>

		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	 
	</body>
</html>