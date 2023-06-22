<?php 
    include '../koneksi.php';

    if (isset($_GET['id_murid'])) {
    $sql = "DELETE FROM datamurid WHERE id_murid='$_GET[id_murid]'";
    }

    $query = mysqli_query($connect, $sql)
    or die (mysqli_error($connect));

    echo "<meta http-equiv=refresh content=0.3;URL='datamurid.php'>";
?>