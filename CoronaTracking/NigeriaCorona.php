<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@600&family=Muli:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css" integrity="sha256-CuUPKpitgFmSNQuPDL5cEfPOOJT/+bwUlhfumDJ9CI4=" crossorigin="anonymous" ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity ="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin=" anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <style type="text/css">
    html{
      scroll-behavior: smooth;
    }
      *{ margin: 0; padding: 0; box-sizing: border-box; f

    .row{ margin-left: 0!important; margin-right: 0!important; }
    font-family: 'Muli', sans-serif;

    font-family: 'Baloo Paaji 2', cursive;}

    /*////main Header \\\\*/
    .main_header{
      height: 450px;
      width: 100%;
    }

    .rightside h1{
      font-size: 3rem
    }


    .corona_virus img{
      animation: CoronaRotate 3s linear infinite;
    }

    @keyframes CoronaRotate {
      0% {transform: rotate(0); }
      100% {transform: rotate(360deg);}

    }

    .leftside img{animation: heartbeat 5s linear infinite; }

    @keyframes heartbeat {
      0%
      {
        transform: scale(.75);
      }
      20%
      {
        transform: scale(1);
      }
      40%
      {
        transform: scale(.75);
      }
      60%
      {
        transform: scale(1);
      }
      80%
      {
        transform: scale(.75);
      }
      100%
      {
        transform: scale(.75);
      }
    }
    /********* corona update********/

    .corona_update{
      margin: 0 0 30px 0;
    }

    .corona_update h3{color: #ff7675; }

    .corona_update h1{font-size: 2rem; text-align: center;}

    /************ ABOUT *********/
    .sub_section{
      background-color: #fbfafd
    }

    /*********FOOTER *********/

    .footer_style{
      background-color: #a29bfe!important;
    }
    .footer_style{
      margin-bottom: 0!important;
    }

    /************Jump to Top *************/

    #mybtn{
      display: none;
      position: fixed;
      bottom: 30px;
      right: 40px;
      z-index: 99;
      border: none;
      outline: none;
      background-color: #00A8FF
      color: white;
      cursor: pointer;
      padding: 10px;
      border-radius: 10px;
    }

    #mybtn:hover{
      background: #606060;
    }

    /**************Responsive css *************/

    @media (max-width: 780px)
    { .main_header{ height: 700px; text-align: center; }

        .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 20px; }

        .count_style{
          display: inline!important;
        }
        .count_style p{ text-align: center; }
    }
        .about_response{margin-left:0!important; }
        .para_response{ margin-left: 0!important; }
        .response_para1{ margin-left: 0!important; }
    }
    </style>











    <title>COVID-19 Tracker</title>


  </head>
  <body onload="fetch()">

    <nav class="navbar navbar-expand-lg nav_style pl-5 p-3">
      <a class="navbar-brand" href="index.php">COVID-19</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:#3672fd">Menu
      <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#aboutid">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#symptomid">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#Preventionid">prevention</a>
        </li>

        <div class="dropdown show">
    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Countries Individually
    </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item text-uppercase" href="BanladeshCoronaLive.php">Live From BANGLADESH</a>
              <a class="dropdown-item text-uppercase" href="IndiaCorona.php">Live From India</a>
              <a class="dropdown-item" href="NigeriaCorona.php">Live From Nigeria</a>
          </div>
        </div>

        <li class="nav-item">
          <a class="nav-link" href="index.php#contactid">contact</a>
        </li>

      </ul>
    </div>
  </nav>
      </ul>
    </div>
  </nav>
    </ul>
  </div>
</nav>
<div class="mybutton">

<button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:8%;margin-bottom:0%">
   <a href="#statewise" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" >STATE-WISE REPORT</a>
</button>


<button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%">
   <a href="https://ncdc.gov.ng/" class="btn btn-primary btn-lg active pl-3 "
   role="button" aria-pressed="true" rel="noreferrer" target="_blank">Emergency Contact </a>
</button>

</div>



<section class="corona_update container-fluid">
  <div class="my-5">
      <h3 class="text-uppercase text-center" style="color:darkred">Daily  Update of <span color="#8B0000"> covid-19</span> in Nigeria!</h3>
  </div>

  <div class="table-responsive">

    <table class="table table-bordered table-striped text-center">
      <tr style="background-color:#9cc850;">
        <th>DATE</th>
        <th>Confirmed</th>
        <th>Recovered</th>
        <th>Deaths</th>
      </tr>
      <?php

              $curl = curl_init();

              curl_setopt_array($curl, array(
                CURLOPT_URL => "https://nigeria-covid-19.p.rapidapi.com/api/daily",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "x-rapidapi-host: nigeria-covid-19.p.rapidapi.com",
                  "x-rapidapi-key: 1b42dc53e2msh0ed64461be9f32fp19c3bfjsndeb9e90516bd"
                ),
              ));

              $response = curl_exec($curl);


              curl_close($curl);
              $coronalive = json_decode($response,True);


              $statescount= 50;
              for ($i=1; $i < $statescount; $i++) {
              ?>
              <tr>
              <td><?php echo $coronalive[$i]['Date'] ?></td>
              <td><?php echo $coronalive[$i]['No_of_cases'] ?></td>
              <td><?php echo $coronalive[$i]['No_of_recovered'] ?></td>
              <td><?php echo $coronalive[$i]['No_of_deaths'] ?></td>

              </tr>
<?php
}


?>

    </table>

  </div>
</section>

<section class="corona_update1 container-fluid pt-5" id="statewise">
  <div class="my-5">
      <h3 class="text-uppercase text-center" style="color:darkred"> Statewise<span color="#8B0000"> covid-19</span> in Nigeria!</h3>
  </div>

  <div class="table-responsive">

    <table class="table table-bordered table-striped text-center">
      <tr style="background-color:#9cc850;">
        <th>State</th>
        <th>Confirmed</th>
        <th>Admitted</th>
        <th>Recovered</th>
        <th>Deaths</th>
      </tr>
      <?php

              $curl = curl_init();

              curl_setopt_array($curl, array(
                CURLOPT_URL => "https://nigeria-covid-19.p.rapidapi.com/api/states",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "x-rapidapi-host: nigeria-covid-19.p.rapidapi.com",
                  "x-rapidapi-key: 1b42dc53e2msh0ed64461be9f32fp19c3bfjsndeb9e90516bd"
                ),
              ));

              $response = curl_exec($curl);


              curl_close($curl);
              $coronalive = json_decode($response,True);


              $statescount= 19;
              for ($i=1; $i < $statescount; $i++) {
              ?>
              <tr>
              <td><?php echo $coronalive[$i]['States'] ?></td>
              <td><?php echo $coronalive[$i]['No_of_cases'] ?></td>
              <td><?php echo $coronalive[$i]['No_on_admission'] ?></td>
              <td><?php echo $coronalive[$i]['No_discharged'] ?></td>
              <td><?php echo $coronalive[$i]['No_of_deaths'] ?></td>

              </tr>
<?php
}


?>

    </table>

  </div>

</section>


<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"></i>
</div>

<!---FOOTER---------->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by MikdadCreation</p>
  </div>
</footer>

<script>

<!--increasing Numbers-->

mybutton = document.getElementById("mybtn");

window.onscroll = function(){scrollFunction()};
function scrollFunction(){
if (document.body.scrolltop > 100 || document.documentElement.scrolltop > 100){
  mybutton.style.display = "block"
} else {
mybutton.style.display = "none";
}
}
function topFunction(){
  document.body.scrolltop = 0;
  document.documentElement.scrolltop = 0;
}




</script>
</body>
</html>
