<?php
  require_once"index.php";
?>
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
<?php
  require_once"index.php";
?>