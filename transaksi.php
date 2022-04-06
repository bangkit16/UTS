<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />

  <title>Restoran</title>
</head>

<body>
  <div class="nav">
    <div class="container">
      <ul>
        <li style="float: left">
          <a class="brand" href="index.html">MakanSini</a>
        </li>
        <li style="float: right">
          <a href="tambahFoto.html">Tambah Foto</a>
        </li>
        <li style="float: right"><a href="transaksi.php">Transaksi</a></li>
        <li style="float: right"><a href="index.html">Home</a></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="profil">
      <h2>Hitung Transaksi</h2>
      <?php
      if (isset($_GET['error'])) {
        $error = $_GET['error'];
      } else {
        $error = "";
      }
      $pesan = "";
      if ($error == "variabel_belum_diset") {
        $pesan = "Anda harus mengakses halaman ini dari halaman transaksi";
      } else if ($error == "nama_kosong") {
        $pesan = "Nama harus diisi";
      } else if ($error == "nama_invalid") {
        $pesan = "Nama diisi huruf dan spasi";
      } else if ($error == "jumlah_kosong") {
        $pesan = "Jumlah harus diisi";
      }
      ?>
      <h3 style="padding: 10px; color: red; "><?php echo $pesan; ?></h3>
      <table>
        <form action="totalHarga.php" method="post">
          <tr>
            <td>Nama Pembeli</td>
            <td><input name="nama" class="input" type="text" /></td>
          </tr>
          <tr>
            <td>Status Pembeli</td>
            <td>
              <select name="status" class="input" style="width: 100%">
                <option value="member">Member</option>
                <option value="nonmember">Non-Member</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Menu</td>
            <td>
              <select name="menu" class="input" style="width: 100%">
                <option value="paket1">Paket 1 - Rp20000</option>
                <option value="paket2">Paket 2 - Rp30000</option>
                <option value="paket3">Paket 3 - Rp50000</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Jumlah</td>
            <td>
              <input name="jumlah" class="input" type="number" />
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input class="btnsubmit" type="submit" name="submit" value="HITUNG" />
            </td>
          </tr>
        </form>
      </table>
    </div>
    <div class="footer">
      <p>Copyright © 2022 - UTS Desain Pemrograman Web</p>
    </div>
  </div>
</body>

</html>