<?php 
    include '../../../koneksi.php';

    if (isset($_GET['id_buku'])) {
    $sql = "DELETE FROM buku WHERE id_buku='$_GET[id_buku]'";
    }

    $query = mysqli_query($connect, $sql)
    or die (mysqli_error($connect));

    echo "<meta http-equiv=refresh content=0.3;URL='masterdata/buku.php'>";
?>