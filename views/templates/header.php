<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "
    <script>
    alert('Mohon Login terlebih dahulu');
    window.location.href = 'http://localhost/projectuk/login/login.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Payment</title>
    <link rel="stylesheet" href="../../styles/style.php" />
  </head>
  <body onscroll="scrollWindow()">
    <header>
      <div class="menu">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
      <nav>
        <span></span>
        <div class="links">
          <ul>
            <li><a href="../../dashboard/dashboard.php">Dashboard</a></li>
            <?php if ($_SESSION['level'] == 'admin') { ?>
            <li><a href="http://localhost/projectuk/siswa/viewsiswa.php">Daftar Siswa</a></li>
            <li><a href="http://localhost/projectuk/kelas/viewkelas.php">Daftar Kelas</a></li>
            <li><a href="http://localhost/projectuk/petugas/viewpetugas.php">Daftar Petugas</a></li>
            <li><a href="http://localhost/projectuk/pembayaran/bayar.php">Pembayaran</a></li>
            <li><a href="http://localhost/projectuk/histori/histori.php?keyword=">Riwayat Pembayaran</a></li>
            <li><a href="">Edit Profil</a></li>
            <div class="navFooter">
              <a href="http://localhost/projectuk/login/logout.php">Logout</a>
              <p>Barannaya.sch.id</p>
            </div>
            <?php } elseif ($_SESSION['level'] == 'petugas') { ?>
            <li><a href="http://localhost/projectuk/siswa/viewsiswa.php">Daftar Siswa</a></li>
            <li><a href="http://localhost/projectuk/pembayaran/bayar.php">Pembayaran</a></li>
            <li><a href="http://localhost/projectuk/histori/histori.php?keyword=">Riwayat Pembayaran</a></li>
            <li><a href="">Edit Profil</a></li>
            <div class="navFooter">
              <a href="http://localhost/projectuk/login/logout.php">Logout</a>
              <p>Barannaya.sch.id</p>
            </div>
            <?php } else { ?>
            <li><a href="http://localhost/projectuk/histori/histori.php">Riwayat Pembayaran</a></li>
            <li><a href="">Edit Profil</a></li>
            <div class="navFooter">
              <a href="http://localhost/projectuk/login/logout.php">Logout</a>
              <p>Barannaya.sch.id</p>
            </div>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </header>
    <script src="../../script/script.php"></script>
