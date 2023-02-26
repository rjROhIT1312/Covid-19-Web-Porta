<?php
$alert= false;
$Duplicate= false;
$Invalid= false;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require 'display/_dbconnect.php';
        $username = $_POST['username'];
        $aadhar = $_POST['aadhar'];
    $email = $_POST['email'];
    $m_number = $_POST['m_number'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $description = $_POST['description'];

    //$exists = false;

    $existsrow = "SELECT * FROM `userdata` WHERE username = '$username'";
    $result = mysqli_query($conn, $existsrow);
    $numexistsrows = mysqli_num_rows($result);
    if($numexistsrows > 0){
      $Duplicate = true;


    }
    else{
      if($password == $cpassword){
        $query = "INSERT INTO `userdata` (`username`, `aadhar`, `email`, `m_number`, `address`, `password`, `description`, `dt`) VALUES ('$username', '$aadhar', '$email', '$m_number', '$address', '$password', '$description', CURRENT_TIMESTAMP)";
        $result = mysqli_query($conn, $query);
        


        if($result){
          $alert= true;
        }
      }
        else{
          $Invalid = true;
      }
    }
}
?>


<!doctype html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="stylehome.css" type="text/css" media="all">
    <link rel="icon" href="image/favicon.ico">

    <title>SignUp</title>
  </head>
  <body style="background-image:url(image/corona2.jpg);">

  <?php
  include "navbar.php";
  ?>

    <?php
    if($alert){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account has been created successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if($Invalid){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error</strong> Password not matched.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
   }
   if($Duplicate){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error</strong> Please try anouther Username.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
 }
    ?>
          <div class="container mt-3 sign-box">
        <h3 class="text-center mt-3">Sign in</h3>
        <form action="/practice/signup.php" method="POST">
  <div class="mt-4 mx-2">
    <div class=" row mb-3">
      <div class="col-lg-2"><label for="username" class="form-label">Username >> </label></div>
      <div class="col-lg-10"><input type="text" class="form-control input-custom mx-3" name="username" id="username" placeholder="Username"></div>
    </div>
    <div class="row mb-3">
      <div class="col-lg-2"><label for="aadhar" class="form-label">Aadhar>></label></div>
      <div class="col-lg-10"><input type="text" class="form-control input-custom mx-3" name="aadhar" id="aadhar" placeholder="Aadhar Number" minlength="12" maxlength="12"></div>
    
    </div>
    <div class="row mb-3">
      <div class="col-lg-2"><label for="email" class="form-label">Email >></label></div>
      <div class="col-lg-10"><input type="email" class="form-control input-custom mx-3" name="email" id="email" placeholder="Email ID"></div>
    </div>
    <div class="row mb-3">
      <div class="col-lg-2"><label for="m_number" class="form-label">Cell No. >></label></div>
      <div class="col-lg-10"><input type="text" class="form-control input-custom mx-3" name="m_number" id="m_number" placeholder="Contact Number"></div>
    
    </div>
    <div class="row mb-3">
      <div class="col-lg-2"><label for="address" class="form-label">Address >></label></div>
      <div class="col-lg-10"><input type="text" class="form-control input-custom mx-3" name="address" id="address" placeholder="Address"></div>
    
    </div>
        <div class="row mb-3">
          <div class="col-lg-2"><label for="password" class="form-label">Password >></label></div>
          <div class="col-lg-10"><input type="password" class="form-control input-custom mx-3" name= "password" id="password" placeholder="Password" minlength="4" maxlength = "20"></div>
    
    </div>
    <div class="row mb-3">
      <div class="col-lg-2"><label for="cpassword" class="form-label">Confirm Password >></label></div>
      <div class="col-lg-10"><input type="password" class="form-control input-custom mx-3" name= "cpassword" id="password" placeholder="Confirm Password" minlength="4" maxlength = "20"></div>
    
    </div>
    <div class="row mb-3">
      <div class="col-lg-2"><label for="description" class="form-labe">Description >></label></div>
      <div class="col-lg-10"><textarea class="form-control input-custom mx-3" name="description" row="10" col="30" placeholder="How are you feeling"></textarea></div>
    </div>
  </div>
  <div class=" row text-center mt-4">
    <div class="col-lg-12"><input class="btn btn-outline-success"type="submit" name="submit"  value="Sign In">
        <input class="my-2 btn btn-outline-success" type="reset">
        <p class="mb-3 text-center">Have an <a class="link-custom" href="/practice/login.php"><strong>account</strong></a>.</p>
    </div>
  </div>
  
</form>
    </div>
    <footer class="mt-3">
        <div class=" footer1">
            <p class="pt-3 " style="display: inline-block;">Designed by Rohit Joshi</p>
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