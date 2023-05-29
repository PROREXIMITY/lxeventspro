<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<style>
		body {
			background: #000;
			color: #ffffff;
			height: 100vh;
			font-family: ‘Poppins’, sans-serif;
			text-align: center;
		}

		h2 {
			margin-top: 10px;
			margin-bottom: 30px;
			color: #ffffff;
			font-size: 32px;
			font-weight: 500;
			line-height: 42px;
			text-align: center;
		}

		.login-form {
			padding: 20px;
			width: 500px;
			margin: auto;
			margin-top: 20px;
			margin-bottom: 50px;
			backdrop-filter: blur(10px);
			background-color: rgba(255, 255, 255, 0.13);
			position: absolute;
			transform: translate(-50%, -50%);
			top: 50%;
			left: 50%;
			border-radius: 10px;
			backdrop-filter: blur(10px);
			border: 2px solid rgba(255, 255, 255, 0.1);
			box-shadow: 0 0 40px #d10707;
			padding: 50px 35px;
			letter-spacing: 0.5px;
			outline: none;
			border: none;
		}

		input[type="text"],
		input[type="password"]{
			width: 400px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 10px;
			box-sizing: border-box;
			font-size: 16px;
		}

		  input[type=submit], .back-button {
				font-size: 14px;
        color: #ffffff;
        background: #d10707;
        padding: 10px 30px;
        box-shadow: #ffffff 0px 0px 0px 0px;
        border-radius: 50px;
        transition: 1000ms;
        transform: translateY(0);
        flex-direction: row;
        align-items: center;
        cursor: pointer;
				outline-style: none;
				text-decoration: none;
				margin-bottom: 30px;
				
		}

		input[type=submit]:hover,
    .back-button:hover {
      background-color: #a10606;
    }



	</style>
</head>

<body>
	<div class="login-form">
		<h2>Login</h2>
		<form method="post" action="logacc.php">
			<label>Email:</label><br>
			<input type="text" name="uEmail"><br>
			<label>Password:</label><br>
			<input type="password" name="uPass"><br><br>
			<input type="submit" value="Login">
		</form>
		<div class="center">
			<a class="back-button" href="lx.php" style="text-decoration: none; color:#ffffff">Back</a>
		</div>
	</div>

</body>

</html>