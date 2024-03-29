<?php 
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | starpus</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>

    </style>
    
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
                    <li class="active">
                            <iconify-icon class="ic-sidebar active" icon="ic:round-dashboard"></iconify-icon>
                            <!-- <box-icon class="ic-sidebar" type='solid' name='dashboard'></box-icon> -->
                            <p class="sidebar-name">dashboard</p>
                        </li>
                    </a>
                    <a href="murid.php" >
                    <li>
                        <iconify-icon class="ic-sidebar" icon="ph:student-bold"></iconify-icon>
                            <!-- <box-icon color='#FFFFFF' class="ic-sidebar" type='solid' name='book'></box-icon> -->
                            <p class="sidebar-name">murid</p>
                        </li>
                    </a>
                    <a href="">
                    <li>
                            <iconify-icon class="ic-sidebar" icon="bxs:book"></iconify-icon>
                            <p class="sidebar-name">buku</p>
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
                        <box-icon name='log-out' ></box-icon>
                        <p class="sidebar-name">logout</p>
                    </a>
                </li>
            </div>
        </div>
        <div class="page">
            <nav>
                <div class="text-page">
                    <h2 class="title-page">Dashboard</h2>
                    <p class="route-page">starpus/Dashboard</p>
                </div>
                <div class="group-account">
                    <p class="halo">Halo, <span>Admin</span></p>
                    <div class="account"><box-icon name='user' ></box-icon></div>
                </div>
            </nav>
            <div class="group-type">
                <div class="type">
                    <div class="logo-type">
                        <iconify-icon class="ic-sidebar" width="33" icon="ic:round-dashboard"></iconify-icon>
                    </div>
                    <div class="group-text-type">
                        <p class="title-type">Semua</p>
                        <span class="total">100</span>
                    </div>
                </div>
                <div class="type">
                    <div class="logo-type">
                        <iconify-icon class="ic-sidebar" width="33" icon="bxs:book"></iconify-icon>
                    </div>
                    <div class="group-text-type">
                        <p class="title-type">Buku</p>
                        <span class="total">100</span>
                    </div>
                </div>
                <div class="type">
                    <div class="logo-type">
                        <iconify-icon class="ic-sidebar" width="33" icon="ph:student-bold"></iconify-icon>
                    </div>
                    <div class="group-text-type">
                        <p class="title-type">murid</p>
                        <span class="total">100</span>
                    </div>
                </div>
            </div>
            <div style="height: 55.5vh; " class="content">
                <div>
                    <h3 style="text-align: start;" class="title-content">StarPus</h3>
                    <p class="desk-content">lorem ipsum lorem ipsum lorem ipsum</p>
                </div>
                <div class="logo-content">
                    <img class="img-content" src="../assets/img/right-side.jpg" alt="">
                </div>

            </div>
    
        </div>
    </div>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script>
            document.querySelector('.tumbler-wrapper').addEventListener('click', _ => document.body.classList.toggle('night-mode'));


        </script>
</body>
</html>