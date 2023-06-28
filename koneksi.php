<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_starpus";
    $connect = mysqli_connect($host, $user, $password, $database)
?>

<?php 
    session_start();
    if(!isset($_SESSION['session_username'])) {
        header("location: login.php");
        exit();
    }
?>