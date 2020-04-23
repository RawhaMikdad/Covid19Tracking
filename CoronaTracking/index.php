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

    @media (max-width: 600px)
    { .main_header{ height: 400px; text-align: center; }

        .main_header h1{
        text-align: center;
        padding-top:2px;
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


    *{
      box-sizing:border-box;
    }
    body{

    }
    form{
      width:100%;
      margin-left:30px;
      margin-top:200px;
    }

    input[type=search]{
      padding:15px;
      border:none;
      font-size:18px;
      font-family:sans-serif;
      background:white;
      color:white;
      border-radius:0 5px 5px 0;
      cursor:pointer;
      position:absolute;
    }

    @media screen and (max-width:600px){
        form{
             margin:0;
        }
        .rightside{
          padding-left: 7px;
        }
        .leftside {
          padding-left: 10px;


        }

          input[type=search]{
            border-radius:5px;
            width:100%;
            position:static;
            margin-top:5px;
            padding:10px;
          }


    }


    </style>





    <link rel="icon" href="images/virus1.jpg">
    <title>COVID-19 Tracker</title>


  </head>
  <body onload="fetch()">

  <nav class="navbar navbar-expand-lg nav_style pl-5 p-3">
    <a class="navbar-brand" href="#">COVID-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" value="drop" style="color:#3672fd">District-wise
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a></li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomid">Symptoms</a></li>
      <li class="nav-item">
        <a class="nav-link" href="#Preventionid">prevention</a></li>

      <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Countries Individually
  </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item text-uppercase" href="BangladeshCoronaLive.php">Live From BANGLADESH</a>
            <a class="dropdown-item text-uppercase" href="IndiaCorona.php">Live From India</a>
            <a class="dropdown-item text-uppercase" href="NigeriaCorona.php">Live From Nigeria</a>
        </div>
      </div>

      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>

    </ul>
  </div>
</nav>
    </ul>
  </div>
</nav>
<div class="main_header">
  <div class="row w-100 h-100" >
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="images/mask1.png" alt="maskPhoto" height="300" width="300" >
        </div>
    </div>

    <div class="col-lg-7 col-md-7 col-12 order-lg-1 order-1">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1>Let's Stay Home and Fight Together against Cor<span class="corona_virus"><img
        src="images/corona2.png" height="60px" width="70"></span>na Virus</h1>
      </div>
    </div>

  </div>
</div>


<!--*********** WORLD Increament UPDATES ************* -->


<section class="corona_update">
  <div class="mb-3">

  <?php


  $curl = curl_init();

  curl_setopt_array($curl, array(
  	CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/totals?format=json",
  	CURLOPT_RETURNTRANSFER => true,
  	CURLOPT_FOLLOWLOCATION => true,
  	CURLOPT_ENCODING => "",
  	CURLOPT_MAXREDIRS => 10,
  	CURLOPT_TIMEOUT => 30,
  	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  	CURLOPT_CUSTOMREQUEST => "GET",
  	CURLOPT_HTTPHEADER => array(
  		"x-rapidapi-host: covid-19-data.p.rapidapi.com",
  		"x-rapidapi-key: 1b42dc53e2msh0ed64461be9f32fp19c3bfjsndeb9e90516bd"
  	),
  ));

  $response = curl_exec($curl);


  curl_close($curl);
  $coronadata = json_decode($response,True);

  ?>



  <div class="d-flex justify-content-around align-items-center pb-5 count_style">
    <div id ="">
      <h1 class="count"><?php echo $coronadata[0]['confirmed'] ?></h1>
      <p>People are still suffering</p>
    </div>

    <div class="">
      <h1 class="count"><?php echo $coronadata[0]['deaths'] ?></h1>
      <p>People Died</p>
    </div>
<!--

  <div class="">
    <h1 class="count">512</h1>
    <p>Active Cases</p>
  </div>

  <div class="">
    <h1 class="count">40</h1>
    <p>Cured/Discharged cases</p>
  </div>


-->
</div>
</div>
</section>




<section class="corona_update1">
  <div class="mb-3">
      <h3 class="text-uppercase text-center" style="color:darkred"> Panel Of Covid-19 <span color="#8B0000">LIVE</span> UPDATES ALL OVER THE WORLD!</h3>
  </div>

  <div class="table-responsive-hover">

    <table class="table table-bordered table-striped text-center" id="updatePanel">
      <tr>
        <th style="background-color:#4bb7d8;">Total Confirmed</th>
        <th style="background-color:#4bb7d8;">Total Recovered</th>
        <th style="background-color:#4bb7d8;">Critical Patient</th>
        <th style="background-color:#4bb7d8;">Total Deaths</th>
      </tr>
    </table>

  </div>

</section>

<!--**********************************Searching************************************-->
<div class="search-box search-box-responsive-md">
<form method="post">
  <input class="form-control md-sm-2" type="search" placeholder="Search Your Country Name to know the position" aria-label="Search" name="value" autocomplete="off">
  <button class="btn btn-lg btn-primary btn-block my-2 my-sm-0" type="submit" name="search">Search</button>
</form>
</div>


<!--prev
<form method="post" action="" novalidate>
  <input class="form-control mr-sm-2" type="search" aria-label="Search" name="value">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
</form>
-->






<?php
if (isset($_POST['search'])) {
 ?>
 <section class="corona_update1 container-fluid pt-5" id="statewise">
   <div class="my-5">
       <h3 class="text-uppercase text-center text-uppercase" style="color:darkred">Report of <span color="#8B0000"> covid-19</span> <?php echo strtoupper($_POST['value'])?>!</h3>
   </div>

   <div class="table-responsive-md">

     <table class="table table-bordered table-striped text-center" style="background-color: #4bb7d8;">
       <tr>
         <th>Position</th>
         <th>Country</th>
         <th>Confirmed</th>
         <th>Recovered</th>
         <th>Critical Situation</th>
         <th>Deaths</th>
       </tr>

 <?php


 $curl = curl_init();

 curl_setopt_array($curl, array(
   CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country/all?format=json",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => array(
     "x-rapidapi-host: covid-19-data.p.rapidapi.com",
     "x-rapidapi-key: 1b42dc53e2msh0ed64461be9f32fp19c3bfjsndeb9e90516bd"
   ),
 ));

 $response = curl_exec($curl);


 curl_close($curl);
 $coronadata = json_decode($response,True);
 echo "<pre>";

 //print_r($coronadata);

 //////////////////////////////////////////////


              function insertion_Sort1($my_array)
               {
                 for($i=0;$i<253;$i++){
                   $val = $my_array[$i];
                   $j = $i-1;
                   while($j>=0 && $my_array[$j] < $val){
                     $my_array[$j+1] = $my_array[$j];
                     $j--;
                   }
                   $my_array[$j+1] = $val;
                 }
               return $my_array;
               }
               $j=0;
               for ($i=0; $i < 253; $i++) {

                 $test_array[$i] = array($coronadata[$i]['confirmed'],$coronadata[$i]['recovered'],$coronadata[$i]['critical'],$coronadata[$i]['deaths'],$coronadata[$i]['country']);
                 //$test_array1[$j] = array($coronadata[$i]['deaths'],$coronadata[$i]['country']);
                 //$j+=1;

               }
                 //echo "Original Array :\n";
                 //echo implode(', ',$test_array);
                 $a = insertion_Sort1($test_array);




                  $statescount= 252 ;

                  for ($i=0; $i < $statescount; $i++) {
                    if (strtoupper($a[$i][4]) == strtoupper($_POST['value'])) {

                    ?>
                    <tr>
                      <td style="background-color:#7a4a91;"><?php echo $i+1 ?></td>
                      <td style="background-color:#7a4a91;"><?php echo $a[$i][4] ?></td>
                      <td style="background-color:#4bb7d8;"><?php echo $a[$i][0] ?></td>
                      <td style="background-color:#f36e23;"><?php echo $a[$i][1] ?></td>
                      <td style="background-color:#9cc850;"><?php echo $a[$i][2] ?></td>
                      <td style="background-color:#ff0000;"><?php echo $a[$i][3] ?></td>

                    </tr>
                    <?php
                    }

      }

?>
    </table>

    </div>

</section>
<?php
}
 ?>


<!--*********** LASTEST UPDATES ************* -->
<section class="corona_update1 container-fluid pt-5" id="statewise">
  <div class="my-5">
      <h3 class="text-uppercase text-center text-uppercase" style="color:darkred">Report of <span color="#8B0000"> covid-19</span> around the WORLD!</h3>
  </div>

  <div class="table-responsive-md">

    <table class="table table-bordered table-striped text-center" style="background-color: #4bb7d8;">
      <tr>
        <th>Position</th>
        <th>Country</th>
        <th>Confirmed</th>
        <th>Recovered</th>
        <th>Critical Situation</th>
        <th>Deaths</th>
      </tr>

<?php


$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country/all?format=json",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: covid-19-data.p.rapidapi.com",
		"x-rapidapi-key: 1b42dc53e2msh0ed64461be9f32fp19c3bfjsndeb9e90516bd"
	),
));

