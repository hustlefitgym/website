<?php
   $dbhost = '198.71.227.86:3306';
   $dbuser = 'stayfit';
   $dbpass = 'HaWaterSign11435';
   $dbname = 'DensityFitness';
   $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

   if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   }

   $sql_query = 'SELECT COUNT(*) AS CurrentMembers FROM (SELECT UserId, Min(ArrivalTime) AS DifferenceInMinutes FROM Arrivals WHERE TIMESTAMPDIFF(MINUTE, ArrivalTime,CURRENT_TIMESTAMP()) <= 90) AS LatestArrivals';

  $conn->real_query($sql_query);
  $res = $conn->use_result();

  
  while ($row = $res->fetch_assoc()) {
    echo "<font size='+5'> Current Members : " . $row['CurrentMembers'] . "</font>\n";
  }

  
?>