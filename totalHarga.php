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
                <li style="float: right"><a href="transaksi.html">Transaksi</a></li>
                <li style="float: right"><a href="index.html">Home</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <?php
        if (isset($_POST['nama']) and isset($_POST['jumlah'])) {
            $nama = $_POST['nama'];
            $status = $_POST['status'];
            $menu = $_POST['menu'];
            $jumlah = $_POST['jumlah'];
        } else {
            header("Location:transaksi.php?error=variabel_belum_diset");
        }
        if (empty($nama)) {
            header("Location:transaksi.php?error=nama_kosong");
        } else if (!preg_match("/^[a-zA-Z]*$/", $nama)) {
            header("Location:transaksi.php?error=nama_invalid");
        } else if (empty($jumlah)) {
            header("Location:transaksi.php?error=jumlah_kosong");
        } else {
            if ($status == "member") {
                if ($jumlah < 2) {
                    if ($menu == "paket1") {
                        $diskon = 20000 * 5 / 100;
                        $diskon *= $jumlah;
                        $harga = 20000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket2") {
                        $diskon = 30000 * 5 / 100;
                        $diskon *= $jumlah;
                        $harga = 30000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket3") {
                        $diskon = 50000 * 5 / 100;
                        $diskon *= $jumlah;
                        $harga = 50000 * $jumlah;
                        $total = $harga - $diskon;
                    }
                } else if ($jumlah > 1 && $jumlah < 4) {
                    if ($menu == "paket1") {
                        $diskon = 20000 * 7 / 100;
                        $diskon *= $jumlah;
                        $harga = 20000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket2") {
                        $diskon = 30000 * 7 / 100;
                        $diskon *= $jumlah;
                        $harga = 30000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket3") {
                        $diskon = 50000 * 7 / 100;
                        $diskon *= $jumlah;
                        $harga = 50000 * $jumlah;
                        $total = $harga - $diskon;
                    }
                } else if ($jumlah > 3) {
                    if ($menu == "paket1") {
                        $diskon = 20000 * 10 / 100;
                        $diskon *= $jumlah;
                        $harga = 20000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket2") {
                        $diskon = 30000 * 10 / 100;
                        $diskon *= $jumlah;
                        $harga = 30000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket3") {
                        $diskon = 50000 * 10 / 100;
                        $diskon *= $jumlah;
                        $harga = 50000 * $jumlah;
                        $total = $harga - $diskon;
                    }
                }
            } else if ($status == "nomember") {
                if ($jumlah < 6) {
                    if ($menu == "paket1") {
                        $diskon = 0;
                        $harga = 20000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket2") {
                        $diskon = 0;
                        $harga = 30000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket3") {
                        $diskon = 0;
                        $harga = 50000 * $jumlah;
                        $total = $harga - $diskon;
                    }
                } else if ($jumlah > 5 && $jumlah < 11) {
                    if ($menu == "paket1") {
                        $diskon = 20000 * 5 / 100;
                        $diskon *= $jumlah;
                        $harga = 20000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket2") {
                        $diskon = 30000 * 5 / 100;
                        $diskon *= $jumlah;
                        $harga = 30000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket3") {
                        $diskon = 50000 * 5 / 100;
                        $diskon *= $jumlah;
                        $harga = 50000 * $jumlah;
                        $total = $harga - $diskon;
                    }
                } else if ($jumlah > 10) {
                    if ($menu == "paket1") {
                        $diskon = 20000 * 7 / 100;
                        $diskon *= $jumlah;
                        $harga = 20000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket2") {
                        $diskon = 30000 * 7 / 100;
                        $diskon *= $jumlah;
                        $harga = 30000 * $jumlah;
                        $total = $harga - $diskon;
                    } else if ($menu == "paket3") {
                        $diskon = 50000 * 7 / 100;
                        $diskon *= $jumlah;
                        $harga = 50000 * $jumlah;
                        $total = $harga - $diskon;
                    }
                }
            }
        }
        ?>
        <div class="profil">
            <h2>Total Transaksi</h2>
            <table>
                <tr>
                    <td>Nama Pembeli</td>
                    <td>: <?php echo $nama ?></td>
                </tr>
                <tr>
                    <td>Status Pembeli</td>
                    <td>: <?php echo $status ?></td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>: <?php echo $harga ?></td>
                </tr>
                <tr>
                    <td>Total Diskon</td>
                    <td>: <?php echo $diskon ?></td>
                </tr>
            </table>
            <h2 style="color: red;">Yang Harus dibayarkan <?php echo $total ?></h2>
        </div>
        <div class="footer">
            <p>Copyright © 2022 - UTS Desain Pemrograman Web</p>
        </div>
    </div>
</body>

</html>