<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?php echo get_template_directory_uri() ?>/src/bootstrap/css/bootstrap.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />


    <title><?php
            bloginfo('name'); ?></title>
</head>

<body>

    <header>
    <div id="navbar_bg">
        <div class="col-6 col-lg-12 navbar_conteudo">
          
                <div class="col-5 col-lg-6 container_left"> 
            
                <div class=" col-lg-2 logo"style="cursor:pointer"title="Netflix"><img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" style="height:25px; margin-top:20px;"></div>
                <div class=" col-2 col-lg-10 menu">
                <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"style="margin-left:-10px; margin-top:2px;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="#">Inicío</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Séries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bombando</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Minha lista</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav></div>


            </div>
                <div class=" col-7 col-lg-6 container_right">
<div class="col-lg-3"></div>
             <form class="col-lg-5 d-flex">

             <div class="buscar">
             <input class="busca me-2" type="search" placeholder="Titulo, gente e gêneros" aria-label="Search">
             <img class="btn_busca" src="<?php echo get_template_directory_uri()?>/src/img/busca.png"style="height:25px; cursor:pointer; ">

    </form> 
</div>
    <div class="col-lg-5 buttons"> 

    





    <button type="button" id="buttonT" class="btn " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nenhuma notificação disponivel">
    <img src="<?php echo get_template_directory_uri()?>/src/img/bell.png"style="height:25px; margin-top:-18px;">
</button>
    <div class="dropdown">
  <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
<img src="<?php echo get_template_directory_uri()?>/src/img/user.png"style="height:30px; margin-top:-15px;">
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"style="">
    
<li><img src="<?php echo get_template_directory_uri()?>/src/img/user.png"style="height:30px; border-radius:4px;">
<a class="dropdown-item" href="#">Gabriel</a> 

<li><img src="<?php echo get_template_directory_uri()?>/src/img/user.png"style="height:30px; border-radius:4px;">
<a class="dropdown-item" href="#">Filipe</a> 
<li><img src="<?php echo get_template_directory_uri()?>/src/img/user.png"style="height:30px; border-radius:4px;">
<a class="dropdown-item" href="#">Mikael</a> 
</li>
<li style=" margin-top:5px; margin-left:5px;">
<a class="dropdown-item" href="#">Gerenciar Perfis</a> 
</li>
<li style=" margin-top:5px; border-top:1px solid #2d2d2d ; margin-left:5px;">
<a class="dropdown-item" href="#">Gonta</a> 
</li>
<li style=" margin-top:5px;; margin-left:5px;">
<a class="dropdown-item" href="#">Centro de ajuda</a> 
</li>
<li style=" margin-top:5px; margin-left:5px;">
<a class="dropdown-item" href="#">Sair da netflix</a> 
</li>
</ul>
</div>
</button>   
  

  </div>
                </div>
        </div></div>
        <div class="header_info">
        <div class="header_info_item">
          <h1><img src="https://occ-0-1068-1723.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABZO3j_WmA1Sxvr-4LRTVIPd0guV7OkWL5k48jsBQJDWlXCiIvalnZMzlU1dQqM4Dy2UIGLEId8HdTivxOUQc_utt83C0DQJTpxs0ybWBF8uN30opor9GNy8FtKXpdb3HYkI5dAAw5GUDZrdf2xjteh4rGjBE-8fUXImRGSoOQpzZUQ.png?r=702"style="height:150px;"></h1>
<p>Lucifer está entediado e infeliz como o Senhor do Inferno e decide tirar férias em Los Angeles, onde vira dono de uma casa noturna com ajuda de sua serva Mazikeen.</p>
<div class="header_info_item_button">

<a href="#"><div class="assistir"> <img src="<?php echo get_template_directory_uri() ?>/src/img/play.png">Assistir</div></a>
<a href="#"><div class="info"> <img src="<?php echo get_template_directory_uri() ?>/src/img/info.png">Mais informações</div></a>

</div>
        </div></div>
        
    </header>