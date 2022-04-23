<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style type="text/css">
		@font-face {
			font-family: code;
			src: url(gillsansnova_book.ttf);
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
		.border-lime {
			border: 4px solid lime;
		}
	</style>
</head>

<body style="font-family: code;background: linear-gradient(180deg, #027200 0%, rgba(0, 80, 91, 0.54) 100%);">
	<nav class="navbar bg-black text-white" >
		<div class="col-1">
			<a href="index.php"><img src="loo (1).png" class="w-100"></a>
		</div>
		<div class="col-7 d-flex">
			<h3><span class="mr-5"><</span>Helping Hand<span class="ml-5">></h3>
			<a href="new.php" style="text-decoration: none; color: lime; margin-left: 50px"><h3>Projects</h3></a>
		</div>
		<div class="col-2">

		</div>
		<div class="col-2">
			<div class="col-10 pt-1">
				<h2 class="text-center" style="color:lime; text-decoration: underline; cursor: pointer;"><?php echo $_SESSION['login']; ?></h2>
			</div>
		</div>
	</nav>
	</div>
	<div class="col-11 mx-auto p-0 pb-5 " style="background:black">
		<div class="col-12 bg-black " style="height: 100px; padding-top: 10px; border-bottom: 5px solid green">
			<h1 class="text-center" style="color:lime">Projects</h1>
		</div>
		<div class="col-12 bg-black" style="height: 100px; border-bottom: 5px solid green">
			<input type="" name="" class="col-2 p-1 ml-3 mt-4">
			<img src="poisk.PNG" class="h-50">
		</div>
		<div class="col-12 p-0 border-lime pt-3">
			<div class="row">
				<div class="col-3 ml-3 ">
					<img src="megaphone.png" class="h-50 mt-5">
				</div>
				<div class="col-8 text-white">
					<h1>Megaphone The Megaphone</h1>
					<h5>Is it a megaphone? Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</h5>
				</div>
			</div>
			<div class="col-3">
						<button class="btn w-100 text-white p-2" style="border:4px solid lime; border-bottom: 0;"><h4>More</h4></button>
					</div>
		</div>
		<div class="col-12 p-0 border-lime pt-3">
			<div class="row">
				<div class="col-3 ml-3 ">
					<img src="megaphone.png" class="h-50 mt-5">
				</div>
				<div class="col-8 text-white">
					<h1>Megaphone The Megaphone</h1>
					<h5>Is it a megaphone? Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</h5>
				</div>
			</div>
			<div class="col-3">
						<button class="btn w-100 text-white p-2" style="border:4px solid lime; border-bottom: 0;"><h4>More</h4></button>
					</div>
		</div>
		<div class="col-12 p-0 border-lime pt-3">
			<div class="row">
				<div class="col-3 ml-3 ">
					<img src="megaphone.png" class="h-50 mt-5">

				</div>
				<div class="col-8 text-white">
					<h1>Megaphone The Megaphone</h1>
					<h5>Is it a megaphone? Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</h5>
				</div>
			</div>
			<div class="col-3">
						<button class="btn w-100 text-white p-2" style="border:4px solid lime; border-bottom: 0;"><h4>More</h4></button>
					</div>
		</div>
		
	</div>
	
</body>
</html>