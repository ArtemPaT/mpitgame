<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style type="text/css">
		@font-face {
			font-family: code;
			src: url(Coda-Regular.ttf);
		}
		.code {
			font-family: code;
		}
		.bg-black {
			background: black;
		}
		.bg-kek {
			background: #2AC367;
		}
	</style>
</head>

<body style="font-family: code;background: linear-gradient(180deg, #027200 0%, rgba(0, 80, 91, 0.54) 100%);">

	<div class="col-9 mx-auto p-0 pb-5" style="background: linear-gradient(180deg, #071f0a 30%, black); height: 1000px">
		<div class="col-12 p-0">
			<div class="col-12 text-white pt-4" >
				<h1 class="text-center">REGISTRATE</h1>
				<br><br>
				<form action="regin.php" method="POST">
					<div class="row">
						<div class="col-3">
							<h3 style="margin-left: 190px;">Login:</h3><br><br>
							<h3 style="margin-left: 135px;">Password:</h3><br><br>
							<h3 style="margin-left: 15px;">Confirm Password:</h3>
						</div>
						<div class="col-8">
							<input type="" name="login" style="height: 40px; width: 600px;">
							<input type="" name="password" style="height: 40px; width: 600px;margin-top: 45px">
							<input type="" name="" style="height: 40px; width: 600px;margin-top: 50px">
						</div>
					</div>
					<div class="col-6 mx-auto mt-5">
						<button class="btn w-100 text-white text-center" style="border:4px solid lime"><h1>CREATE ACCOUNT NOW</h1></button>
					</div>
					<div class="col-9 mx-auto mt-5 text-center">
						<h2 class="text-white">Already have an account? Log into your account <a href="login.php" style="color:cyan;">here</a>!</h2>
					</div>
					
					
				</form>
				<form action="index.php">
					<div class="col-4 mt-5">
						<button class="btn w-100 text-white p-2" style="border:4px solid lime"><h1><- Go back</h1></button>
					</div>
				</form>
					
			</div>
			
		</div>
		
	</div>
	
</body>
</html>