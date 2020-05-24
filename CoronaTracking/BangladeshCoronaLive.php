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
      *{ margin: 0; padding: 0; box-sizing: border-box;

    .row{ margin-left: 0!important; margin-right: 0!important; }
    font-family: 'Muli', sans-serif;

    font-family: 'Baloo Paaji 2', cursive;}

    body{
      background-color:  #f6f5f3 ;
    }

    .searchab{
      font-size: 18px;
      margin: auto;

    }
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
      background-color: #3f3f3f!important;
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


    .rightside{
      text-align: center;
        }

        .count_style{
          text-align: center;
          padding-top: 5px;


        }
        .count_style p{
          text-align: center;
          padding-right: 5px;

         }

         .count_style1 {
          text-align: center;
          /*padding-right: 5px;*/
         }

    }
        .about_response{margin-left:0!important; }
        .para_response{ margin-left: 0!important; }
        .response_para1{ margin-left: 0!important; }


        #citytable{
          height: 600px;
          width: auto;
          overflow: scroll;

        }
        #states{
          height: 550px;
          width: auto;
          overflow: scroll;
        }

        nav{
          position: fixed;
          background-color: #3f3f3f ;
        }
        nav a{
          color: #f6f5f3;
        }
        #headtable th{
          position: sticky;
          top: 0px;
          background:#9cc850;

        }
    </style>





    <link rel="icon" href="images/virus1.jpg">
    <title>COVID-19 Tracker</title>



  </head>
  <body onload="fetch()">

    <nav class="navbar navbar-expand-lg nav_style pl-5 p-3">
      <a class="navbar-brand" href="index.php">COVID-19</a>


      <!--################## BANGLAAAAAAAAAAAAAAAAAAAAAA(বাংলা) #################-->
      <!--
            <div class="custom-control custom-switch align-center">
                <a class="pr-2" href="BangladeshCoronaLive.php">English</a>
                <a class="bn pl-2 " href="bangla.php" style="font-size:14px;">বাংলা</a>
            </div>
            <br>
      -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:#f6f5f3">Menu
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
              <a class="dropdown-item text-uppercase" href="BangladeshCoronaLive.php">Live From BANGLADESH</a>
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




<div class="pt-5 pb-5 pl-5 pr-5">
  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
    <h1 align-center>Confirmed Cor<span class="corona_virus"><img
    src="images/corona3.png" height="60px" width="60px"></span>na cases in Bangladesh</h1>
  </div>
</div>


<section class="corona_update1 container-fluid" id="states1">
<?php
$data = file_get_contents('data.json');
$coronadata = json_decode($data,True);


?>

<div class="d-flex justify-content-around align-items-center text-center pb-2 count_style" spacecell="10">
<div id ="">
  <h2 class="count"><?php echo $coronadata['Recovered24'] ;?></h2>
  <p class="text-align-center">Recovered<br>in last 24 hours</p>
</div>

<div id ="">
  <h2 class="count"><?php echo $coronadata['Confirm24'] ;?></h2>
  <p class="text-align-center">Confirmed<br>in last 24 hours</p>
</div>

<div id ="">
  <h2 class="count"><?php echo $coronadata['test24'] ;?></h2>
  <p class="text-align-center">Tests<br>in last 24 hours</p>
</div>

<div class="">
  <h2 class="count"><?php echo $coronadata['Deate24name'] ;?></h2>
  <p class="text-align-center">Death<br>in last 24 hours</p>
</div>
</div>


<div class="pt-3 pb-3 pl-5 pr-5">
  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
    <h1 align-center>Divisions</h1>
  </div>
</div>




<div class="d-flex justify-content-around text-center align-items-center count_style">
<div class="">
  <h3 class="count"><?php echo $coronadata['Division']['Dhaka'] ;?></h3>
  <p class="text-align-center">Dhaka<br>Division</p>
</div>

<div class="">
  <h3 class="count"><?php echo $coronadata['Division']['Chittagong'] ;?></h3>
  <p class="text-align-center">Chattogram<br>Division</p>
</div>

<div class="">
  <h3 class="count"><?php echo $coronadata['Division']['Sylhet'] ;?></h3>
  <p class="text-align-center">Sylhet<br>Division</p>
</div>

<div class="">
  <h3 class="count"><?php echo $coronadata['Division']['Rangpur'] ;?></h3>
  <p class="text-align-center">Rangpur<br>Division</p>
</div>
</div>


