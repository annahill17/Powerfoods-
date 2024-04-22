<?php
  include_once 'dbh.inc.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid= $_POST['uid'];
$pwd = $_POST['pwd'];
?>
<?php
$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
  mysqli_query($conn, $sql);

  header("Location: ../index.php?signup=success");
?>
<?php
if (isset($_POST['signup-submit'])) {
  
  require 'dbh.inc.php';

  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

if (empty($username) || empty($email)  || empty($pwd ) || empty($passwordRepeat)) {
    header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/ ",  $username )) {
  header("Location: ../signup.php?error=invaildmailuid");
  exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../signup.php?error=invaildmail&uid=".$username);
  exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/ ",  $username )) {
  header("Location: ../signup.php?error=invailduid&mail=".$email);
  exit();
}
else if ($password !== $passwordRepeat) {
  header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
  exit();
}
else{

  $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../signup.php?error=sqlerror");
    exit();
  }
else{
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  
}
}