$response = curl_exec($curl);


curl_close($curl);
$coronadata = json_decode($response,True);
echo "<pre>";

//print_r($coronadata);

//////////////////////////////////////////////


               function insertion_Sort($my_array)
              {
              	for($i=0;$i<253;$i++){
              		$val = $my_array[$i];
              		$j = $i-1;
              		while($j>=0 && $my_array[$j] < $val){
              			$my_array[$j+1] = $my_array[$j];
              			$j--;
              		}
              		$my_array[$j+1] = $val;
              	}
              return $my_array;
              }
              $j=0;
              for ($i=0; $i < 253; $i++) {

                $test_array[$i] = array($coronadata[$i]['confirmed'],$coronadata[$i]['recovered'],$coronadata[$i]['critical'],$coronadata[$i]['deaths'],$coronadata[$i]['country']);
                //$test_array1[$j] = array($coronadata[$i]['deaths'],$coronadata[$i]['country']);
                //$j+=1;

              }
                //echo "Original Array :\n";
                //echo implode(', ',$test_array);
                $a = insertion_Sort($test_array);
                //print_r(insertion_Sort($test_array1));


                $statescount= 252 ;
                $pos=1;
                for ($i=0; $i <= $statescount; $i++) {
                ?>
                <tr>
                <td style="background-color:#7a4a91;"><?php echo $pos ?></td>
                <td style="background-color:#7a4a91;"><?php echo $a[$i][4] ?></td>
                <td style="background-color:#4bb7d8;"><?php echo $a[$i][0] ?></td>
                <td style="background-color:#f36e23;"><?php echo $a[$i][1] ?></td>
                <td style="background-color:#9cc850;"><?php echo $a[$i][2] ?></td>
                <td style="background-color:#ff0000;"><?php echo $a[$i][3] ?></td>
                <?php  $pos ++;
                ?>
                </tr>

  <?php
  }


  ?>

      </table>

    </div>

  </section>

