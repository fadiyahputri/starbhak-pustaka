<?php 
    include '../koneksi.php';
    
    if (isset($_POST['simpandatamurid'])) {
        $id_murid = $_POST['id_murid'];
        $nama_murid = $_POST['nama_murid'];
        $jeniskelamin_murid = $_POST['jeniskelamin_murid'];
        $kelas_murid = $_POST['kelas_murid'];
        $email_murid = $_POST['email_murid'];
        $password_murid = $_POST['password_murid'];
        $telepon_murid = $_POST['telepon_murid'];

        $sql = "INSERT INTO `datamurid`(`id_murid`, `nama_murid`, `jeniskelamin_murid`, `kelas_murid`, `email_murid`, `password_murid` ,`telepon_murid`) VALUES ('$id_murid','$nama_murid','$jeniskelamin_murid','$kelas_murid','$email_murid', '$password_murid', '$telepon_murid')";
        
        $query = mysqli_query($connect, $sql);
        var_dump($sql);
        if($query) {
            header('location: datamurid.php');
        }else {
            header('location: simpandatamurid.php?status=gagal');
        }
    }
?>