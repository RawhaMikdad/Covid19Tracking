<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<section class="corona_update1 container-fluid pt-5" id="statewise">
  <div class="my-5">
      <h3 class="text-uppercase text-center text-uppercase" style="color:darkred">Report of <span color="#8B0000"> covid-19</span> around the WORLD!</h3>
  </div>

  <div class="table-responsive">

    <table class="table table-bordered table-striped text-center" style="background-color: #4bb7d8;">
      <tr>
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
              $coronalive = json_decode($response,True);

              $maxpos = 0;
              $max=0;
              $statescount= 252 ;
              for ($i=0; $i < $statescount; $i++) {
                $max=$coronalive[$i]['confirmed'];
                for ($j=0; $j < $statescount ; $j++) {
                  if ($coronalive[$j]['confirmed'] > $max) {
                    $maxpos = $j;
                  }
                }
                ?>
                <tr>
                <td style="background-color:#7a4a91;"><?php echo $coronalive[$maxpos]['country'] ?></td>
                <td style="background-color:#4bb7d8;"><?php echo $coronalive[$maxpos]['confirmed'] ?></td>
                <td style="background-color:#f36e23;"><?php echo $coronalive[$maxpos]['recovered'] ?></td>
                <td style="background-color:#9cc850;"><?php echo $coronalive[$maxpos]['critical'] ?></td>
                <td style="background-color:#ff0000;"><?php echo $coronalive[$maxpos]['deaths'] ?></td>

                </tr>

<?php

}


?>

    </table>

  </div>

</section>


</body>
</html>
