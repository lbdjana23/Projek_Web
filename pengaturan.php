<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pengaturan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/Bootstrapp_..css">

  <script src="https://kit.fontawesome.com/7441b34165.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-buttom">KSP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="anggota.php">Anggota <span class="sr-only"></span></a>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Simpanan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Data Simpanan</a>
          <a class="dropdown-item" href="#">Jenis Simpanan</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pinjaman
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Pinjaman Baru</a>
          <a class="dropdown-item" href="#">Data Pinjaman</a>
          <a class="dropdown-item" href="#">TagihanPinjamanAnggota</a>
        </div>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pengaturan.php">Pengaturan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Logout</a>
      </li>
      
    </ul>
  </div>
</nav>
    <div class="pembatas"></div>
    <div class="header"></div>
    <div class="sidebar"></div>
    <div class="content">
      <header align="left">
        <br><div class="bottom">&nbsp;Pengaturan</div>
      </header>
      <br><hr align="left" width="100%" height="0,4px" color="white" size="1"><br>
    </div>
    <form class="form-inline">
			<div class="form-group" align="center">
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label for="nama">Jangka Waktu Pinjam</label>&emsp;
				<input type="text" class="form-control"placeholder="per bulan">
			</div>
			<div class="form-group">
      &emsp;&emsp;&emsp;<label for="alamat">Jasa Simpanan(%)</label>&emsp;
				<input type="text" class="form-control" id="alamat">
			</div>	
			
		</form>
    <form class="form-inline">
			<div class="form-group" align="center">
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp;&emsp;&emsp;<label for="nama">Bunga(%)</label>&emsp;
				<input type="text" class="form-control"placeholder="Bunga Tetap(%)">
			</div>
			<div class="form-group">
      &emsp;&emsp;&emsp;<label for="alamat">Jasa Pinjaman(%)</label>&emsp;
				<input type="text" class="form-control" id="alamat">
			</div>	
		</form>
    <form class="form-inline">
			<div class="form-group" align="center">
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label for="nama">Maksimal Pinjam</label>&emsp;
				<input type="text" class="form-control"placeholder="Jangkawaktudalambulan">
			</div>
			<div class="form-group">
      &emsp;&emsp;&emsp;<label for="alamat">Jasa Pengurus(%)</label>&emsp;
				<input type="text" class="form-control">
			</div>	
		</form>
    <form class="form-inline">
			<h1><div class="form-group"></h1>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label for="text">Cadangan(%)</label>&emsp;
				<input type="text" class="form-control" >
			</div>	
		</form>
    <br><hr align="left" width="100%" height="0,4px" color="white" size="1"><br>
    <div class="footer"></div>
</body>
</html>