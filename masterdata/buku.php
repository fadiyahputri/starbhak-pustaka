<?php 
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
</head>
<body>
    <div class="aksesoris"></div>
    <div class="container" style="width: 100%; height: 90vh; display: flex;">
        <div class="sidebar">
            <div class="sidebar-top">
                <div class="logo">
                    <img src="../assets/img/logo.png" width="25" alt="">
                    <!-- <p class="logo-name">Starpus</p> -->
                </div>
                <ul>
                    <a class="" href="dashboard.php">
                    <li>
                            <iconify-icon class="ic-sidebar" icon="ic:round-dashboard"></iconify-icon>
                        </li>
                    </a>
                    <a href="murid.php" >
                    <li>
                        <iconify-icon class="ic-sidebar" icon="ph:student-bold"></iconify-icon>
                        </li>
                    </a>
                    <a href="">
                    <li class="active">
                            <iconify-icon class="ic-sidebar active" icon="bxs:book"></iconify-icon>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="sidebar-bottom">
            <div class="tumbler-wrapper">
            <div class="tumbler"></div>
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">

      <circle style="fill:#F0C419;" cx="30" cy="30" r="20"/>
      <circle style="fill:#EDE21B;" cx="30" cy="30" r="15"/>
      </svg>
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 499.712 499.712" style="enable-background:new 0 0 499.712 499.712;" xml:space="preserve">
      <path style="fill:#FFD93B;" d="M146.88,375.528c126.272,0,228.624-102.368,228.624-228.64c0-55.952-20.16-107.136-53.52-146.88
          C425.056,33.096,499.696,129.64,499.696,243.704c0,141.392-114.608,256-256,256c-114.064,0-210.608-74.64-243.696-177.712
          C39.744,355.368,90.944,375.528,146.88,375.528z"/>
      <path style="fill:#F4C534;" d="M401.92,42.776c34.24,43.504,54.816,98.272,54.816,157.952c0,141.392-114.608,256-256,256
          c-59.68,0-114.448-20.576-157.952-54.816c46.848,59.472,119.344,97.792,200.928,97.792c141.392,0,256-114.608,256-256
          C499.712,162.12,461.392,89.64,401.92,42.776z"/>
      <g>
          <polygon style="fill:#FFD83B;" points="128.128,99.944 154.496,153.4 213.472,161.96 170.8,203.56 180.864,262.296 
              128.128,234.568 75.376,262.296 85.44,203.56 42.768,161.96 101.744,153.4 	"/>
          <polygon style="fill:#FFD83B;" points="276.864,82.84 290.528,110.552 321.104,114.984 298.976,136.552 304.208,166.984 
              276.864,152.616 249.52,166.984 254.752,136.552 232.624,114.984 263.2,110.552 	"/>
      </svg>
          </div>
                <li>
                    <a href="">
                        <box-icon class="ic-sidebar" name='log-out' ></box-icon>
                        <p class="sidebar-name">logout</p>
                    </a>
                </li>
            </div>
        </div>
        <div class="page">
            <nav>
                <div class="text-page">
                    <h2 class="title-page">buku</h2>
                    <p class="route-page">starpus/buku</p>
                </div>
                <div class="group-account">
                    <p class="halo">Halo, <span>Admin</span></p>
                    <div class="account"><box-icon name='user' ></box-icon></div>
                </div>
            </nav>
            
            <div class="content">
            
                <h3 class="title-content">Data Buku</h3>
                <div class="fitur-content">
                    <div>
                        <a href="" class="btn-content" id="import">Import</a>
                        <a href="tambahdatamurid2.html" class="btn-content">Tambah</a>
                        <a href="" class="btn-content" id="import">Export</a>
                    </div>
                    <div class="inputan">
                        <box-icon style="width: 20px;" name='search'></box-icon>
                        <input class="input-elevated" type="text" placeholder="ketik disini...">

                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Genre</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
    
                    <?php
                $i = 1;
                $sql = "SELECT * FROM buku";
    
                $query = mysqli_query($connect, $sql);
                while($buku = mysqli_fetch_array($query)) {
                    echo "<tr>
                    <td>$i</td>
                    <td>$buku[judul]</td>
                    <td>$buku[genre]</td>
                    <td>$buku[penerbit]</td>
                    <td>$buku[tahun_terbit]</td>
                    <td>$buku[status]</td>
                    <td>
                        <a href='formeditbuku.php?id_buku=".$buku['id_buku']."'>
                            <iconify-icon icon='akar-icons:edit'></iconify-icon>
                        </a>
                        <a href='hapusbuku.php?id_buku=".$buku['id_buku']."'onClick=\"return confirm('yakin akan menghapus data ?');\">
                            <iconify-icon icon='ic:round-delete'></iconify-icon>
                        </a>
                    </td>
                </tr>
                ";
                $i++;
            }
            ?>
                    </tbody>
                </table>
            </div>
    
        </div>
    </div>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script>
            document.querySelector('.tumbler-wrapper').addEventListener('click', _ => document.body.classList.toggle('night-mode'));


        </script>
</body>
</html>