
<?php include __DIR__ . '/../include/final_header.php'; ?>

<style>
body {
  border: 40px solid powderblue;
  padding: 20px;
}
</style>



  
<h2 style="font-size:43px; text-align:center;>">Table Design</h2>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Primary Table</h1> 

<h2>CREATE TABLE IF NOT EXISTS users (id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,<br>        
  userFirstName VARCHAR(50) DEFAULT NULL,<br>         
  userLastName VARCHAR(50) DEFAULT NULL,<br>         
  userGenderTINYINT(1),<br>         
  userBirthDate DATE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;<br><h2>

<h1>Secsandary Table </h1>
<h2>CREATE TABLE IF NOT EXISTS Vehicles (id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,<br>        
  vehicleMake VARCHAR(50) DEFAULT NULL,<br>         
  vehicleModel VARCHAR(50) DEFAULT NULL,<br>         
  vehicleYear VARCHAR(50) DEFAULT NULL,<br>         
  VehicleColor DATE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;<br><h2>
<br>
<br>
<br>
<br>
<br>
<br>

    
  <?php include __DIR__ . '/../include/footer.php'; ?>