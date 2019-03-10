
  <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css">
      
    <title>Signup from</title>
</head>

<body>
    <div class="container-fluid" id="register-container">
           <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <div class="form-item">
                    <h1 class="text-white font-weight-bold">Signup</h1>
                    <?php
                       if (isset($_GET['error'])) {
                             if ($_GET['error'] == 'emptyfields') {
                                 echo "<p class='text-danger font-weight-bold'>Fill in all fields!</p>";
                             }
                             elseif ($_GET['error'] == 'invalidmailuid') {
                                echo "<p class='text-danger font-weight-bold'>Invali email & Userid!</p>";
                             }
                              elseif ($_GET['error'] == 'invalidmail') {
                                echo "<p class='text-danger font-weight-bold'>Invali email address!</p>";
                             }
                              elseif ($_GET['error'] == 'invaliduid') {
                                echo "<p class='text-danger font-weight-bold'>Invali Userid!</p>";
                             }
                              elseif ($_GET['error'] == 'passwordcheck') {
                                echo "<p class='text-danger font-weight-bold'>Your pasword do no match</p>";
                             }
                              elseif ($_GET['error'] == 'usertaken') {
                                echo "<p class='text-danger font-weight-bold'>Username already taken!</p>";
                             }
                         }

                       
                        elseif ($_GET['signup'] = 'success') {
                             echo "<p class='text-success font-weight-bold'>Signup successful!</p>";
                        }
                    ?>


                    <form action="includes/signup.inc.php" method="post">
                        <div class="form-group">
                            <lebal>Username</lebal><br>
                            <input type="text" name="uid" placeholder="Username/E-mail...">
                        </div>
                        <div class="form-group">
                            <lebal>E-mail</lebal><br>
                            <input type="text" name="mail" placeholder="E-mail...">
                        </div>
                         <div class="form-group">
                            <lebal>Password</lebal><br>
                            <input type="password" name="pwd" placeholder="password...">
                        </div>
                          <div class="form-group">
                            <lebal>Confirm Password</lebal><br>
                            <input type="password" name="pwd-repeat" placeholder="repeat-password">
                        </div>
                        <button type="submit" class="btn btn" name="signup-submit">Sign-Up</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
<?php
  require "footer.php";
?>

