<?php
        
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
        
     
   
    $feet = "";
    $inches = "";
    $weight = "";
    $temp = "";
    $sysBP = "";
    $diaBP = "";
    if (isset($_POST['btnSubmit'])) {
        
      
        $temp = filter_input(INPUT_POST, 'temp');;
        $sysBP = filter_input(INPUT_POST, 'systolicBP');;
        $diaBP = filter_input(INPUT_POST, 'diastolicBP');;
        $feet = filter_input(INPUT_POST, 'feet');
        $inches = filter_input(INPUT_POST, 'inches');
        $weight = filter_input(INPUT_POST, 'weight');
    }
   
        if (isset($_GET['action'])) {
            $action = filter_input(INPUT_GET, 'action');
            $id = filter_input(INPUT_GET, 'id');
            if ($action == "update") {
                $row = getPatient($id);
                
                $firstName = $row['patientFirstName'];
                $lastName = $row['patientLastName'];
                $married = $row['patientMarried'];
                $birthDate = $row['patientBirthDate'];
            } else {
                $firstName = "";
                $lastName = "";
                $married = "";
                $birthDate = "";
            }
            
            
        } elseif (isset($_POST['action'])) {
            $action = filter_input(INPUT_POST, 'action');
            $id = filter_input(INPUT_POST, 'patientId');
            $firstName = filter_input(INPUT_POST, 'firstName');
            $lastName = filter_input(INPUT_POST, 'lastName');
            $married = filter_input(INPUT_POST, 'married');
            $birthDate = filter_input(INPUT_POST,'birthDate');
        } 
            
       
       if (isPostRequest() && $action == "add") {
       
           $result = addPatient ($firstName, $lastName,$married, $birthDate);
           header('Location: view.php');
           
       } elseif (isPostRequest() && $action == "update") {
            
         
           $result = updatePatient($firstName, $lastName,$married, $birthDate,$id);
           header('Location: view.php');
           
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
  <form class="form-horizontal" action="editPatients.php" method="post">
      <input type="text" name="action" value="<?php echo $action; ?>">
      <input type="text" name="patientId" value="<?php echo $id; ?>">
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="first name">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="firstName" value="<?php echo $firstName; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="last name">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lastName" placeholder="Enter last name" name="lastName" value="<?php echo $lastName; ?>">
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
        <input type="date" class="form-control" id="birthDate" value="<?php echo $birthDate; ?>"  name="birthDate">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"><?php echo $action; ?> Patient</button>
       
      </div>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./view.php">View patient</a></div>
</div>




</body>
</html>

/