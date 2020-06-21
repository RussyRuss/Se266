
<?php include __DIR__ . '/../include/final_header.php'; ?>

<style>
body {
  border: 50px solid powderblue;
  padding: 250px;
}
</style>



<h1 style="font-size:50px; text-align:center;">Spring 2020</h1>   
<h2 style="font-size:43px; text-align:center;>">PHP and MySQL Spring 2020 -Final Project Proposal</h2>
<h3 style="font-size:40px; text-align:center;">Student Name:  Russel Souffrant</h3>
<h4 style="font-size:35px; text-align:center;">Project Name: Rusty Exotics  </h4>





<h1>Primary Table</h1> 

<h2>CREATE TABLE IF NOT EXISTS users (id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,<br>        
  userFirstName VARCHAR(50) DEFAULT NULL,<br>         
  userLastName VARCHAR(50) DEFAULT NULL,<br>        
  userBirthDate DATE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;<br><h2>

<h1>Secsandary Table </h1>
<h2>CREATE TABLE IF NOT EXISTS Vehicles (id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,<br>        
  vehicleMake VARCHAR(50) DEFAULT NULL,<br>         
  vehicleModel VARCHAR(50) DEFAULT NULL,<br>         
  vehicleYear VARCHAR(50) DEFAULT NULL,<br>         
  VehicleColor DATE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;<br><h2>
    
  <?php include __DIR__ . '/../include/footer.php'; ?>