<?php  
    include '../../../koneksi.php';
    if(isset($_POST['simpan'])){
        $id_murid = $_POST['id_murid'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE murid SET id_murid='$id_murid',nama='$nama',jenis_kelamin='$jenis_kelamin',kelas='$kelas', jurusan='$jurusan', email='$email', password='$password' WHERE id_murid='$id_murid'";
        $query = mysqli_query($connect,$sql);
        }
        
        if($query){
            header('location: murid.php');
        }else{
            header('location: edit.php?status=gagal');
        }
?>