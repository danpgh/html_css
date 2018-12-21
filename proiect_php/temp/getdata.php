<?php
require 'inc/connect.php';
    $query = "SELECT * FROM data";
    $result = mysqli_query($conn, $query);
        ?>
        <div id="data">
<!--      <p><b>Data: </b><?php echo $row['time']." ".$row['sensor']. " ".$row['temp']." ".$row['hum'];?> </p> -->
<table border="1" align='center'>
  <tr>
    <th>Data</th>
    <th>Sensor</th>
    <th>Temperature</th>
    <th>Humidity</th>
  </tr>
  <?php
      if(mysqli_num_rows($result) > 0 ) {
        while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['time']."</td>";
    echo "<td>".$row['sensor']."</td>";
    echo "<td>".$row['temp']."</td>";
    echo "<td>".$row['hum']."</td>";
    ?>
    <td><a href="removeReg.php?id=<?php echo $row['id'] ?>"><img src="img/dot.png"></a></td>
    <?php
    echo "</tr>";
      }
  ?>
</table>
    </div>
        <?php
      echo "Number of results: " . " " . mysqli_num_rows($result);
    }else {
      echo "No results.";
    }

 ?>
