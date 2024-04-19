  <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <header>
        <nav class="nav-header-main">
        <a class="header.logo" href="index.php">
          <img src="img/removebg-preview.jpg" alt="logo">
        </a>
        <ul> 
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="quantity.php">Quantity</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="signup.php">Signup</a></li>
          <li><a href="checkout.php">Checkout</a></li>
        </ul>
      <div>
  <form action="includes/login.inc.php" method="post"> 
    <input type="text" name="mailuid" placeholder="Username/E-mail...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="Login-submit">Login</button>
  </form>
  <a href="signup.php">Signup</a>
  <form action="includes/logout.inc.php" method="post"> 
  
    <button type="submit" name="Logout-submit">Logout</button>
  </form>
</div>
</nav>
 </header>




    
    </body>
    </html>