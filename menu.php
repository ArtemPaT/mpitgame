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
	</style>
</head>

<body style="font-family: code;background: linear-gradient(180deg, #027200 0%, rgba(0, 80, 91, 0.54) 100%);">
	<nav class="navbar bg-black text-white" >
		<div class="col-1">
			<img src="loo (1).png" class="w-100">
		</div>
		<div class="col-7">
			
		</div>
		<div class="col-2">
			<a href="menu.php" style="text-decoration: none; color: white">
			<div class="col-10 pt-1">
				<h2 class="text-center" style="color:lime; text-decoration: underline; cursor: pointer;"><?php echo $_SESSION['login']; ?></h2>
			</div>
			</a>
		</div>
		<div class="col-2">
			<a href="menu.php" style="text-decoration: none; color: white">
			<div class="col-10 pt-1" style="border:4px solid lime;">
				<h2 class="text-center">Меню</h2>
			</div>
			</a>
		</div>
	</nav>

	<div class="bg-dark p-0 text-light" style="height: 250px; background: linear-gradient(180deg, black,#18343d);">
		<div class="rounded-circle bg-kek" style="height: 16px; width: 16px; position: absolute; left: 50px; top:100px;">
			
		</div>
		<div class="rounded-circle bg-kek" style="height: 24px; width: 24px; position: absolute; left: 300px; top:95px;">
			
		</div>
		<div class="rounded-circle bg-kek" style="height: 32px; width: 32px; position: absolute; left: 130px; top:210px;">
			
		</div>
		<div class="rounded-circle bg-kek" style="height: 16px; width: 16px; position: absolute; left: 1430px; top:100px;">
			
		</div>
		<div class="rounded-circle bg-kek" style="height: 24px; width: 24px; position: absolute; left: 1200px; top:95px;">
			
		</div>
		<div class="rounded-circle bg-kek" style="height: 32px; width: 32px; position: absolute; left: 1300px; top:210px;">
			
		</div>
		<div class="col-12" style="padding-top: 90px">
			<h1 class="text-center"><span class="mr-5"><</span>Helping Hand<span class="ml-5">></h1>
		</div>
	</div>
	<div class="col-11 mx-auto p-0 pb-5" style="background: #071f0a">
		<div class="col-12 bg-black" style="height: 200px; padding-top: 70px">
			<h1 class="text-center" style="color:lime">We'll always lend a helping hand</h1>
		</div>
		<div class="col-12 p-0">
			<div class="col-12 text-white pt-4" >
				<h1 class="">GIHOHGHGHGIHIUGI</h1>
				<br><br>
				<div class="d-flex">
					<div class="col-5 ml-5 bg-black pt-1" style="border: 4px solid lime; height: 250px;">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet </h3>
						<button class="btn" style="background: lime; font-weight: bold;">Start your project now!</button>
					</div>
					<div class="col-5 ml-5 bg-black pt-1" style="border: 4px solid lime; height: 250px;">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet </h3>
						<button class="btn " style="background: lime; font-weight: bold;">Start your project now!</button>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	<div class="col-11 mx-auto p-0 pb-4 mt-1" style="background: #071f0a">
		<div class="col-12 p-0">
			<div class="col-12 text-white pt-4" >
				<h1 class="" style="text-decoration: underline;">Этот сайт:</h1>
				<br><br>
				<div class="d-flex">
					<div class="col-3 ml-5 bg-black pt-1 text-center" style="border: 4px solid cyan; height: 250px;">
						<h3>Профинансировал</h3>
						<br><br>
						<h1 style="font-weight: bold; text-decoration: underline;">314 K+</h1><br>
						<h3>проектов</h3>
					</div>
					<div class="col-4 ml-5 bg-black pt-1 text-center" style="border: 4px solid cyan; height: 250px;">
						<h3>Помог вложить</h3>
						<br><br>
						<h1 style="font-weight: bold; text-decoration: underline;">₽ 300М+</h1><br>
						<h3>для креативных работ</h3>
					</div>
					<div class="col-3 ml-5 bg-black pt-1 text-center" style="border: 4px solid cyan; height: 250px;">
						<h3>Имеет</h3>
						<br><br>
						<h1 style="font-weight: bold; text-decoration: underline;">100 В+</h1><br>
						<h3>пользователей</h3>
					</div>
				</div><br><br>
				<h1 class="">...And they keep rising!</h1>
			</div>
			
		</div>
		
	</div>
	
	<div class="col-11 mx-auto p-0 pb-4 mt-1" style="background: #071f0a">
		<div class="col-12 p-0">
			<div class="col-12 text-white pt-4" >
				<h1 class="" style="text-decoration: underline;">Рекомендуем:</h1>
				<br><br>
				<div class="d-flex">
					<div class="col-5 ml-5 bg-black pt-1 p-2" style="border: 4px solid lime;">
						<div class="col-5 mx-auto bg-black" style="border: 4px solid lime;height: 200px">
							<img src="stonks.png" class="w-100">
						</div>
						<div class="col-8 mx-auto text-center">
							<h4>Opposum lolik dodik</h4>
							
						</div>
						<h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco s</h5>
						
					</div>
					<div class="col-5 ml-5 bg-black pt-1 p-2" style="border: 4px solid lime;">
						<div class="col-5 mx-auto" style="border: 4px solid lime;height: 200px">
							<img src="stonks.png" class="w-100">
						</div>
						<div class="col-8 mx-auto text-center">
							<h4>Opposum lolik dodik</h4>
							
						</div>
						<h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco s</h5>
						
					</div>
				</div><br><br>
			</div>
			
		</div>
		
	</div>
</body>
</html>