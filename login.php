<?php 
    include '../koneksi.php';
     //atur variable
     $err = "";
     $username = "";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarPus | Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lancelot&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: space-between;
            padding: 2rem;
            overflow: hidden;
            width: 100%;
            height: 100vh;
        }

        .left-side {
            width: 49%;
            height: 100%;   
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo-name {
            font-weight: 600;
            font-size: 1rem;
            margin: 0 1%;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .group-text-form {
            margin: 3% 0;
            text-align: center;
        }

        .title-form {
            font-size: 1.7rem;
            font-weight: 700;
        }

        .desk-form {
            font-size: 0.7rem;
        }

        .inputan {
            width: 50%;
            height: 6.5vh;
            margin: 1% 0;
            padding: 0 0 0 2%;
            border-radius: 0.6rem;
            background: #F8F8F8;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        input {
            width: 90%;
            height: 100%;
            border: none;
            background: #F8F8F8;
        }

        input:focus {
            outline: none;
        }

        .btn-login {
            width: 50%;
            height: 5vh;
            border-radius: 0.6rem;
            margin: 2%;
            border: none;
            background-image: linear-gradient(to right, #91D6ED , #6290F9);
            color: white;
            font-weight: 600;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            cursor: pointer;
        }

        .right-side {
            width: 50%;
            height: 100%;
            border-radius: 1rem;
            background: black;
        }

        .img-login {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .copyright {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .group-copyright {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.6rem;
        }

        .text-copyright {
            font-size: 0.6rem;
        }

    </style>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <div class="left-side">
        <div class="logo">
            <img src="assets/img/logo.png" width="40" alt="">
            <p class="logo-name">StarPus</p>
        </div>
        <form action="">
            <div class="group-text-form">
                <p class="title-form">Welcome Back</p>
                <span class="desk-form">Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
            </div>
            <div class="inputan">
                <iconify-icon icon="mdi:account" style="color: black;" width="18"></iconify-icon>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="inputan">
                <iconify-icon icon="mdi:password" style="color: black;" width="18"></iconify-icon>
                <input type="password" name="password" placeholder="Password">
            </div>
            <input class="btn-login" name="login" type="submit" value="Login">
        </form>
        <div class="copyright">
            <div class="group-copyright">
                <iconify-icon icon="fluent-emoji-high-contrast:school" style="color: black;" width="11"></iconify-icon>
                <p>SMK Taruna Bhakti ● Siswi Tb</p>
            </div>
            <p class="text-copyright">©2023 SMK Taruna Bhakti. All Rights Reserved</p>
        </div>
    </div>
    <div class="right-side">
        <img src="assets/img/right-side.jpg" class="img-login" alt="">
    </div>
</body>
</html>