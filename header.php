<?php
session_start()
?>


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
      
    <title>Login Form</title>
</head>

<body>
    <div class="container-fluid" id="register-container">
           <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <div class="register-form">
                <h1 class="text-white font-weight-bold">Log In</h1>
                </div>
                <div class="form-item">
                    <?php 
                        if (isset($_SESSION['userId'])) {
                            echo "<form action='includes/logout.inc.php' method='post'>
                        
                        <button type='submit' class='btn btn' name='logout-submit'>Logout</button>
                        </form>";
                        }
                        else{
                            echo "<form action='includes/login.inc.php' method='post'>
                        <div class='form-group'>
                            <lebal>Username</lebal><br>
                            <input type='text' name='mailuid' placeholder='Username/E-mail...'>
                        </div>
                        <div class='form-group'>
                            <lebal>Password</lebal><br>
                            <input type='password' name='pwd' placeholder='Password...'>
                        </div>
                        <button type='submit' class='btn btn' name='login-submit'>Login</button>
                        <p>
                            Not yet a member? <a href='signup.php'>Sign up</a>
                        </p>
                    </form>";
                        }
                    ?>
                    
                    
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