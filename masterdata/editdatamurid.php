<?php  
    include '../koneksi.php';
    if(isset($_POST['simpandatamurid'])){
        $no_murid = $_POST['no_murid'];
        $id_murid = $_POST['id_murid'];
        $nama_murid = $_POST['nama_murid'];
        $jeniskelamin_murid = $_POST['jeniskelamin_murid'];
        $kelas_murid = $_POST['kelas_murid'];
        $email_murid = $_POST['email_murid'];
        $password_murid = $_POST['password_murid'];

        $sql = "UPDATE datamurid SET no_murid='$no_murid, 'id_murid'='$id_murid', nama_murid='$nama_murid', jeniskelamin_murid='$jeniskelamin_murid', kelas_murid='$kelas_murid', email_murid='$email_murid', password_murid='password_murid' WHERE id_murid='$id_murid'";
        $query = mysqli_query($connect,$sql);
        }
        
        if($query){
            header('location: datamurid.php');
        }else{
            header('location: editdatamurid.php?status=gagal');
        }
?>