<!-- *********** About----------->
<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
  <div class="section_header text-center md-5 mt-4">
      <h1>About COVID-19</h1>
  </div>
  <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5 about_response">
          <img src="images/aboutImage.jpg" alt="aboutImage" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-12 pl-5 para_response">
        <h2>What is COVID-19 (Corona Virus) </h2>
        <p class="response_para1">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered
          coronavirus.Most people who fall sick with COVID-19 will experience mild to moderate symptoms
          and recover without special treatment.</p>

        <p>According to WHO(World Health Organization) the virus that causes COVID-19 is mainly transmitted through droplets
           generated when an infected person coughs, sneezes, or exhales. These droplets are
           too heavy to hang in the air, and quickly fall on floors or surfaces.You can be infected by breathing in the
           virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface
           and then your eyes, nose or mouth.</p>
      </div>
    </div>
</div>
<!---------- Symptoms--------------->

<div class="container-fluid pt-5 pb-5 " id="symptomid">
  <div class="section_header text-center md-5 mt-4">
      <h1>Symptoms</h1>
  </div>
  <div class="container">
    <div class="row pt-5">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/cough1.jpg" class="img-fluid bg-info" width="120" height="120">
        <figcaption >Dry cough</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/fever.webp" class="img-fluid bg-info" width="120" height="120">
        <figcaption > Fever </figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/tiredness1.jpg" class="img-fluid bg-info" width="120" height="120">
        <figcaption > Tiredness </figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/Sore Throat.png" class="img-fluid bg-info" width="120" height="120">
        <figcaption > Sore Throat </figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/Difficulty in Breathing.png" class="img-fluid bg-info" width="120" height="120">
        <figcaption > Difficulty in Breathing </figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/runnynose.jpg" class="img-fluid bg-info" width="120" height="120">
        <figcaption > Runny Nose </figcaption>
        </figure>
      </div>

    </div>
        <p class="mt-5">On average it takes 5–6 days from when someone is infected with the
          virus for symptoms to show, however it can take up to 14 days.
          People with mild symptoms who are otherwise healthy should self-isolate. Seek medical attention
          if you have a fever,a cough, and difficulty breathing. Call ahead.</p>
  </div>
