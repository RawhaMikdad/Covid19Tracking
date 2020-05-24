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

    body{
      background-color:  #f6f5f3    ;
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
    { .main_header{ height: 100px; font-size: 10px;text-align: center;}


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
          height: 550px;
          width: auto;
          background: #32CD32;
          overflow: scroll;

        }
        #Districttable{
          height:550px;
          width: auto;
          background: #32CD32;
          overflow: scroll;
        }
        corona_updateA .AreaUpdate{
          margin-top: 100px;
        }
      #city .headingofarea{

        color: blue;
        margin-top: 150px;
      }
      nav{
        position: fixed;
        background-color: #3f3f3f ;
      }
      nav a{
        color: #f6f5f3;
      }

}


    </style>





    <link rel="icon" href="images/virus1.jpg">
    <title>COVID-19 Tracker</title>


  </head>
  <body onload="fetch()">

    <nav class="navbar navbar-expand-lg nav_style pl-5 p-3">
      <a class="navbar-brand" href="index.php">কোভিট-১৯</a>


      <!--################## BANGLAAAAAAAAAAAAAAAAAAAAAA(বাংলা) #################-->
            <div class="custom-control custom-switch align-center">
                <a class="pr-2" href="BangladeshCoronaLive.php">English</a>
                <a class="bn pl-2 " href="bangla.php" style="font-size:14px;"><b> বাংলা</b></a>
            </div>
            <br>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:#f6f5f3">মেনু
      <span class="navbar-toggler-icon"></span>
      </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">হোম<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#aboutid">সম্পর্কে</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#symptomid">লক্ষণ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#Preventionid">প্রতিরোধ</a>
        </li>

        <div class="dropdown show">
    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      দেশভিত্তিক
    </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item text-uppercase" href="BangladeshCoronaLive.php">বাংলাদেশ</a>
              <a class="dropdown-item text-uppercase" href="IndiaCorona.php">ভারত</a>
              <a class="dropdown-item" href="NigeriaCorona.php">নাইজিরিয়াদেশ</a>
          </div>
        </div>

        <li class="nav-item">
          <a class="nav-link" href="index.php#contactid">যোগাযোগ</a>
        </li>

      </ul>
    </div>
  </nav>

<div class="pt-5 pb-5 pl-5 pr-5">
  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
    <h1 align-center>বাংলাদেশের করো<span class="corona_virus"><img
    src="images/corona5.png" height="60px" width="60"></span>না পরিস্থিতি</h1>
  </div>
</div>


<section class="corona_update1 container-fluid" id="states1">
<?php
$data = file_get_contents('bangladata.json');
$coronadata = json_decode($data,True);


?>

<div class="d-flex justify-content-around align-items-center text-center pb-2 count_style" spacecell="10">
<div id ="">
  <h2 class=""><b><?php echo $coronadata['Recovered24'] ;?></b></h2>
  <b><p class="text-align-center">গত ২৪ ঘন্টায়<br>সুস্থ</p></b>
</div>
<div id ="">
  <h2 class=""><b><?php echo $coronadata['Confirm24'] ;?></b></h2>
  <b><p class="text-align-center">গত ২৪ ঘন্টায়<br>নতুনভাবে আক্রান্ত</p></b>
</div>

<div id ="">
  <h2 class=""><b><?php echo $coronadata['test24'] ;?></b></h2>
  <b><p class="text-align-center">গত ২৪ ঘন্টায়<br>পরীক্ষীত নমুনা</p></b>
</div>

<div class="">
  <h2 class=""><b><?php echo $coronadata['Deate24name'] ;?></b></h2>
  <b><p class="text-align-center">গত ২৪ ঘন্টায়<br>মৃত্যু</p></b>
</div>
</div>


<div class="pt-3 pb-3 pl-5 pr-5">
  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
    <h1 align-center>বিভাগসমূহে আক্রান্ত</h1>
  </div>
</div>




