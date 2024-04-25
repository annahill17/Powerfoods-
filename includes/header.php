<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
 <header><nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="header.logo" href="index.php">
          <img src="img/removebg-preview.jpg" alt="logo">
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quantity.php">Quantity</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php">Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Signup</a>
        </li>
      </ul>
      <form action="includes/login.inc.php" method="post"> 
    <input type="text" name="mailuid" placeholder="Username/E-mail...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="Login-submit">Login</button>
  </form>
  <form action="includes/logout.inc.php" method="post"> 
    <button type="submit" name="logout-submit">Logout</button>
  </form>
    </div>
  </div>
</nav>
<main>
    <div class="wrapper-main">
      <section class="section-default">
      <p class="login-status">You are logged out!</p>
      <p class="login-status">You are logged in!</p>
        </section>
    </div>
</main>
</div>
</nav>
 </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>