<div class="d-flex justify-content-around  align-items-center text-center pb-5 count_style1 ">
<div id ="pr-3">
  <h3 class="count"><?php echo $coronadata['Division']['Mymensingh'] ;?></h3>
  <p class="text-align-center">Mymensingh<br>Division</p>
</div>


<div class="pr-3">
  <h3 class="count"><?php echo $coronadata['Division']['Rajshahi'] ;?></h3>
  <p class="text-align-center">Rajshahi<br>Division</p>
</div>

<div class="pr-4">
  <h3 class="count"><?php echo $coronadata['Division']['Barishal'] ;?></h3>
  <p class="text-align-center">Barishal<br>Division</p>
</div>


<div class="">
  <h3 class="count"><?php echo $coronadata['Division']['Khulna'] ;?></h3>
  <p class="text-align-center">Khulna<br>Division</p>
</div>
</div>

</section>



<section class="pt-3 pb-3 pl-5 pr-5">
  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
      <h3 class="text-uppercase text-center text-uppercase" style="color:darkred">Position of <span color="#8B0000"> Bangladesh</span> in The World!</h3>
  </div>

  <div class="table-responsive-md" style="">

    <table class="table table-bordered table-striped text-center" style="background-color: #4bb7d8;">
      <tr>
        <th style="background-color:#3f3f3f;color:white;">Position</th>
        <th style="background-color:#3f3f3f;color:white;">Country</th>
        <th style="background-color:#3f3f3f;color:white;">Confirmed in 24hours</th>
        <th style="background-color:#3f3f3f;color:white;">Active Cases</th>
        <th style="background-color:#3f3f3f;color:white;">Critical Situation</th>
        <th style="background-color:#3f3f3f;color:white;">Recovered</th>
        <th style="background-color:#3f3f3f;color:white;">Total</th>
        <th style="background-color:#3f3f3f;color:white;">Deaths in 24 hours</th>
        <th style="background-color:#3f3f3f;color:white;">Total Deaths</th>
        <th style="background-color:#3f3f3f;color:white;">Total Tests</th>
      </tr>

<?php


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://covid-193.p.rapidapi.com/statistics",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "x-rapidapi-host: covid-193.p.rapidapi.com",
		"x-rapidapi-key: 578010d902msh40801f27237de52p126622jsne5d1d85f95e2"
  ),
));

$response = curl_exec($curl);


curl_close($curl);
$coronadatabd = json_decode($response,True);
echo "<pre>";

//print_r($coronadatabd);


              function insertion_Sort2($my_array)
              {
              for($i=1;$i<200;$i++){
                $val = $my_array[$i];
                $j = $i-1;
                while($j>0 && $my_array[$j] < $val){
                  $my_array[$j+1] = $my_array[$j];
                  $j--;
                }
                $my_array[$j+1] = $val;
              }
              return $my_array;
              }
              $j=0;
              for ($i=1; $i < 200; $i++) {

               $test_array[$i] = array($coronadatabd['response']["$j"]['cases']['total'],$coronadatabd['response']["$j"]['cases']['recovered'],$coronadatabd['response']["$j"]['cases']['critical'],$coronadatabd['response']["$j"]['cases']['active'],$coronadatabd['response']["$j"]['cases']['new'],$coronadatabd['response']["$j"]['deaths']['total'],$coronadatabd['response']["$j"]['deaths']['new'],$coronadatabd['response']["$j"]['tests']['total'],$coronadatabd['response']["$j"]['country']);
               $j++;
              }

              $a = insertion_Sort2($test_array);
              echo "<pre>";
              //print_r($a);

              $statescount = 200 ;

              for ($i=2; $i < $statescount; $i++) {
                if (strtoupper($a[$i][8]) == strtoupper("Bangladesh")){

                ?>
                <tr>
                      <td style="background-color:#7a4a91;"><?php echo $i-1 ?></td>
                      <td style="background-color:#7a4a91;"><?php echo $a[$i][8] ?></td>
                      <td style="background-color:#4bb7d8;"><?php echo $a[$i][4] ?></td>
                      <td style="background-color:#32CD32;"><?php echo $a[$i][3] ?></td>
                      <td style="background-color:#9cc850;"><?php echo $a[$i][2] ?></td>
                      <td style="background-color:#32CD32;"><?php echo $a[$i][1] ?></td>
                      <td style="background-color:#4bb7d8;"><?php echo $a[$i][0] ?></td>
                      <td style="background-color:#ff0000;"><?php echo $a[$i][6] ?></td>
                      <td style="background-color:#ff0000;"><?php echo $a[$i][5] ?></td>
                      <td style="background-color:#4bb7d8;"><?php echo $a[$i][7] ?></td>


                    </tr>
                    <?php


      }
}
?>
    </table>

    </div>

