<?php 
    include '../../../koneksi.php';
    
    if (isset($_POST['simpandatabuku'])) {
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $genre_buku = $_POST['genre_buku'];
        $penerbit_buku = $_POST['penerbit_buku'];
        $tahunterbit_buku = $_POST['tahunterbit_buku'];
        $status_buku = $_POST['status_buku'];

        $sql = "INSERT INTO `databuku`(`id_buku`, `judul_buku`, `genre_buku`, `penerbit_buku`, `tahunterbit_buku`, `status_buku`) 
        VALUES ('$id_buku','$judul_buku','$genre_buku','$penerbit_buku','$tahunterbit_buku','$status_buku')";
        
        $query = mysqli_query($connect, $sql);
        
        if($query) {
            header('location: masterdata/buku.php');
        }else {
            header('location: simpan.php?status=gagal');
        }
    }
?>