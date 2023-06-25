<?php 
    include '../../../koneksi.php';
    
    if (isset($_POST['simpandatamurid'])) {
        $id_murid = $_POST['id_murid'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `murid`(`id_murid`, `nama_murid`, `jeniskelamin_murid`, `kelas_murid`, `email_murid`, `password_murid` ,`telepon_murid`) VALUES ('$id_murid','$nama_murid','$jeniskelamin_murid','$kelas_murid','$email_murid', '$password_murid', '$telepon_murid')";
        
        $query = mysqli_query($connect, $sql);
        var_dump($sql);
        if($query) {
            header('location: murid.php');
        }else {
            header('location: simpan.php?status=gagal');
        }
    }
?>