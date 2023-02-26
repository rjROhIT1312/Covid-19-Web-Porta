<?php

$alert= false;
$Duplicate= false;
$Invalid= false;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require 'display/_dbconnect.php';
        $name = $_POST['username'];
        $aadhar = $_POST['aadhar'];
    $m_number = $_POST['m_number'];
    $fever = $_POST['fever'];
    $cough = $_POST['cough'];
    $tierdness = $_POST['tierdness'];
    $breathlessness = $_POST['breathlessness'];

    //$exists = false;

    $existsrow = "SELECT * FROM `checkup` WHERE aadhar = '$aadhar'";
    $res = mysqli_query($conn, $existsrow);
    $num = mysqli_num_rows($res);
    if($num > 0){
      $Duplicate = true;


    }
    else{
      if(!$Duplicate){
        $query = "INSERT INTO `checkup` (`name`, `aadhar`, `m_number`, `fever`, `cough`, `tierdness`, `breathlessness`, `dt`) VALUES ('$name', '$aadhar', '$m_number', '$fever', '$cough', '$tierdness', '$breathlessness', CURRENT_TIMESTAMP);";
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
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
        <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Poppins:wght@600&family=Raleway:wght@500&family=Sacramento&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="stylehome.css" type="text/css" media="all">
    <link rel="icon" href="image/favicon.ico">
    <title>Latest</title>
  </head>
  <body style="background-image:url(image/corona2.jpg);">
  <?php
  include "navbar.php";
  ?>

<section id="home-section">
    <div>
        <h2 class="home-heading text-center" style="">News from your area</h2>
    </div>
    <div class="container text-center">
        <div class="row shift">
            <div class="col-sm">
                <div class="card" style="width: 18rem; position: relative; left: 3.7rem">
                    <img class="card-img-top" src="image/Untitled-design-2021-09-06T103833.502.jpg" alt="Card image cap" height="166px">
                    <div class="card-body">
                        <h5 class="card-title">India will administer 1.25 crore Covid vaccine daily, says PM Narendre Modi...</h5>
                        <p class="card-text">The Indian Express</p>
                        <a href="https://indianexpress.com/article/india/coronavirus-india-live-updates-kerala-maharashtra-delhi-7489574/"
                            class="btn btn-primary">View News</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem; position: relative; left: 3.7rem">
                    <img class="card-img-top" src="image/1314873688.webp" alt="Card image cap" height="166px">
                    <div class="card-body">
                        <h5 class="card-title">Haryana govt extends Covid restrictions for 14 more days in whole State...</h5>
                        <p class="card-text">The Financial Express</p>
                        <a href="https://www.financialexpress.com/lifestyle/health/coronavirus-india-latest-update-live-india-already-in-third-wave-r-value-surges-to-1-17-in-second-half-of-august-as-covid-19-active-cases-near-4-lakh/2323769/"
                            class="btn btn-primary">View News</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem; position: relative; left: 3.7rem">
                    <img class="card-img-top" src="image/corona-mask-15846695681.jpg" alt="Card image cap" height="166px">
                    <div class="card-body">
                        <h5 class="card-title">Amid 3rd wave fears, Modi govt releases critical data on genome sequencing...</h5>
                        <p class="card-text">The Financial Express</p>
                        <a href="https://www.financialexpress.com/lifestyle/health/coronavirus-live-updates-covid-live-blog-today-kerala-maharashtra-india-third-wave-news-world-latest-covid-news-covid-vaccine-vaccination-live-news/2323417/"
                            class="btn btn-primary">View News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Country View & Recent News -->

    <section id="latest-section">
    <div class="lastest-heading">Latest</div>
        <div class="lastest-subh">
            <h5>from around country & world</h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md table-responsive-lg">

                    <table class="table table-dark tdim table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">State</th>
                                <th scope="col">Last-Count</th>
                                <th scope="col">Rise/Stable</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #DC143C">
                                <th scope="row">1</th>
                                <th scope="row">Maharashtra</th>
                                <td>132K</td>
                                <td>---</td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <th scope="row">Delhi</th>
                                <td>59K</td>
                                <td>---</td>

                            </tr>
                            <tr style="background-color: #DC143C">
                                <th scope="row">3</th>
                                <th scope="row">Rajasthan</th>
                                <td>14K</td>
                                <td>---</td>

                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <th scope="row">Karnataka</th>
                                <td>9K</td>
                                <td>---</td>

                            </tr>
                            <tr style="background-color: #DC143C;">
                                <th scope="row">5</th>
                                <th scope="row">Tamil Nadu</th>
                                <td>59K</td>
                                <td>---</td>

                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <th scope="row">Gujarat</th>
                                <td>27K</td>
                                <td>---</td>

                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <th scope="row">Uttar Pradesh</th>
                                <td>17K</td>
                                <td>---</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md">
                    <table class="table table-dark tdim table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country</th>
                                <th scope="col">Count</th>
                                <th scope="col">Graph</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th scope="row">World</th>
                                <td>---</td>
                                <td><img src="/img/g1.png" alt="" height="10px" width="60px"></td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <th scope="row">United States of America</th>
                                <td>---</td>
                                <td><img src="/img/g1.png" alt="" height="10px" width="60px"></td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <th scope="row">China</th>
                                <td>---</td>
                                <td><img src="/img/g1.png" alt="" height="10px" width="60px"></td>

                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <th scope="row">India</th>
                                <td>---</td>
                                <td><img src="/img/g1.png" alt="" height="10px" width="60px"></td>

                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <th scope="row">Russia</th>
                                <td>---</td>
                                <td><img src="/img/g1.png" alt="" height="10px" width="60px"></td>

                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <th scope="row">United Kingdom</th>
                                <td>---</td>
                                <td><img src="/img/g1.png" alt="" height="10px" width="60px"></td>

                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <th scope="row">France</th>
                                <td>---</td>
                                <td><img src="/image/g1.png" alt="" height="10px" width="60px"></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Blogs -->

        <section id="blog-section" style="margin-bottom: 0px">
            <div>
                <h2 class="home-heading">Global Update</h2>
            </div>
            <div class="container text-center">
                <div class="row shift">
                    <div class="col-sm">
                        <div class="card" style="width: 18rem; position: relative; left: 3.7rem">
                            <img class="card-img-top" src="image/okfnv84_coronavirus-generic-bloomberg_625x300_06_September_21.webp" alt="Card image cap" height="166px">
                            <div class="card-body">
                                <h5 class="card-title">Delta Surge Means This Is As Good As Global Growth Gets</h5>
                                <p class="card-text">NDTV</p>
                                <a href="https://www.ndtv.com/world-news/coronavirus-delta-surge-means-this-is-as-good-as-global-growth-gets-2531061"
                                    class="btn btn-primary">View News</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem; position: relative; left: 3.7rem">
                            <img class="card-img-top" src="image/106934469-16300901642021-08-27t181634z_1843114611_rc2sdp959r69_rtrmadp_0_health-coronavirus-testing.jpeg" alt="Card image cap" height="166px">
                            <div class="card-body">
                                <h5 class="card-title">What's happening in Canada and around the world on Sept. 5</h5>
                                <p class="card-text">CBC</p>
                                <a href="https://www.cbc.ca/news/world/coronavirus-covid19-canada-world-sept4-2021-1.6165429"
                                    class="btn btn-primary">View News</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem; position: relative; left: 3.7rem">
                            <img class="card-img-top" src="image/Spain-vaccination-AP-photo.jpg" alt="Card image cap" height="166px">
                            <div class="card-body">
                                <h5 class="card-title">U.S. heads into Labor Day with Covid vaccines ...</h5>
                                <p class="card-text">CNBC Network 18</p>
                                <a href="https://www.cnbc.com/2021/09/03/us-heads-into-labor-day-with-covid-vaccines-but-substantially-worse-outbreak-than-last-year.html"
                                    class="btn btn-primary">View News</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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