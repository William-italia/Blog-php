<?php

 include_once("./assets/helpers/url.php");
 include_once("./assets/data/posts.php");
 include_once("./assets/data/categories.php");
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- estilos projeto -->
    <link rel="stylesheet" href="<?php $BASE_URL?>assets/css/header.css">
    <link rel="stylesheet" href="<?php $BASE_URL?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php $BASE_URL?>assets/css/footer.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>  
    <header>
        <div id="bar-menu">
            <div id="logo">
                <a href="<?php $BASE_URL ?>">
                    <img src="<?php $BASE_URL?>assets/img/logo_v.png" alt="">
                </a>
            </div>
            <nav id="navbar">
                <ul>
                    <li><a href="<?php $BASE_URL?>">Home</a></li>
                    <li><a href="">Categorias</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contact</a></li>
                </ul>   
            </nav>  
        </div>
    </header>