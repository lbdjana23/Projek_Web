<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="https://kit.fontawesome.com/7441b34165.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<form class="box" action="dashboard.php" method="post">
	<h1>Login <br>Simpan Pinjam</h1>

	<div class="kotak_login">
	<img src="img/koperasi.png" 
      width="350px"height="100px"><br>
		<p class="tulisan_login">Silahkan login</p>

		<form>
			
			<label><i class="fas fa-user"></i>&nbsp;Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username">

			<label><i class="fas fa-lock"></i>&nbsp;Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password">

			<i class="fas fa-sign-in"></i> <input type="submit" class="tombol_login" value="MASUK">

			<br/>
			<br/>
		</form>
		
	</div>


</body>
</html>