<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ABDULLAH JAMOUS</title>
		
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-3.4.1.min.js"></script>
	  	<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<!-- header -->
		<header>
			<div class="top-text">
				<h2>İŞTE BU BENİM</h2>
			</div>
		</header>
		
		<!-- NAVBAR -->
		<div class="sticky ">
			<nav class="nav navbar-expand-sm nav-justified  navbar-light ">
				<div class="container-fluid">
					<ul class="navbar-nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" href="Login.php" >
								Login
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.html" >
								Ana Sayfa
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="ozgecmis.html" >
							Özgeçmiş
			 				</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="sehir.html" >
							Şehrim
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link " href="miras.html" >
							Miras
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link " href="iletisim.html" >
							İletişim
							</a>
						</li>
					</ul>		
				</div>
			</nav>
		</div>
		<section>
		<div class="container-fluid">
			<form action="/welcome.php" class="was-validated" method="post" >
			  	<div class="form-group">
			   		<label for="adi">E-mail:</label>
			    	<input name="name" type="text" class="form-control" id="adi" required>
			 	</div>
			 	<div class="form-group">
			   		<label for="soyad">Password:</label>
			    	<input name="pass" type="text" class="form-control" id="soyad" required>
			 	</div>
			    <div class="btn-group">
					<button type="submit" class="btn btn-primary">Login</button>
			    </div>
			
		</form>
		</div>
	</section>
		
		
	</body>
</html>