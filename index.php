<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/1_favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        body, #login button { background: #008c4b;}
        
        #cuerpo_login {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh;
            background: white;
        }

        .nav_logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav_logo img { width: 44px; }

        .logo_titulo {
            color: #008c4b;
            margin-bottom: 0px;
            padding-left: 8px;
            font-size: xx-large;
        }
        
        #login { 
            width: 350px;
            padding-top: 25px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 15vh;
            font-size: larger;
        }

        #login input, #login button {
            border: 2px solid #008c4b;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 10px;
        }

        #login button { color: white; }

        .error {
            text-align: center;
            color: white;
            position: fixed;
            bottom: 370px;
        }
	</style>
</head>
<body>
    <div id="cuerpo_login">
        <div class="nav_logo">
            <img src="img/1_favicon.png" alt="logo mate">
            <h3 class="logo_titulo">Materos Rioplatenses</h3>
        </div>

<?php 
function printLogin() {
    
	echo '<form id="login" action="index.php" method="post">
		<input type="text" name="user" placeholder="Usuario">
		<input type="password" name="password" placeholder="Password">
        <br>
		<button type="submit" name="login">Login</button>
		</form>';
    
	validateLogin();
}

function validateLogin() {

	if(isset($_POST['login'])) {

		$valid_user = "user";
		$valid_password = "pass";

		$user = $_POST['user'];
		$password = $_POST['password'];


		if($user == $valid_user && $password == $valid_password) {

			header("location:welcome.php");
			exit();

		} else {
			echo "<h2 class='error'>Datos incorrectos, intente nuevamente</h2>";
		}
	}
}

printLogin();
?>
</div>

</body>
</html>