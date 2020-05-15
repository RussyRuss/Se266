<?php

    require "php.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information</title>
</head>
<body>
<h2>Patient Information</h2>
<hr>
    <div>
        <label>Name: <?= ucfirst($fname) . " " . ucfirst($lname) ?> </label>
    </div>
    <div>
        <label>Marital status: <?= $maritual ?></label>
    </div>
    <div>
        <label>Birth Date: <?= "$dob" ?> </label>
        <label>Age: <?= "$patient_age" ?>  </label>
    </div>
    <div>
        <label>Height: <?php echo "$ft'$in''" ?></label>
    </div>
    <div>
        <label>Weight: <?= $wgt ?></label>
    </div>
    <div>
        <label>BMI: <?= $cleanmass ?> </label>
        <div>
        <label>Classification of BMI: <?= $done ?> </label>
        </div>
    </div>
    
    
    
    
    
 
</body>
</html>