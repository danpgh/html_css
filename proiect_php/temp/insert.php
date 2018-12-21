<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Phonebook</title>
    <link rel="stylesheet"  type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="wrap">
        <div id="search">
            <form action="#" method="POST">
                <label>Date/time:(format yyyy-mm-dd hh:mm:ss) <br/>
                <input type="datetime-local" name="time"></label><br/>
                <label>Sensor: <br/>
                <input type="text" name="sensor"></label><br/>
                <label>Temperature: <br/>
                <input type="text" name="temp"></label><br/>
                <label>Humidity: <br/>
                <input type="text" name="hum"></label><br/>
                <input type="submit" name="insert" value="Insert"><br/>
            </form>
        </div>
        <div id="message">
          <?php
          if (isset($_POST['insert'])) {
            if(isset($_POST['time']) && isset($_POST['sensor']) && isset($_POST['temp']) && isset($_POST['hum'])){
                if(!empty($_POST['time']) && !empty($_POST['sensor']) && !empty($_POST['temp'])){
                    $time = trim($_POST['time']);
                    $sensor = trim($_POST['sensor']);
                    $temp = trim($_POST['temp']);
                    $hum = trim($_POST['hum']);
                    require 'inc/connect.php';
                    $time = mysqli_real_escape_string($conn, $time);
                    $sensor = mysqli_real_escape_string($conn, $sensor);
                    $temp = mysqli_real_escape_string($conn, $temp);
                    $hum = mysqli_real_escape_string($conn, $hum);
                    $query = "INSERT INTO data (time, sensor, temp, hum) VALUES ('{$time}','{$sensor}','{$temp}','{$hum}')";
                    if(mysqli_query($conn, $query) === TRUE){
                      echo "New record successfully created.";
                    }else {
                      echo "Error!";
                    }
                }else {
                  echo "All fields must be filled in.";
                }
            }else {
              echo "All parameters must be sent!";
            }
          }
           ?>
        </div>
    </div>
  </body>
</html>
