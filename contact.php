
<body>
  <?php
  include 'includes/header.php';

?>
<?php
  include_once 'includes/dbh.inc.php';
?>

<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="Submit" name="Submit">Sign Up</button>
</form>
?>

</body>
</html>