<div class="d-flex justify-content-around text-center align-items-center count_style">
<div class="">
  <h3 class=""><b><?php echo $coronadata['Division']['Dhaka'] ;?></b></h3>
  <b><p class="text-align-center">ঢাকা<br>বিভাগ</p></b>
</div>

<div class="">
  <h3 class=""><b><?php echo $coronadata['Division']['Chittagong'] ;?></b></h3>
  <b><p class="text-align-cente">চট্টগ্রাম<br>বিভাগ</p></b>
</div>

<div class="">
  <h3 class=""><b><?php echo $coronadata['Division']['Sylhet'] ;?></b></h3>
  <b><p class="text-align-center">সিলেট<br>বিভাগ</p></b>
</div>

<div class="">
  <h3 class=""><b><?php echo $coronadata['Division']['Rangpur'] ;?></b></h3>
  <b><p class="text-align-center">রংপুর<br>বিভাগ</p></b>
</div>
</div>


<div class="d-flex justify-content-around  align-items-center text-center pb-5 count_style1 ">
<div id ="pr-3">
  <h3 class=""><b><?php echo $coronadata['Division']['Mymensingh'] ;?></b></h3>
  <b><p class="text-align-center">ময়মনসিংহ<br>বিভাগ</p></b>
</div>


<div class="pr-3">
  <h3 class=""><b><?php echo $coronadata['Division']['Rajshahi'] ;?></b></h3>
  <b><p class="text-align-center">রাজশাহী<br>বিভাগ</p></b>
</div>

<div class="pr-4">
  <h3 class=""><b><?php echo $coronadata['Division']['Barishal'] ;?></b></h3>
  <b><p class="text-align-center">বরিশাল<br>বিভাগ</p></b>
</div>


<div class="">
  <h3 class=""><b><?php echo $coronadata['Division']['Khulna'] ;?></b></h3>
  <b><p class="text-align-center">খুলনা<br>বিভাগ</p></b>
</div>
</div>

</section>




<section class="pt-3 pb-3 pl-5 pr-5">
  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
      <h3 class="text-uppercase text-center text-uppercase" style="color:darkred">বিশ্বে<span color="#8B0000"> কোভিট-১৯</span>এর তালিকায় বাংলাদেশের অবস্থান!</h3>
  </div>

  <div class="table-responsive-md">

    <table class="table table-bordered table-striped text-center" style="background-color: #4bb7d8;">
      <tr>
        <th style="background-color:#3f3f3f;color:white;">অবস্থান</th>
        <th style="background-color:#3f3f3f;color:white;">দেশ</th>
        <th style="background-color:#3f3f3f;color:white;">২৪ ঘণ্টায় আক্রান্ত</th>
        <th style="background-color:#3f3f3f;color:white;">সক্রিয় রোগীর সংখ্যা</th>
        <th style="background-color:#3f3f3f;color:white;">দুরবস্থায়</th>
        <th style="background-color:#3f3f3f;color:white;">সুস্থ</th>
        <th style="background-color:#3f3f3f;color:white;">সর্বমোট</th>
        <th style="background-color:#3f3f3f;color:white;">২৪ ঘণ্টায় নতূন মৃত্যু</th>
        <th style="background-color:#3f3f3f;color:white;">মোট মৃত্যু</th>
        <th style="background-color:#3f3f3f;color:white;">মোট পরীক্ষা</th>
      </tr>

<?php


$curl = curl_init();

