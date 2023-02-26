<?php
session_start();
if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']=true){
    //header("location: login.php");
    //header("location: login.php");
    
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

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bdr">
        <div class="container-fluid">
          <a class="navbar-brand" href="/practice/index.php">Covid-19</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/practice/index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/latest.html">LATEST</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/helpdesk.html">HELPDESK</a>
              </li>
            </ul>
            <!--<form class="d-flex me-2" action="#login" method="post">
                <button class="btn btn-outline-success" type="submit">LogIn</button>
            </form>
            <form class="d-flex" action="#signin" method="post">
                <button class="btn btn-outline-success" type="submit">SignIn</button>
            </form>-->
            <div>
              <p class="me-3 pt-3" style="display: inline-block; color:black; font-size:1.2rem">HELP-LINE NO. -88888888888</p>
            </div>
            <a class="btn btn-outline-success me-2" href="/practice/login.php" role="button">Donate</a>
            <a class="btn btn-outline-success me-2" href="/practice/logout.php" role="button">Logout</a>
            
            
          </div>
        </div>
      </nav>
    <div class="row mb-3" style="background-color: white;">  
      <div class="col-lg-6" style="background-color: rgb(221, 238, 241);">
        <h3 class="my-4 mx-4" style="text-align: center; color: rgb(185, 176, 176); background-color:none;">What is Covid-19</h3>

        <p class="mx-5 list-color">Coronavirus disease (COVID-19) is an infectious
          disease caused by a newly discovered nobel corona virus.
        </p>
        <ul class="mx-5 list-color mbcustom">
          <li class="my-0 list-custom">Fever</li>
          <li class="my-0 list-custom">Drycough</li>
          <li class="my-0 list-custom">Tierdness</li>
        </ul>
        <hr class="mx-5 hr1" style=" color:red;">
        <h3 class="my-4 mx-4" style="text-align: center; color: rgb(97, 33, 33); background-color:none;">Covid-19 Precautions</h3>
        <ul class="my-0 mx-5 list-color">
          <li class="my-0 list-custom">Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
          <li class="my-0 list-custom">Maintain social distancing</li>
          <li class="my-0 list-custom">Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
          <li class="my-0 list-custom">Stay home if you feel unwell.</li>
          <li class="my-0 list-custom">If you have a fever, cough and difficulty breathing, seek medical attention. Call in
            advance.</li>
          <li class="my-0 list-custom">Follow the directions of your local health authority.</li>
        </ul>
      </div>
      <div class="row col-lg-6 " style="background-color: rgb(104, 72, 72)">
        <img class = "my-4 img-custom mbcustom" src="image/Home_img_2.png" alt="Home_img_1" width="80%" height="80%">
      </div> 
    </div>

    <div class=" footer1">
      <p class="pt-3" style="display: inline-block;">Designed by Adarsh Sharma</p>
    </div>
   
      
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