</section>




<div class="pt-3 pb-3 pl-5 pr-5">
  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
    <h4 align-center>CITY IN DANGER <img src="images/alert.png" alt="danger" height="30px"></h4>
  </div>
</div>




<div class="ml-3 mr-3" >

  <table class="table table-bordered table-striped text-center " style="background-color:#FF0000">
    <tr style="background-color:#FF0000;">
      <th style="color:white;">Comment</th>
      <th style="color:white;">Last Updated</th>
      <th style="color:white;">City</th>
      <th style="color:white;">Total Confirmed</th>
    </tr>



    <tr>
      <td style="color:white;"><?php echo $coronadata['DhakaPercent']."% of the Whole COVID-19 Cases in Bangladesh";?></td>
      <td style="color:white;"><?php echo $coronadata["1"]['date'] ?></td>
      <td style="color:white;"><?php echo "Dhaka City" ?></td>
      <td style="color:white;"><?php echo $coronadata['Division']['DhakaCity'] ?></td>
    </tr>


  </table>

</div>


<button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:2%">
   <a  href="#citytable" class="btn btn-primary btn-lg active pl-3 "
   role="button" aria-pressed="true" style="background-color:#3f3f3f" >Show Areas of Dhaka</a>
</button>







<button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%">
   <a  onclick="openInNewTab('https://corona.gov.bd/');"  href="https://corona.gov.bd/" class="btn btn-primary btn-lg active pl-3 "
   role="button" aria-pressed="true" rel="noreferrer" target="_blank" style="background-color:#3f3f3f">Emergency Contact </a>
</button>

<p class="text-center">Source(IEDCR)</p>

<!--------District-Wise------>

<section class="corona_update container-fluid" >
  <div class="my-5">
      <h3 class="text-uppercase text-center" style="color: red">Covid-19 <span color="#9cc850">District-WISE</span> UPDATES IN BANGLADESH!</h3>
  </div>

  <div class="table-responsive-md" id="states">

    <table class="table table-bordered table-striped text-center" id="headtable" >
      <tr style="background-color:#9cc850;">
        <th>Position</th>
        <th>Last Updated</th>
        <th>District</th>
        <th>Total Confirmed</th>
      </tr>

      <?php
      $data = file_get_contents('District.json');
      $coronalive = json_decode($data,True);

      echo "<pre>";

      //print_r($coronalive);
     //print_r(insertion_Sort($test_array1));


     //////////////////////////////////////////////


     function insertion_Sort($my_array,$s)
    {
     for($i=1;$i<$s-1;$i++){
       $val = $my_array[$i];
       $j = $i-1;
       while($j>0 && $my_array[$j] < $val){
         $my_array[$j+1] = $my_array[$j];
         $j--;
       }
       $my_array[$j+1] = $val;
     }
    return $my_array;
    }

    $p=0;
    for ($i=1; $i < (sizeof($coronalive))/2-1; $i++) {
      $test_array[$i] = array($coronalive['Confirm'.strval($p)],$coronalive['Name'.strval($p)],$coronalive['Date']);
      $p++;

  }
    $s = (sizeof($coronalive)/2) ;
    $ar = insertion_Sort($test_array,$s);
    //print_r($ar);
    //print_r(insertion_Sort($a));
$Citycount = (sizeof($coronalive))/2-1;

for($i=1; $i < $Citycount; $i++) {
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $ar[$i][2] ?></td>
<td><?php echo $ar[$i][1] ?></td>
<td><?php echo $ar[$i][0] ?></td>


</tr>
<?php } ?>


    </table>

  </div>

</section>



<!--********************************** Searching COndition For Area Search ************************************-->


