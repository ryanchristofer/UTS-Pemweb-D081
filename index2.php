<?php
    include ('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sholat Tarawih</title>
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
  <a href="/Tugas-UTS/index1.php"><p>JADWAL SHOLAT</p></a>
  <a href="/Tugas-UTS/index3.php"><p>BUKA PUASA</p></a>

    <h1 style="text-align:center; color: blue;">SHOLAT TARAWIH</h1>
    <table border='1' width="100%" style='border-collapse:collapse'>
              <thead>
                <tr style="background-color: blue; color: black;">
                  <th>Tanggal</th>
                  <th>Imam</th>
                  <th>Masjid</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                  
                  $query = "SELECT * FROM dt_sholattarawih";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>

                  <?php $brs=1; ?>

                  <tr 
                    <?php
                        if($brs % 2 == 0)
                        {
                            echo 'style="background-color: red; color:white; text-align:center;" ';
                        }
                        else
                        {
                            echo 'style="background-color: grey; color:yellow; text-align:center;"  ';
                        }
                    ?>    
                  >  
                    <td><?php echo $data['Tanggal'];  ?></td>
                    <td><?php echo $data['Imam'];  ?></td>
                    <td><?php echo $data['Masjid'];  ?></td>
                 <?php endwhile ?>
              </tbody>
    </table>
  </body>
</html>