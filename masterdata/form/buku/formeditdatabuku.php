<?php 
    include '../koneksi.php';

    $id_buku = $_GET['id_buku'];
    $sql = "SELECT * FROM databuku WHERE id_buku = '$id_buku'";
    $query = mysqli_query($connect, $sql);
    $databuku = mysqli_fetch_assoc($query);

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
    <title>Edit Data Buku</title>

    <!-- link css -->
    <link rel="stylesheet" href="../css/styletambahdatabuku.css">
</head>
<body>
<div class="container">
        <!-- side-bar -->
        <div class="side-bar">
            <!-- logo, nama apk -->
            <div class="logo">
                <a href="#dashboard">StarbhakPustaka</a>
            </div>


        <!-- profile -->
        <div class="profile">
            <div class="foto-profile">
                <img src="../img/poto_profile.jpg" alt="foto profile">
            </div>
            <div class="account-username">
                <a href="settingusername.php">Username</a>
            </div>
        </div>


        <!-- main menu -->
        <div class="select-menu">
            <div class="grey">
                <p>MAIN MENU</p>
            </div>

            <div class="select-dashboard">
                <a href="dashboard.php">Dashboard</a>
            </div>

            <!-- master data -->
            <div class="grey">
                <p>MASTER DATA</p>
            </div>

            <div class="select-datamurid">
                <a href="databuku.php">Data Murid</a>
            </div>

            <div class="select-databuku">
                <a href="databuku.php">Data Buku</a>
            </div>

            <div class="select-peminjamanbuku">
                <a href="peminjamanbuku.php">Peminjaman Buku</a>
            </div>

            <div class="select-pengembalianbuku">
                <a href="pengembalianbuku.php">Pengembalian Buku</a>
            </div>

            <!-- cetak -->
            <div class="grey">
                <p>CETAK</p>
            </div>

            <div class="select-cetak">
                <a href="cetak.php">Cetak</a>
            </div>
        </div>
    </div>
    <div class="tambahdatamurid">
        <p>Edit Data Buku</p>
        <form action="editdatabuku.php" method="post">
            <table>
                <tr>
                    <td></td>
                    <td><input class="input-tambahdata" value="<?php echo $databuku ['id_buku']?>" required="required" type="hidden" maxlength="60" name="id_buku"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Judul Buku </label></td>
                    <td><input class="input-tambahdata" value="<?php echo $databuku ['judul_buku']?>" required="required" type="text" maxlength="60" name="judul_buku"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Genre </label></td>
                    <td><label><input class="input-tambahdata" value="<?php echo $databuku ['genre_buku']?>" required="required" type="text" name="genre_buku"></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Penerbit </label></td>
                    <td><label><input class="input-tambahdata" value="<?php echo $databuku ['penerbit_buku']?>" required="required" type="text" name="penerbit_buku"></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Tahun Terbit </label></td>
                    <td><label><input class="input-tambahdata" value="<?php echo $databuku ['tahunterbit_buku']?>" required="required" type="number" name="tahunterbit_buku"></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Status </label></td>
                    <td><label><input class="input-tambahdata" value="<?php echo $databuku ['status_buku']?>" required="required" type="text" name="status_buku"></label></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input id="button-simpan" type="submit" name="simpandatabuku" value="simpan">
                    </td>
                </tr>
            </table>
    </div>
</body>
</html>
