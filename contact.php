
<body>
  <?php
  include 'includes/header.php';

?>
<?php
  include_once 'includes/dbh.inc.php';
?>
<?php

$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['user_first'] . "<br>";
  }

}
?>

</body>
</html>
