
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
                echo "<pre>";
                echo "\nSorted Array :\n";

                //echo $test_array[0][0];

                print_r(insertion_Sort($test_array));
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






  ?>
</body>
</html>
///////////////////////////////////////////////////////////
