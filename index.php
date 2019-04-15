<?php $num_of_items=4; ?>

<html>
<head>
    <link rel="stylesheet" href="main.css">

  <!navbar>
  <nav id="navbar" class="navbar">

      <!navbar options to the left of logo>
    <div class="nav-left">
      <div class="nav-nerds"><a href="#">Nerds</a></div>
      <div class="nav-gamers"><a href="#">Gamers</a></div>
      <div class="nav-simplistic"><a href="#">Simplistic</a></div>
    </div>

      <!logo>
    <div class="nav-logo">
      <div class="logo"><a href="#"><img src="assets/logo.svg" height="26"></a></div>
    </div>

      <!navbar options to the right of logo>
    <div class="nav-right">
      <div class="nav-myaccount"><a href="#">My Account</a></li></div>
      <div class="nav-cart"><a href="#">Cart <font color="orange">(<?php echo $num_of_items; ?>)</font></a></div>
    </div>
  </nav>
  
  <!slider banner just below navbar>
  <div class="slider-banner">
      <img style="" src="assets/banner1.png" width="100%">
  </div>

</head>

<body>
  <div class="catagories">
    <div class="cat-all"><a class="cat-link-nerds" href="#">All /</a></div>
    <div class="cat-nerds"><a class="cat-link-nerds" href="#">Nerds /</a></div>
    <div class="cat-gamers"><a class="nav-link-gamers" href="#">Gamers /</a></div>
    <div class="cat-simplistic"><a class="nav-link-simplistic" href="#">Simplistic</a></div>
  </div>
</body>

<script src="script/vue.js"></script>
</html>