<?php
$login_alert= false;
$InvalidLogin = false;
$Empty = false;
require 'display/_dbconnect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require 'display/_dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    {
        $sql = "Select * from userdata where username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);

        if($num == 1){
            $login_alert = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            //header("location: /practice/index.php");            
        }
        else{
          if(empty($_POST['username']) || empty($_POST['password']))
          {
            $Empty = true;
          }
          else{
            $InvalidLogin = true;
          }
            
        }
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">-->
    <link rel="stylesheet" href="bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="stylehome.css" type="text/css" media="all">
    <link rel="icon" href="image/favicon.ico">


    <title>Hello, world!</title>
  </head>
  <body style="background-image:url(image/corona2.jpg);">
   
  <?php
  include "navbar.php";
  ?>
      <?php
    if($login_alert){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> You are Loged in. Click <a class="link-custom" href="index.php">here</a>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
      <div class="container mt-5 log-box">
        <h3 class="text-center mt-3 opac">Log in</h3>
        <?php
              if($Empty){
                echo '<p class="text-center py-2">Enter Username and Password</p>';
              }
              ?>
        <form action="/practice/login.php" method="POST">
            <div class="mt-3 mx-2">
                <div>
                  <label for="username" class="form-label opac">Username</label>
                <input type="text" class="form-control mb-3 opac" name="username" id="username" placeholder="Username">
                </div>
                <div><label for="password" class="form-label opac">Password</label>
                <input type="password" class="form-control opac" name= "password" id="password" placeholder="Password" minlength="4" maxlength="20">
                </div>
              </div>
              <?php
              if($InvalidLogin){
                echo '<p class="text-center py-2">Invalid Username and Password</p>';
              }
              ?>
  <div class="text-center mt-4"><input class="btn btn-outline-success opac"type="submit" name="login"  value="Log In"> <!--onclick="alert('Conformation')"-->
        <input class="mb-2 mt-2 btn btn-outline-success  opac" type="reset">
    </div>
  
        <p class="mb-3 text-center  opac">Create an <a class="link-custom" href="/practice/signup.php"><strong>account</strong></a>.</p>
</form>
    </div>
    <footer>
        <div class=" footer2">
            <p class="py-3" style="display: inline-block;">Designed by Rohit Joshi</p>
          </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>