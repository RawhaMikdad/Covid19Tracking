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
      font-size: 1.5rem
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

    @media (max-width: 600px)
    { .main_header{ height: 100px; font-size: 10px;text-align: center; }



        .count_style{
          text-align: center;
          padding-top: 5px;


        }
        .count_style p{
          text-align: center;
          padding-right: 10px;

         }

    }
        .about_response{margin-left:0!important; }
        .para_response{ margin-left: 0!important; }
        .response_para1{ margin-left: 0!important; }
    }




    </style>





    <link rel="icon" href="images/virus1.jpg">
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

<div class="pt-5 pb-5 pl-5 pr-5">
  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
    <h1 align-center>Confirmed Cor<span class="corona_virus"><img
    src="images/corona2.png" height="60px" width="70"></span>na cases in Bangladesh</h1>
  </div>
</div>


<div class="d-flex justify-content-around align-items-center text-center pb-5 count_style">
<div id ="">
  <h1 class="count">16</h1>
  <p class="text-align-center">Recovered in last 24 hours</p>
</div>

<div class="">
  <h1 class="count">7</h1>
  <p class="text-align-center">Death in last 24 hours</p>
</div>
</div>



<div class="d-flex justify-content-around align-items-center pb-5 count_style">
<div id ="">
  <h1 class="count">1382</h1>
  <p class="text-align-center">Dhaka</p>
</div>

<div class="">
  <h1 class="count">149</h1>
  <p class="text-align-center">Chattogram</p>
</div>

<div class="">
  <h1 class="count">33</h1>
  <p class="text-align-center">Sylhet</p>
</div>

<div class="">
  <h1 class="count">63</h1>
  <p class="text-align-center">Rangpur</p>
</div>
</div>


<div class="d-flex justify-content-around align-items-center pb-5 count_style">
<div id ="">
  <h1 class="count">139</h1>
  <p class="text-align-center">Mymensingh</p>
</div>

<div class="">
  <h1 class="count">74</h1>
  <p class="text-align-center">Barishal</p>
</div>

<div class="">
  <h1 class="count">31</h1>
  <p class="text-align-center">Rajshahi</p>
</div>

<div class="">
  <h1 class="count">37</h1>
  <p class="text-align-center">Khulna</p>
</div>
</div>

<p class="text-center">Source(GDHS)</p>

<button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%">
   <a  onclick="openInNewTab('https://corona.gov.bd/');"  href="https://corona.gov.bd/" class="btn btn-primary btn-lg active pl-3 "
   role="button" aria-pressed="true" rel="noreferrer" target="_blank">Emergency Contact </a>
</button>

<div class="main_header">
  <div class="row w-100 h-100" >
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="images/bdmap.jpg" alt="maskPhoto" height="300" width="500" >
        </div>
    </div>
  </div>
</div>



<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by MikdadCreation</p>
  </div>
</footer>

<script type="text/javascript">

<!--increasing Numbers-->
$('.count').counterUp({
  delay:10,
  time:2000
})

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
