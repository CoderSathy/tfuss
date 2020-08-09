<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css"/>
</head>
<body>


<center>
   <h1>Testable Fuss Project</h1>
   <p>HBSQLI is a small open sourced project which can be used by YOU to test your SQL Injection ability.<br>Happy Hacking!</p>
<br><br>

<div class="search">
  <form action="simplexss.php">
    <input type="text" name="dispText" placeholder=" ">
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

<br><br>

<?php
header('X-XSS-Protection:0');
if(isset($_GET['dispText'])) {
  $txtm = $_GET['dispText'];
} else {
  $txtm = "Nothing to display!";
}
echo $txtm;
 ?>

</center>



</body>
</html>
