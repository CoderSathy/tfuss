<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css"/>
</head>
<body>


<center>
   <h1>Testable Fuss Project</h1>
   <p>Type the user id here for eg: 3  nad see its details.</p>
<br><br>

<div class="search">
  <form action="listusers.php">
    <input type="text" name="userId" placeholder=" ">
    <div>
        <svg>
            <use xlink:href="#path">
        </svg>
    </div>
  </form>
</div>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 28" id="path">
        <path d="M32.9418651,-20.6880772 C37.9418651,-20.6880772 40.9418651,-16.6880772 40.9418651,-12.6880772 C40.9418651,-8.68807717 37.9418651,-4.68807717 32.9418651,-4.68807717 C27.9418651,-4.68807717 24.9418651,-8.68807717 24.9418651,-12.6880772 C24.9418651,-16.6880772 27.9418651,-20.6880772 32.9418651,-20.6880772 L32.9418651,-29.870624 C32.9418651,-30.3676803 33.3448089,-30.770624 33.8418651,-30.770624 C34.08056,-30.770624 34.3094785,-30.6758029 34.4782612,-30.5070201 L141.371843,76.386562" transform="translate(83.156854, 22.171573) rotate(-225.000000) translate(-83.156854, -22.171573)"></path>
    </symbol>
</svg>

<br><br><br>


<?php
include 'dbconfig.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$userid = $_GET['userId'];



$sql = "SELECT * FROM Users WHERE id=$userid";

echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>id: " . $row["id"]. "<br> Name: " . $row["name"]. "<br> Type: " . $row["type"];
  }
} else {
  echo "<br><br>0 results";
}
$conn->close();


?>


</center>

</body>
</html>
