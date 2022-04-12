<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Jadwal Sholat</title>
  </head>
  <style>
    table, th, td {
  border: 1px solid black;
  border-radius: 10px;
  border-style: double;
  border-color: #96D4D4;
}
</style>
  <body>
  <a href="/Tugas-UTS/index2.php"><p>SHOLAT TARAWIH</p></a>
  <a href="/Tugas-UTS/index3.php"><p>BUKA PUASA</p></a>  

  <h1 style="text-align:left; color: blue;">JADWAL SHOLAT</h1> 
<table style="border: 1px solid; border-collapse: collapse;">
    <tbody>
<?php  

  //$tanggal = tanggal("imsyak"=>247, "subuh"=>257, "dzuhur"=>697, "Ashar"=>892, "Maghrib"=>1057, "Isya"=>1126);

  $tanggal=array(247, 257, 697, 892, 1057, 1126);
 
echo "<tr>";
echo "<th>Tanggal</th>";
echo "<th>Imsyak</th>";
echo "<th>Subuh</th>";
echo "<th>Dzuhur</th>";
echo "<th>Ashar</th>";
echo "<th>Maghrib</th>";
echo "<th>Isya</th>";
echo "</tr>";

  for($i=1; $i<=30; $i++){
      if($i%2==0){
        for($j=0; $j<=5;$j++){
            --$tanggal[$j];
         }
      }
      echo '<tr style="background-color: red; color:white; text-align:center;">';
      echo "<td>".$i."-04-2022</td>";
  foreach($tanggal as $key=>$value){
    echo "<td>".floor($value/60).":".round(($value%60))."\t"."</td>";
 }
 echo "</tr>";
}
    ?>
        <!-- <?php 
        
        foreach($tanggal as $key=>$value): ?>
        <td>
            <tr><?= round($value/60).":".round(($value%60))." "; ?></tr>
        </td>
    <?php endforeach; ?> -->

    </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>