<?php
if (isset($_POST['search'])) {
 ?>
 <section class="corona_update1 container-fluid " id="statewise">
   <div class="my-5" id="reportofcovid19">
       <h3 class="text-uppercase text-center text-uppercase" style="color:darkred" >Report of <span color="#8B0000"> covid-19</span> in <?php echo strtoupper($_POST['value'])?>!</h3>
   </div>

   <div class="table-responsive-md">

     <table class="table table-bordered table-striped text-center" style="background-color: #4bb7d8;">
       <tr>
         <th>Position</th>
         <th>Last Update</th>
         <th>Area</th>
         <th>Total Confirmed</th>
       </tr>

       <?php
       $data = file_get_contents('area.json');
       $coronalive123 = json_decode($data,True);

       echo "<pre>";


       //print_r($coronalive123);
      //print_r(insertion_Sort($test_array1));



      //////////////////////////////////////////////



      function insertion_Sort123($my_array,$s)
     {
      for($i=1;$i<$s;$i++){
        $val = $my_array[$i];
        $j = $i-1;
        while($j>0 && $my_array[$j] < $val){
          $my_array[$j+1] = $my_array[$j];
          $j--;
        }
        $my_array[$j+1] = $val;
      }
     return $my_array;
     }

     for ($i=1; $i < (sizeof($coronalive123))/2; $i++) {
       $test_array123[$i] = array($coronalive123['Confirm'.strval($i)],$coronalive123['Name'.strval($i)],$coronalive['Date']);

   }
      $s = (sizeof($coronalive123)/2) ;
     $a = insertion_Sort123($test_array123,$s);
     //print_r($a);
     //print_r(insertion_Sort($a));
      $Citycount = (sizeof($coronalive123))/2-1;



              for($i=1; $i < $Citycount; $i++) {
                if (strtoupper($a[$i]["1"]) == strtoupper($_POST['value']) || strtoupper($a["$i"]["1"]." ") == strtoupper($_POST['value'])) {
                  ?>
                  <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $a[$i][2] ?></td>
                  <td><?php echo $a[$i][1] ?></td>
                  <td><?php echo $a[$i][0] ?></td>


                  </tr>

              <?php } } ?>


</table>

</div>

</section>

<?php
}
 ?>


<!--------Area-Wise------>
<section class="corona_update container-fluid" id="city">
  <div class="" style="margin-top:3%;">
      <h3 class="text-uppercase text-center" style="color: red">Covid-19 UPDATES IN Dhaka City!</h3>
  </div>

  <!---############ Searching Box For Area Search #############---->
    <div class="search-box search-box-responsive-md pt-5 pb-5">
    <form method="post">
      <input class="form-control md-sm-2 searchab"  type="search" placeholder="Search Your Area Name in Dhaka For the report" aria-label="Search" name="value" autocomplete="off" style="background-color: #eff6f7 ;">
      <p style="font-size:12px;font-color:red;"> (Please recheck your selling if you can't get result)</p>
      <button class="btn btn-lg btn-primary btn-block my-2 my-sm-0" href="#reportofcovid19" type="submit" name="search" style="background-color:#3f3f3f">Search</button>
    </form>
    </div>


  <div class="table-responsive-md" id="citytable">

    <table class="table table-bordered table-striped text-center" id="headtable">
      <tr style="background-color:#9cc850;">
        <th>Position</th>
        <th>Last Updated</th>
        <th>Area</th>
        <th>Total Confirmed</th>
      </tr>

      <?php
      $data = file_get_contents('area.json');
      $coronalive12 = json_decode($data,True);

      echo "<pre>";

      //print_r(sizeof($coronalive12)/2);
      //print_r(count($coronalive12));
     //print_r(insertion_Sort($test_array1));


     //////////////////////////////////////////////


                    function insertion_Sort12($my_array,$s)
                   {
                   	for($i=1;$i<$s;$i++){
                   		$val = $my_array[$i];
                   		$j = $i-1;
                   		while($j>0 && $my_array[$j] < $val){
                   			$my_array[$j+1] = $my_array[$j];
                   			$j--;
                   		}
                   		$my_array[$j+1] = $val;
                   	}
                   return $my_array;
                   }

                   for ($i=1; $i < (sizeof($coronalive12))/2; $i++) {
                     $test_array12[$i] = array($coronalive12['Confirm'.strval($i)],$coronalive12['Name'.strval($i)],$coronalive['Date']);

                 }
                    $s = (sizeof($coronalive12)/2) ;
                   $a = insertion_Sort12($test_array12,$s);
                   //print_r($a);
                   //print_r(insertion_Sort($a));
    $Citycount = (sizeof($coronalive12))/2-1;

    for($i=1; $i < $Citycount; $i++) {
      ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $a[$i][2] ?></td>
        <td><?php echo $a[$i][1] ?></td>
        <td><?php echo $a[$i][0] ?></td>


            </tr>
          <?php } ?>


    </table>

  </div>

</section>




<footer class="mt-5 pt-5">
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
