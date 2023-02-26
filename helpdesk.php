<?php

$alert= false;
$Duplicate= false;
$Invalid= false;
/*if($_SERVER['REQUEST_METHOD'] == 'POST')*/
if(isset($_POST['submit']))

{
    require 'display/_dbconnect.php';
        $name = $_POST['name'];
        $aadhar = $_POST['aadhar'];
    $m_number = $_POST['m_number'];
    $fever = $_POST['fever'];
    $cough = $_POST['cough'];
    $tierdness = $_POST['tierdness'];
    $breathlessness = $_POST['breathlessness'];

    //$exists = false;

    /*$existsrow = "SELECT * FROM `checkup` WHERE aadhar = '$aadhar'";
    $res = mysqli_query($conn, $existsrow);
    $num = mysqli_num_rows($res);
    if($num > 0){
      $Duplicate = true;


    }
    else{
      if(!$Duplicate)*/{
        $query = "INSERT INTO `checkup` (`name`, `aadhar`, `m_number`, `fever`, `cough`, `tierdness`, `breathlessness`, `dt`) VALUES ('$name', '$aadhar', '$m_number', '$fever', '$cough', '$tierdness', '$breathlessness', CURRENT_TIMESTAMP);";
        $result = mysqli_query($conn, $query);
        


        if($result){
          $alert= true;
        }
      }
        /*else{
          $Invalid = true;
      }
    }*/
}
$critical = false;
$level1 = false;
$level2 = false;
$healthy = false;
if(isset($_REQUEST['submit'])){

  $fe = $_REQUEST['fever'];
  $co = $_REQUEST['cough'];
  $td = $_REQUEST['tierdness'];
  $bt = $_REQUEST['breathlessness'];

}
if("Yes"==$fe && "Yes"==$co && "Yes"==$td && "Yes"==$bt){
 $critical = true;
}
else if("Yes"==$fe && "Yes"==$co && "Yes"==$td && "No"==$bt){
  $level2 = true;

}
else if("Yes"==$fe && "Yes"==$co && "No"==$td && "Yes"==$bt){
  $critical = true;

}
else if("Yes"==$fe && "Yes"==$co && "No"==$td && "No"==$bt){
  $level2 = true;

}
else if("Yes"==$fe && "No"==$co && "Yes"==$td && "Yes"==$bt){
  $critical = true;

}
else if("Yes"==$fe && "No"==$co && "Yes"==$td && "No"==$bt){
  $level2 = true;

}
else if("Yes"==$fe && "No"==$co && "No"==$td && "Yes"==$bt){
  $critical = true;

}
else if("Yes"==$fe && "No"==$co && "No"==$td && "No"==$bt){
  $level2 = true;
 
}
else if("No"==$fe && "Yes"==$co && "Yes"==$td && "Yes"==$bt){
  $critical = true;

}
else if("No"==$fe && "Yes"==$co && "Yes"==$td && "No"==$bt){
  $level2 = true;

}
else if("No"==$fe && "Yes"==$co && "No"==$td && "Yes"==$bt){
  $critical = true;

}
else if("No"==$fe && "Yes"==$co && "No"==$td && "No"==$bt){
  $level1 = true;

}
else if("No"==$fe && "No"==$co && "Yes"==$td && "Yes"==$bt){
  $critical = true;

}
else if("No"==$fe && "No"==$co && "Yes"==$td && "No"==$bt){
  $level1 = true;

}
else if("No"==$fe && "No"==$co && "No"==$td && "Yes"==$bt){
  $critical = true;

}
else{
  $healthy = true;
  
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
    <title>HelpDesk</title>
  </head>
  <body style="background-image:url(image/corona2.jpg);">
  <?php
  include "navbar.php";
  ?>

  <?php
  if($critical){
    echo '<div class="text-center my-3"><p><span class="p-2 corner-custom"style="background-color: #9B4833; font-size:2rem"><strong>Immidiately conselt to Doctor Regarding Covid-19🚑🩺</strong></span></p>
  </div>';
  }
  if($level2){
    echo '<div class="text-center my-3"><p><span class="p-2 corner-custom"style="background-color: #B6733D; font-size:2rem"><strong>Conselt to Doctor Regarding Covid-19🩺🩺</strong></span></p>
  </div>';
  }
  if($level1){
    echo '<div class="text-center my-3"><p><span class="p-2 corner-custom"style="background-color: #ACC85B; font-size:2rem"><strong>Do your covid-19 Check up🥱🥱</strong></span></p>
  </div>';
  }
  if($healthy){
    echo '<div class="text-center my-3"><p><span class="p-2 corner-custom"style="background-color: #60CA73; font-size:2rem"><strong>You are Fine, GOOD TO GO😎😎</strong></span></p>
  </div>';
  }
  
  ?>
<div class="container mt-3 mb-3 sign-box" style="margin-bottom: 0px">
        <h3 class="text-center mt-3">Check Up Form</h3>
        <form action="/practice/helpdesk.php" method="POST">
  <div class="mt-4 mx-2">
    <div class=" row mb-3">
      <div class="col-lg-2"><label for="name" class="form-label">Name<span style="color:red;">*</span> >> </label></div>
      <div class="col-lg-10"><input type="text" class="form-control input-custom mx-3" name="name" id="name" placeholder="Your Name" required="required"></div>
    </div>
    <div class="row mb-3">
      <div class="col-lg-2"><label for="aadhar" class="form-label">Aadhar<span style="color:red;">*</span>>></label></div>
      <div class="col-lg-10"><input type="text" class="form-control input-custom mx-3" name="aadhar" id="aadhar" placeholder="Aadhar Number" minlength="12" maxlength="12" required="required"></div>
    
    </div>
    <div class="row mb-3">
      <div class="col-lg-2"><label for="m_number" class="form-label">Cell No.<span style="color:red;">*</span> >></label></div>
      <div class="col-lg-10"><input type="text" class="form-control input-custom mx-3" name="m_number" id="m_number" placeholder="Contact Number" required="required"></div>
    </div>
    <div class="row mb-3">
        <p class="text-center">Do you have any symptoms of Covid-19, <strong>Select Below⬇⬇</strong>.</p>
    </div>
    <div class="row mb-3" id = "fever">
      <div class="col-lg-3"><label for="fever" class="form-label">Fever<span style="color:red;">*</span> >></label></div>
      <div class="col-lg-9"><input type="radio" class=" mx-3"  name="fever" value="Yes"> 
      <lable for="fever">Yes</lable>
      <input type="radio" class="mx-3" name="fever" value="No">
      <lable for="fever">No</lable>
      </div>
      <div class="row mb-3" id="cough" >
      <div class="col-lg-3"><label for="cough" class="form-label">Cough<span style="color:red;">*</span> >></label></div>
      <div class="col-lg-9" style="position: relative; left: 0.4rem;"><input type="radio" class="mx-3" name="cough" value="Yes"> 
      <lable for="cough">Yes</lable>
      <input type="radio" class="mx-3" name="cough" value="No">
      <lable for="cough">No</lable>
      </div>
      <div class="row mb-3" id="tierdness" >
      <div class="col-lg-3"><label for="tierdness" class="form-label">Tierdness<span style="color:red;">*</span> >></label></div>
      <div class="col-lg-9" style="position: relative; left: 0.8rem;"><input type="radio" class="mx-3" name="tierdness" value="Yes"> 
      <lable for="tierdness">Yes</lable>
      <input type="radio" class="mx-3" name="tierdness" value="No">
      <lable for="tierdness">No</lable>
      </div>
      <div class="row mb-3" id="breathlessness">
      <div class="col-lg-3"><label for="breathlessness" class="form-label">Breathlessness<span style="color:red;">*</span> >></label></div>
      <div class="col-lg-9" style="position: relative; left: 1.15rem;"><input type="radio" class="mx-3" name="breathlessness" value="Yes"> 
      <lable for="breathlessness">Yes</lable>
      <input type="radio" class="mx-3" name="breathlessness" value="No">
      <lable for="breathlessness">No</lable>
      </div>
    </div>
  </div>
  <div class=" row text-center mx-2">
    <div class="col-lg-12"><input id="submitButton" class="btn btn-outline-success"type="submit" name="submit" value="Submit">
        <input class="my-2 btn btn-outline-success" type="reset">
    </div>
  </div>
  <?php
  if($alert){
    echo'<div class="my-2">
    <p class="text-center"><strong>Your Data Submitted Successfully.</strong></p>
  </div>';
  }
  
  ?>
  
  
</form>
    </div>

    <footer class="mt-3" style="margin-bottom: 0px">
        <div class=" footer1" style="margin-bottom: 0px">
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
    <script src="script.js"></script>
    <script>
    window.watsonAssistantChatOptions = {
        integrationID: "c8fc9d7c-e3b4-4ec8-a0c3-8d7bc32fd2b7", // The ID of this integration.
        region: "au-syd", // The region your integration is hosted in.
        serviceInstanceID: "68acca37-df1d-4950-bb54-bfe2d1f9e3d0", // The ID of your service instance.
        onLoad: function(instance) { instance.render(); }
      };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" +
        (window.watsonAssistantChatOptions.clientVersion || 'latest') +
        "/WatsonAssistantChatEntry.js"
      document.head.appendChild(t);
    });
  </script> 
  </body>
</html>