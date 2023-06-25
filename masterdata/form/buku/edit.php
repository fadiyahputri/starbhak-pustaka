<?php  
    include '../../../koneksi.php';
    if(isset($_POST['simpan'])){
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $genre = $_POST['genre'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $status = $_POST['status'];

        $sql = "UPDATE `databuku` SET `id_buku`='$id_buku',`judul`='$judul',`genre`='$genre',`penerbit`='$penerbit',`tahun_terbit`='$tahun_terbit',`status`='$status' WHERE id_buku='$id_buku'";
        $query = mysqli_query($connect,$sql);
        }

        if($query){
            header('location: buku.php');
        }else{
            header('location: edit.php?status=gagal');
        }
?>