<?php  
    include '../koneksi.php';
    if(isset($_POST['simpandatabuku'])){
        $no_buku = $_POST['no_buku'];
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $genre_buku = $_POST['genre_buku'];
        $penerbit_buku = $_POST['penerbit_buku'];
        $tahunterbit_buku = $_POST['tahunterbit_buku'];

        $sql = "UPDATE databuku SET no_buku='no_buku, 'id_buku'='$id_buku', judul_buku='$judul_buku', genre_buku='$genre_buku', penerbit_buku='$penerbit_buku', tahunterbit_buku='$tahunterbit_buku' WHERE id_buku='$id_buku'";
        $query = mysqli_query($connect,$sql);
        }
        
        if($query){
            header('location: databuku.php');
        }else{
            header('location: editdatabuku.php?status=gagal');
        }
?>