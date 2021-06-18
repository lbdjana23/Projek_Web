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
  <a class="navbar-brand">KSP</a>
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
        <br><div class="bottom">&nbsp;TambahAnggota</div>
      </header>
      <br><hr align="left" width="100%" height="0,4px" color="white" size="1"><br>
    </div>
    <form id="form">
    <table>
    <tr><td>Nama Anggota</td> <td></td> <td><input type="text" name="nama" id="nama"></td></tr>
    <tr><td>Jenis Kelamin</td> 
          <option value="B">Laki Laki</option>
          <option value="C">Perempuan</option>
         </select></td>
    </tr>
    <tr><td>Alamat</td> <td>:</td> <td><input type="text" name="ttl"></td></tr>
    <tr><td>KOta</td> <td>:</td> <td><input type="text" name="telepon"></td></tr>
    <tr><td>Telpon</td> <td>:</td> <td><input type="text" name="email"></td></tr>
    <tr><td>Pesan</td> <td>:</td> <td><textarea name="message" rows="5" cols="30"></textarea></td></tr>
    <tr><td>Kepengurusan</td>
          <option value="B">Bukan Pengurus</option>
          <option value="C">Pengurus</option>
         </select></td>
    </tr>
    <tr><td colspan=2></td> <td><input type="simpan" value="Simpan"></td></tr>            
 </table>
    </form>
    <div class="footer"></div>
</body>
</html>