curl_setopt_array($curl, array(
  //CURLOPT_URL => "https://covid-193.p.rapidapi.com/statistics",
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
    <h4 align-center>বিপদগ্রস্থ শহর <img src="images/alert.png" alt="danger" height="30px"></h4>
  </div>
</div>




<div class="ml-3 mr-3">

  <table class="table table-bordered table-striped text-center " style="background-color:#FF0000">
    <tr style="background-color:#FF0000;">
      <th>বার্তা</th>
      <th>তারিখ</th>
      <th>শহর</th>
      <th>মোট আক্রান্ত</th>
    </tr>

    <tr>
      <td><b><?php echo "বাংলাদেশের সর্বমোট করোনায় আক্রান্তের  ".$coronadata['DhakaPercent']."%  ঢাকাবাসী।";?></b></td>
      <td><b><?php echo $coronadata["1"]['date'] ?></b></td>
      <td><b><?php echo "ঢাকা শহর" ?></b></td>
      <td><b><?php echo $coronadata['Division']['DhakaCity'] ?></b></td>


          </tr>

  </table>

</div>


<button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:2%">
   <a  href="#citytable" class="btn btn-primary btn-lg active pl-3 "
   role="button" aria-pressed="true">ঢাকার এলাকারভিত্তিক অবস্থা</a>
</button>



<button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%">
   <a  onclick="openInNewTab('https://corona.gov.bd/');"  href="https://corona.gov.bd/" class="btn btn-primary btn-lg active pl-3 "
   role="button" aria-pressed="true" rel="noreferrer" target="_blank">জরুরি প্রয়োজনে</a>
</button>

<p class="text-center">তথ্যদাতা (জিডিয়াইচএস)</p>

<!--------District-Wise------>



<section class="districtwise corona_update container-fluid" id="states">
  <div class="my-5">
      <h3 class="text-uppercase text-center" style="color: red">বাংলাদেশে কোভিট-১৯ <span color="#9cc850">এর জেলাভিত্তিক</span> আপডেট!</h3>
  </div>

  <div class="tb table-responsive-md" id="Districttable">

    <table class="table table-bordered table-striped text-center">
      <tr style="background-color:#9cc850;">
        <th>অবস্থান</th>
        <th>সর্বশেষ সংষ্করণ</th>
        <th>জেলা</th>
        <th>মোট আক্রান্ত</th>
      </tr>

      <?php
      $data = file_get_contents('bangladata.json');
      $coronalive = json_decode($data,True);

      echo "<pre>";

      //print_r($coronalive);
     //print_r(insertion_Sort($test_array1));


     //////////////////////////////////////////////

               /*
                    function insertion_Sort($my_array)
                   {
                   	for($i=1;$i<58;$i++){
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
                   for ($i=1; $i < 58; $i++) {

                     $test_array[$i] = array($coronalive["$i"]['No_of_cases'],$coronalive["$i"]['name'],$coronalive["$i"]['date']);


                   }

                   $a = insertion_Sort($test_array);
                   //print_r(insertion_Sort($a));
    $Citycount =58;
                                    $pos=1;
    for($i=1; $i < $Citycount; $i++) {
      ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $a[$i]["2"] ?></td>
        <td><?php echo $a[$i]["1"] ?></td>
        <td><?php echo $a[$i]["0"] ?></td>


            </tr>
          <?php } ?>
          */



$Citycount =58;
  $pos=1;
for($i=1; $i < $Citycount; $i++) {
?>
<tr>
<td><b><?php echo $i ?></b></td>
<td><b><?php echo $coronalive[$i]["date"] ?></b></td>
<td><?php echo $coronalive[$i]["name"] ?></b></td>
<td><b><?php echo $coronalive[$i]["No_of_cases"] ?></b></td>


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
       <h3 class="text-uppercase text-center text-uppercase" style="color:darkred" >অনুসন্ধানের ফলাফলঃ <span color="#8B0000">কোভিড-১৯ </span><?php echo strtoupper($_POST['value'])?>-এ!</h3>
   </div>

   <div class="table-responsive-md">

     <table class="table table-bordered table-striped text-center" style="background-color: #4bb7d8;">
       <tr>
         <th>অবস্থান</th>
         <th>সর্বশেষ সংষ্করণ</th>
         <th>জেলা</th>
         <th>মোট আক্রান্ত</th>
       </tr>

       <?php
       $data = file_get_contents('bangladata.json');
       $coronalive123 = json_decode($data,True);

       echo "<pre>";

       //print_r($coronalive123);
      //print_r(insertion_Sort($test_array1));



      //////////////////////////////////////////////



      function insertion_Sort123($my_array)
     {
      for($i=1;$i<156;$i++){
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

     for ($i=1; $i < 156; $i++) {

       $test_array123[$i] = array($coronalive123['Area']["$i"]['confirmed'],$coronalive123['Area']["$i"]['name'],$coronalive123['1']['date']);


     }

     $a = insertion_Sort123($test_array123);
     //print_r($a);
              $Citycount =156;

              for($i=1; $i < $Citycount; $i++) {
                if (strtoupper($a["$i"]["1"]) == strtoupper($_POST['value']) || strtoupper($a["$i"]["1"]." ") == strtoupper($_POST['value'])) {
                  ?>
                  <tr>
                  <td><b><?php echo $i ?></b></td>
                  <td><b><?php echo $a["1"]["2"] ?></b></td>
                  <td><b><?php echo $a["$i"]["1"] ?></b></td>
                  <td><b><?php echo $a["$i"][0] ?></b></td>
                  </tr>

              <?php } } ?>


</table>

</div>

</section>

<?php
}
 ?>


<!--------Area-Wise------>
<section class="corona_updateA container-fluid" id="city">
  <div class="headingofarea">
      <h3 class="head text-uppercase text-center" style="color:  #e72828 ;">ঢাকা শহরে কোভিড-১৯ আপডেট!</h3>
  </div>

  <!---############ Searching Box For Area Search #############---->
    <div class="search-box search-box-responsive-md pt-2 pb-5 mt-0">
    <form method="post">
      <input class="form-control md-sm-2 searchab"  type="search" placeholder="আপডেট দেখার জন্য এখানে আপনার এলাকার নাম অনুসন্ধান করুন" aria-label="Search" name="value" autocomplete="off" style="background-color: #eff6f7 ;">
      <p style="font-size:12px;font-color:red;"> (আপনি ফলাফল না পেলে দয়া করে পুনরায় বানান দেখে নিন)</p>
      <button class="btn btn-lg btn-primary btn-block my-2 my-sm-0" href="#reportofcovid19" type="submit" name="search">অনুসন্ধান করুন</button>
    </form>
    </div>


  <div class="table-responsive-md" id="citytable">

    <table class="table table-bordered table-striped text-center">
      <tr style="background-color:#9cc850;">
        <th>অবস্থান</th>
        <th>সর্বশেষ সংষ্করণ</th>
        <th>এলাকা</th>
        <th>মোট আক্রান্ত</th>
      </tr>

      <?php
      $data = file_get_contents('area.json');
      $coronalive12 = json_decode($data,True);

      echo "<pre>";

      //print_r($coronalive12);
     //print_r(insertion_Sort($test_array1));


     //////////////////////////////////////////////
              /*

                    function insertion_Sort12($my_array)
                   {
                   	for($i=1;$i<156;$i++){
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

                   for ($i=1; $i < 156; $i++) {

                     $test_array12[$i] = array($coronalive12['Area']["$i"]['confirmed'],$coronalive12['Area']["$i"]['name'],$coronalive["2"]['date']);


                   }

                   $a = insertion_Sort12($test_array12);
                   //print_r(insertion_Sort($a));
    $Citycount =156;

    for($i=1; $i < $Citycount; $i++) {
      ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $a[$i][2] ?></td>
        <td><?php echo $a[$i][1] ?></td>
        <td><?php echo $a[$i][0] ?></td>


            </tr>
          <?php } ?>
          */

          $Citycount = (sizeof($coronalive12))/2-1;

          for($i=0; $i < $Citycount; $i++) {
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $coronalive12['date'] ?></td>
              <td><?php echo $coronalive12['Name'.strval($i)] ?></td>
              <td><?php echo $coronalive12['Confirm'.strval($i)] ?></td>


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