</div>
<!----------Prevention-------->
<div class="container-fluid sub_section pt-5 pb-5 " id="Preventionid">
  <div class="section_header text-center md-5 mt-4">
      <h1>Preventions of Corona Virus</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/handwash.jpg" class="img-fluid" width="90" height="90">
            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</p>

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/socialdistance.jpg" class="img-fluid bg-info" width="90" height="90">
            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Maintain a safe distance from anyone who is coughing or sneezing.</p>

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/elbowcover.jpg" class="img-fluid bg-info" width="90" height="90">
            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</p>

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/usinfmask.jpg" class="img-fluid bg-info" width="90" height="90">
            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Use mask while moving for any neccessary Stuff</p>

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/calldoctor.jpg" class="img-fluid bg-info" width="90" height="90">
            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>If you have a fever, a cough, and difficulty breathing,
              seek medical attention. Call in advance</p>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/stayhome.jpg" class="img-fluid bg-info" width="90" height="90">
            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Stay home with your family. Stop going outside without any emergency need</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!---------------------Contacts----------------->
<div class="container-fluid pt-5" id="contactid">
  <div class="section_header text-center md-5 mt-4 ">
      <h1>Contact Us</h1>
      <p>if you have faced any occurance about Corona </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
        <form action="" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputName">Your Name</label>
                <input type="text" class="form-control" id="inputName" name="yourname" placeholder="Your Name" name="Name"
                autocomplete="off" required>
              </div>
              <div class="form-group col-md-6">
                <label >Relation With The Patient</label>
                <input type="patient" class="form-control" id="inputPatient" name="PatientName" placeholder="Patient Name" name="PatientName"
                autocomplete="off" required>
              </div>
            </div>
            <div class="form-group">
              <label >Phone</label>
              <input type="Phone" class="form-control" id="inputPhone" name="Phone" placeholder="+880">
            </div>
            <div class="form-group">
              <label >Address</label>
              <input type="text" class="form-control" id="inputAddress" name="Address" placeholder="Apartment,floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label >District</label>
                <select id="inputState" class="form-control" name="District">
                  <option selected>Choose...</option>
                  <option>Dhaka</option>
                  <option>Chittagong</option>
                  <option>Dhaka</option>
                  <option>Rajshahi</option>
                  <option>Mymensingh</option>
                  <option>Barisal</option>
                  <option>Khulna</option>
                  <option>Rangpur</option>
                  <option>Gazipur</option>
                  <option>Sylhet</option>
                  <option>Comilla</option>
                  <option>Narayanganj</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label >Zip Code</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label >Gender</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other...</option>
                </select>
              </div>
            </div>
            <div class="form-group">

              <label>Select Symptoms</label>
              <div class="Symptoms Selection">
                <div class="custom-control custom-radio custom-control-inline">
                <input type="checkbox" id="customCheckbox1" name="coronasym[]" class="custom-control-input" value="Feeling week">
                <label class="custom-control-label" for="customCheckbox1">Feeling Week</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="checkbox" id="customCheckbox2" name="coronasym[]" class="custom-control-input" value="Cold">
                <label class="custom-control-label" for="customCheckbox2">Cold</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="checkbox" id="customCheckbox3" name="coronasym[]" class="custom-control-input" value="Fever">
                <label class="custom-control-label" for="customCheckbox3">Fever</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="checkbox" id="customCheckbox4" name="coronasym[]" class="custom-control-input" value="Breath">
                <label class="custom-control-label" for="customCheckbox4">Breathing Problem</label>
              </div>
            </div>
            </div>
            <div class="mb-3">
  <label>Aditional Text(Optional)</label>
  <textarea class="form-control is-invalid" id="validationTextarea" name="msg" placeholder="Addittional Text If needed"></textarea>
  <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
  </form>
      </div>
    </div>
  </div>
