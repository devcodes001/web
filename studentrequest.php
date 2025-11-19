<html>
<head>
  <title>Student Details</title>
</head>
<body align="center">
   <h2>Details of Student</h2>
   <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Name: <input type="text" name="name"><br><br>
      Email ID: <input type="email" name="mail"><br><br>
      Address: <textarea rows="4" name="adrs"></textarea><br><br>
      Gender: 
      M <input type="radio" value="M" name="gender"> 
      F <input type="radio" value="F" name="gender"><br><br>
      DOB: <input type="date" name="dob"><br><br>
      <input type="submit" value="Submit">
   </form>

   <?php
   if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (isset($_GET["name"], $_GET["mail"], $_GET["adrs"], $_GET["gender"], $_GET["dob"])) {
         $name = $_GET["name"];
         $mail = $_GET["mail"];
         $adrs = $_GET["adrs"];
         $gen = $_GET["gender"];
         $dob = $_GET["dob"];

         echo "<br><br><strong>DETAILS:</strong><br><br>";
         echo "Name: $name<br>Email ID: $mail<br>Address: $adrs<br>Gender: $gen<br>DOB: $dob";
      }
   else{
       echo "<p> Please enter values.</p>";
   }
   }
   ?>
</body>
</html>

