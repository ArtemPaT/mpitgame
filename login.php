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
				<h1 class="text-center">SIGN IN</h1>
				<br><br>
				<form action="log.php" method="POST">
					<div class="row">
						<div class="col-3">
							<h2 style="margin-left: 180px;">Login:</h2><br><br><br><br>
							<h2 style="margin-left: 120px;">Password:</h2>
						</div>
						<div class="col-8">
							<input type="" name="login" style="height: 40px; width: 600px;">
							<input type="" name="password" style="height: 40px; width: 600px;margin-top: 100px">
						</div>
					</div>
					<div class="col-3 mx-auto mt-5">
						<button class="btn w-100 text-white text-center" style="border:4px solid lime"><h1>Sign in</h1></button>
					</div>
					<div class="col-9 mx-auto mt-5 text-center">
						<h2 class="text-white">Don't have an account? You can make it <a href="reg.php" style="color:cyan;">here</a>!</h2>
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