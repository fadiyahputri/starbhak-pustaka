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
        @import url('https://fonts.googleapis.com/css2?family=Lancelot&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}

body {
    display: flex;
    background: #F8F9FA;
    height: 100%;
   overflow-y: hidden;

}

.container {
    padding: 2rem 3rem 2rem 2rem;
}

a {
    text-decoration: none;
}

.aksesoris {
    width: 100%;
    height: 320px;
    background-image: linear-gradient(to right, #91D6ED , #6290F9);
    position: absolute;
    opacity: 90%;
}

.sidebar {
    height: 90.5vh;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-right: 3vh;
    background: white;
    border-radius: 1rem;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    transition: width 0.3s linear;
}

.sidebar ul {
    margin: 0 1vh;
}

.sidebar ul li {
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0.8rem;
    margin: 1rem;
    overflow: hidden;
    cursor: pointer;
}

.sidebar ul li:hover {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

    
}
.ic-sidebar.active {
    color: white;
    
}
.sidebar ul li.active {
    background: #7AB4F2;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.sidebar ul li a {
    text-decoration: none;
    display: flex;
    color: black;
}

.sidebar-name {
    font-size: 0.8rem;
    text-transform: capitalize;
    margin-left: 2.1vh;
    display: none;
}

.sidebar-top {
}

.logo {
    margin: 2vh 0;
    padding: 3vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.sidebar-bottom {
    width: 100%;
    height: fit-content;
    background-image: linear-gradient(#91D6ED , #6290F9);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    padding: 0.8rem 0 2rem 0;
    border-radius: 0 0 1rem 1rem;
}

.sidebar-bottom li {
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border-radius: 0.8rem;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.page {
    width: 100%;
    height: 100vh;
}

.group-type {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.type {
    width: 30%;
    height: 120px;
    background: white;
    position: relative;
    margin: 0 0 2% 1%;
    border-radius: 1rem;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    padding: 1rem;
    display: flex;
}

.logo-type {
    width: 100px;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.title-type {
    font-size: 1.2rem;
    font-weight: 500;
    text-transform: capitalize;
}

.total {
    font-size: 1.5rem;
    font-weight: 500;
}

.group-text-type {
    margin: 0 2%;
}
.content {
    width: 100%;
    height: 75vh;
    padding: 2rem;
    position: relative;
    margin: 1vh;
    border-radius: 1rem;
    background: white;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    overflow: auto;
    display: flex;
    justify-content: space-between;
}

.title-content {
    font-size: 1.3rem;
    font-weight: 600;
    text-align: center;
    text-transform: capitalize;
}

.desk-content {
    font-size: 0.8rem;
}

.logo-content {
    width: 33%;
    height: 100%;
}

.img-content {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.group-input {
    display: flex;
    flex-direction: column;
    margin: 4vh 0;
}

.title-input {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 1vh;
}

.inputan {
    width: 83vh;
    height: 40px;
    padding: 1rem;
    border-radius: 0.4rem;
    border: none;
    background: #ECECEC;
}

.left-side {
    margin-right: 2.5%;
}

.right-side {
    margin-left: 2.5%;
}

.left-side,
.right-side {
    margin-top: 1%;
}

.text-page {
    padding: 0 3vh;
}
.title-page {
    font-size: 1.5rem;
    color: white;
    text-transform: capitalize;
}

.route-page {
    font-size: 0.8rem;
    font-weight: 300;
    color: white;
    text-transform: capitalize;
}

nav {
    width: 100%;
    height: 105px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
}

.group-account {
    display: flex;
    align-items: center;
}

.halo {
    font-weight: 600;
    font-size: 1rem;
    color: white;
    /* display: flex;
    flex-direction: column; */
}

.account {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 2vh;
    border-radius: 1rem;
    cursor: pointer;
    background: white;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
}

.fitur-content {
    display: flex;
    justify-content: space-between;
    margin: 2rem 0;
}

.inputan {
    width: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
    background: transparent;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.08);
}

.input-elevated{
    font-size: 0.8rem;
    line-height: 1.5;
    border: none;
    background: #FFFFFF;
    background-repeat: no-repeat;
    background-position: 10px 10px;
    background-size: 20px 20px;
    border-radius: 5px;
    width: 300px;
    height: fit-content;
    padding: .5em 1em .5em 1em;
    } 
    
    .input-elevated::placeholder{
        color: #838D99;
    }
    
    .input-elevated:focus {
        outline: none;
    }

    .btn-content {
        width: 5%;
        height: 5vh;
        padding: 10px 20px;
        margin: 0 1vh;
        border-radius: 0.5rem;
        background: white;
        font-size: 0.8rem;
        font-weight: 500;
        color: black;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        transition: 0.25s;
    }

    .btn-content:hover {
        -webkit-transform: translateY(-10em);
        transform: translateY(-1m);
    }


    table {
        width: 100%;
        height: max-content;
        overflow-y: auto;
    }

    table th {
        padding: 5px 10px;
        color: whitesmoke;
        background: #7AB4F2;
        font-size: 0.9rem;
        text-transform: capitalize;
    }
    
    table th:first-child {
        border-top-left-radius: 0.8rem;
    }
    
    table th:last-child {
        border-top-right-radius: 0.8rem;
    }
    
    table td {
        padding: 6px;
        font-size: 0.8rem;
        font-weight: 500;
        background-color: #F9F9F9;
        padding: 8px 15px;
    }
    
    table td:first-child {
        text-align: center;
    }

    table td:last-child {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    table td a {
        width: 30px;
        height: 25px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 0.3rem;
        background: white;
        margin: 0 0.2rem;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;

    }
    table td a:hover {
        box-shadow: 1px 1px 1px rgb(81, 81, 81);
    }
    td:last-child a {
        
    }

    .ic-action {
        width: 16px;
    }

    .night-mode {
            background-color: #222;
            color: #d9d9d9;
          }
          .night-mode .tumbler {
            transform: translateX(calc(100% - 2px));
          }
          .night-mode .post {
            border-bottom: 1px dashed #d9d9d9;
          }
          
          .header {
            text-align: right;
            width: 80vw;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            padding: 1rem;
            margin: auto;
          }
          
          .header__title {
            display: block;
          }
          
          .tumbler-wrapper {
            margin: 1rem 0;
            width: 50px;
            height: 30px;
            background-color: black;
            border: #1d92b2;
            border-radius: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 6px;
            cursor: pointer;
            display: flex;
            position: relative;
          }
          .tumbler-wrapper svg {
            width: 15px;
            height: 15px;
          }
          
          .tumbler {
            position: absolute;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background-color: #fff;
            transition: transform 0.5s, background-color 0.5s;
            will-change: transform;
          }
          
          .credits {
            display: none;
          }
          
          .sun-svg,
          .moon-svg {
            display: none;
          }
          
          .main {
            width: 80vw;
            max-width: 500px;
            padding: 0 1rem;
            margin: auto;
          }
          
          .post {
            border-bottom: 1px dashed #222;
            margin-bottom: 1.5rem;
            transition: border-bottom 0.5s;
          }
          
          .post__title {
            font-weight: 700;
            margin-bottom: 1rem;
          }
          .post__title:first-child {
            margin-top: 0;
          }
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
                        <iconify-icon class="ic-sidebar" icon="ic:round-dashboard"></iconify-icon>
                    </div>
                    <div class="group-text-type">
                        <p class="title-type">Semua</p>
                        <span class="total">100</span>
                    </div>
                </div>
                <div class="type">
                    <div class="logo-type">
                        <iconify-icon class="ic-sidebar" icon="bxs:book"></iconify-icon>
                    </div>
                    <div class="group-text-type">
                        <p class="title-type">Buku</p>
                        <span class="total">100</span>
                    </div>
                </div>
                <div class="type">
                    <div class="logo-type">
                        <iconify-icon class="ic-sidebar" icon="ph:student-bold"></iconify-icon>
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
                    <img class="img-content" src="../assets/img/logo-dashboard.png" alt="">
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