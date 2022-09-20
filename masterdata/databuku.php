<?php 
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>

    <!-- link css -->
    <link rel="stylesheet" href="../css/styledatabuku.css">

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> 
</head>
<body id="databuku">
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
        <div class="table">
            <p>Data Buku</p>
            <div class="addtable-search">
                <div class="addtable">
                    <h4><a href="tambahdatabuku.html">Tambah Data</a></h4>
                </div>
                <div class="search">
                    <div class="serach-text">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
            <table>
                <th>No</th>
                <th>Id Buku</th>
                <th>Judul Buku</th>
                <th>Genre</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Status</th>
                <th>Aksi</th>
    
            <?php 
                $sql = "SELECT * FROM databuku";
    
                $query = mysqli_query($connect, $sql);
                while($databuku = mysqli_fetch_array($query)) {
                    echo "<tr>
                    <td>$databuku[no_buku]</td>
                    <td>$databuku[id_buku]</td>
                    <td>$databuku[judul_buku]</td>
                    <td>$databuku[genre_buku]</td>
                    <td>$databuku[penerbit_buku]</td>
                    <td>$databuku[tahunterbit_buku]</td>
                    <td>$databuku[status_buku]</td>
                    <td>
                        <a href='formeditdatabuku.php?id_buku=".$databuku['id_buku']."'>Edit</a>
                        <a href='hapusdatabuku.php?id_buku=".$databuku['id_buku']."'onClick=\"return confirm('yakin akan menghapus data ?');\">Hapus</a>
                    </td>
                </tr>";
            }
            ?>
    </div>
    </table>
</body>
</html>