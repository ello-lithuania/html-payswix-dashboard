<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css" />
    <title>Manage Landing Page</title>
  </head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <style>
  .swiper {
    width: 100%;
    height: 100%;
  }
  .swiper-slide {
    text-align: center;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }  
  </style>

<body>

<nav class="main-navbar">
  <div class="main-navbar-inner">
    <a href="./" class="main-navbar-brand">
      <img src="./img/logo-pswx-RGB.svg"/>
    </a>
    <button data-collapse-toggle="navbar-dropdown" type="button" class="main-navbar-collapse" aria-controls="navbar-dropdown" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="main-navbar-collapse-menu hidden" id="navbar-dropdown">
      <ul class="main-navbar-collapse-menu-list">
        <li>
          <a href="./index.php" aria-current="page">Account</a>
        </li>
        <li>
          <a href="./transfers.php">Transfers</a>
        </li>
        <li>
          <a href="./statements.php">Statements</a>
        </li>
        <li>
          <a href="./cards.php">Debit cards</a>
        </li>
        <li>
          <a href="./conversions.php">Conversions</a>
        </li>
        <li>
          <a href="./faq.php">Support center</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
