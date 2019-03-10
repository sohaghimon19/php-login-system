<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login system</title>
</head>
<body>
<?php
  require "header.php";
?>
  <main>
      <?php
        if (isset($_SESSION['userId'])) {
        	echo "<p class='text-center font-weight-bold'>your are logged in</p>";
        }
        else{
        	echo "<p class='text-center font-weight-bold'>your are logged out</p>";
        }
      ?>

  	  

  </main>
<?php
  require "footer.php";
?>
</body>
</html>