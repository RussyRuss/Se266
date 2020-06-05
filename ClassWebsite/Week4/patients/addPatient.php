<?php
        
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
       if (isPostRequest()) {
           $patient = filter_input(INPUT_POST, 'patient');
           
           $patientFirstName = filter_input(INPUT_POST, 'patientFirstName');
           $result = addPatient ($patientFirstName, $patientLastName,$patientMarried, $patientBirthDate);
           
       }
    ?>
    

<html lang="en">
<head>
  <title>Add Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   

    
<div class="container">
    
  <h2>Add Patient</h2>
  <form class="form-horizontal" action="addPatient.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="patient name">Patient Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="patient" placeholder="Enter patient name" name="patient">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">id:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="id" placeholder="Enter First Name" name="firstName">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Patient</button>
        <?php
            if (isPostRequest()) {
                echo "patient added";
            }
        ?>
      </div>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./view.php">View Patients</a></div>
</div>

</body>
</html>