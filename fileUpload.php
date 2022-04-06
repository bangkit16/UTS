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
            <?php
            $target_path = "foto/";

            $target_path = $target_path . basename($_FILES['uploadedfile']['name']);
            if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
                echo "<h2>File Foto " . basename($_FILES['uploadedfile']['name']) . " Berhasil Di Upload<h2>";
            } else {
                echo "<h2>Ada error saat mengupload file , mohon untuk coba lagi</h2>";
            }
            ?>
        </div>
        <div class="footer">
            <p>Copyright © 2022 - UTS Desain Pemrograman Web</p>
        </div>
    </div>
</body>

</html>

}