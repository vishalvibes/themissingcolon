<?php $num_of_items=4; ?>

<head>
  <link rel="stylesheet" href="main.css">

<div id="nav-logo-parent" class="nav-logo-parent">
  <div class="nav-logo"><a href="#"><img class="logo" src="assets/logo.svg" height="26"></a></div>
</div>

<div class="nav-container" id="nav-container">
<nav id="navbar" class="navbar">
    <div class="nav-nerds"><a class="nav-left" href="#">Nerds</a></div>
    <div class="nav-gamers"><a class="nav-left" href="#">Gamers</a></div>
    <div class="nav-simplistic"><a class="nav-left" href="#">Simplistic</a></div>
    <div class="nav-myaccount"><a class="nav-right" href="#">My Account</a></li></div>
    <div class="nav-cart"><a class="nav right" href="#">Cart<sup><?php echo $num_of_items; ?></sup></a></li><div>
</nav>
</div>
    <img style="" src="assets/banner1.png" width="100%">
</head>

<body>
<div class="catagories">
  <div class="cat-all"><a class="cat-link-nerds" href="#">All /</a></div>
  <div class="cat-nerds"><a class="cat-link-nerds" href="#">Nerds /</a></div>
  <div class="cat-gamers"><a class="nav-link-gamers" href="#">Gamers /</a></div>
  <div class="cat-simplistic"><a class="nav-link-simplistic" href="#">Simplistic</a></div>
</div>
</body>
