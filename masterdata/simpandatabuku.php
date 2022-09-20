<?php 
    include '../koneksi.php';
    
    if (isset($_POST['simpandatabuku'])) {
        $no_buku = $_POST['no_buku'];
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $genre_buku = $_POST['genre_buku'];
        $penerbit_buku = $_POST['penerbit_buku'];
        $tahunterbit_buku = $_POST['tahunterbit_buku'];

        $sql = "INSERT INTO databuku (no_buku, id_buku, judul_buku, genre_buku, penerbit_buku, tahunterbit_buku, status_buku) 
        VALUES ('$no_buku','$id_buku','$judul_buku','$genre_buku','$penerbit_buku','$tahunterbit_buku','$status_buku')";
        
        $query = mysqli_query($connect, $sql);
        
        if($query) {
            header('location: databuku.php');
        }else {
            header('location: simpandatabuku.php?status=gagal');
        }
    }
?>