</div>
</div>

<!----------Top Cursor----------->

<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"></i>
</div>
<!---FOOTER---------->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by MikdadCreation</p>
  </div>
</footer>

<script type="text/javascript">

<!--increasing Numbers-->
$('.count').counterUp({
  delay:10,
  time:1000
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






<?php


$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/totals?format=json",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: covid-19-data.p.rapidapi.com",
		"x-rapidapi-key: 1b42dc53e2msh0ed64461be9f32fp19c3bfjsndeb9e90516bd"
	),
));

$response = curl_exec($curl);


curl_close($curl);
$coronadata = json_decode($response,True);

?>
          var updatePanel = document.getElementById('updatePanel');

          var a = updatePanel.insertRow();
          a.insertCell(0);
          updatePanel.rows[1].cells[0].innerHTML = <?php echo $coronadata[0]['confirmed']  ?>;

          a.insertCell(1);
          updatePanel.rows[1].cells[1].innerHTML = <?php echo $coronadata[0]['recovered']   ?>;
          //updatePanel.rows[1].cells[1].style.background = '#7a4a91';
          //updatePanel.rows[1].cells[1].style.color = '#fff';

          a.insertCell(2);
          updatePanel.rows[1].cells[2].innerHTML =<?php echo $coronadata[0]['critical']   ?>;
          //updatePanel.rows[1].cells[2].style.background = '#7a4a91';
          //updatePanel.rows[1].cells[2].style.color = '#fff';

          a.insertCell(3);
          updatePanel.rows[1].cells[3].innerHTML =<?php echo $coronadata[0]['deaths']  ?>;
          //updatePanel.rows[1].cells[3].style.background = '#7a4a91';
          //updatePanel.rows[1].cells[3].style.color = '#fff';






</script>
</body>
</html>

<?php

$server = 'localhost';
$user = 'root';
$password='';
$db = 'coronatrackingdb';

$con = mysqli_connect($server, $user, $password, $db);

if($con){

}




if(isset($_POST['submit'])){
    $username = $_POST['yourname'];
    $patientname = $_POST['PatientName'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $District = $_POST['District'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];

    $chk ="";

    foreach($symp as $chk1){
      $chk .= $chk1."," ;
    }

    $insertquery = "insert into coronacase(username, patientname, symp, phone, address, District, message) values('$username','$patientname','$chk','$Phone','$Address','$District','$msg') ";

    $query = mysqli_query($con, $insertquery);

    if($query){
      ?>
      <script>
        alert("Data Delivered SuccessfulLY");
      </script>
      <?php
    }else{
        ?>
        <script>
        alert("Sorry for the interrupted connection.Please send the information again.");
        </script>
        <?php
      }
}

?>
