<?php
        
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
        if (isPostRequest()) {

          $patient = filter_input(INPUT_POST, 'patient');
          $firstName = filter_input(INPUT_POST, 'patientFirstName');
          $result = addPatient ($patient, $firstName);

          

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
      <label class="control-label col-sm-2" for="first name">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="firstName">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="last name">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lastName" placeholder="Enter last name" name="lastName">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="Patient Name">Patient Marital Status:</label>
      <div class="col-sm-10">
        <input type="radio" class="form-control" id="married"  name="married" value="1">
        <label for="1">Yes</label>
        <input type="radio" class="form-control" id="married"  name="married" value="0">
        <label for="0">No</label>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="birthdate">Patient Birth Date:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="birthDate" value=" name="birthDate">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Patient</button>
        <?php
          if (isPostRequest()) {
            echo "Patient added";
          }
        ?>
      </div>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./view.php">View Patients</a></div>
</div>




</body>
</html>
