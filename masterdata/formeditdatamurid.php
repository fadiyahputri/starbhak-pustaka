<?php 
    include '../koneksi.php';

    $id_murid = $_GET['id_murid'];
    $sql = "SELECT * FROM datamurid WHERE id_murid = '$id_murid'";
    $query = mysqli_query($connect, $sql);
    $datamurid = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) < 1) {
        die ("data tidak ditemukan");
    }
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Murid</title>

    <!-- link css -->
    <link rel="stylesheet" href="../css/styletambahdatamurid.css">
</head>
<body>
<div class="container">
        <!-- side-bar -->
        <div class="side-bar">
            <!-- logo, nama apk -->
            <div class="logo">
                <div class="gambar-logo">
                    <img src="../img/logobuku1.png" alt="logo buku">
                </div>
                <p>StarbhakPustaka</p>
            </div>


        <!-- profile -->
        <div class="profile">
            <div class="foto-profile">
                <img src="../img/poto_profile.jpg" alt="foto profile">
            </div>
            <div class="account-username">
                <a href="#username">Username</a>
            </div>
        </div>


        <!-- main menu -->
        <div class="select-menu">
            <div class="grey">
                <p>MAIN MENU</p>
            </div>

            <div class="select-dashboard">
                <a href="#dashboard">Dashboard</a>
            </div>

            <!-- master data -->
            <div class="grey">
                <p>MASTER DATA</p>
            </div>

            <div class="select-datamurid">
                <a href="#datamurid">Data Murid</a>
            </div>

            <div class="select-databuku">
                <a href="#databuku">Data Buku</a>
            </div>

            <div class="select-peminjamanbuku">
                <a href="#peminjamanbuku">Peminjaman Buku</a>
            </div>

            <div class="select-pengembalianbuku">
                <a href="#pengembaliananbuku">Pengembalian Buku</a>
            </div>

            <!-- cetak -->
            <div class="grey">
                <p>CETAK</p>
            </div>

            <div class="select-cetak">
                <a href="#cetak">Cetak</a>
            </div>
        </div>
    </div>
    <div class="tambahdatamurid">
        <p>Edit Data Murid</p>
        <form action="simpandatamurid.php" method="post">
            <table>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> No </label></td>
                    <td><label><input class="input-tambahdata" required="required" type="number" min="0" name="no_murid"></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Id </label></td>
                    <td><label><input class="input-tambahdata" required="required" type="number" min="0" name="id_murid"></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Nama Murid </label></td>
                    <td><input class="input-tambahdata" required="required" type="text" maxlength="60" name="nama_murid"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Jenis Kelamin </label></td>
                    <td><label><input class="input-tambahdata" required="required" type="text" name="jeniskelamin_murid"></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Kelas </label></td>
                    <td><label><input class="input-tambahdata" required="required" type="text, number" name="kelas_murid"></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Email </label></td>
                    <td><label><input class="input-tambahdata" required="required" type="email" name="email_murid"></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Password </label></td>
                    <td><label><input class="input-tambahdata" required="required" type="password" name="password_murid"></label></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input id="button-simpan" type="submit" name="simpandatamurid" value="simpan">
                    </td>
                </tr>
            </table>
    </div>
</body>
</html>
