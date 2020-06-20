<?php include __DIR__ . '/../Include/header.php'; ?>
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
  <style type = "text/css">
  .wrapper {
            display: grid;
            grid-template-columns: 180px 400px;
        }

        .measurementWrapper {
            width: 600px;
            display: flex;
            flex-wrap: wrap;
            margin-left: 40px;
        }
        .measurementWrapper > div {
            flex: 1 1 100px;
        }
        .label {
            text-align: right;
            padding-right: 10px;
            margin-bottom: 5px;
            background-color: white;
            color: black;
        }
        label {
           font-weight: bold;
        }
        input[type=text] {width: 120px;}
        .error {color: red;}
    </style>
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
    <div style="margin-left:50px;">
    <h2> Patient Measurements</h2>
    </div>
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
        <button type="submit" class="btn btn-default"><?php echo $action; ?> Delete Patient</button>
       
      </div>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./view.php">View patient</a></div>
</div>
<div>

<h2>Patient Measurments</h2>
<form action="form.php" method="post">
        Feet: <input type="number" name="feet" value="<?php echo  $feet; ?>" />
        <br>
        Inches: <input type="number" name="inches" value="<?php echo  $inches; ?>" />
        <br>
        Weight: <input type="number" name="weight" value="<?php echo  $weight; ?>" />
        <br>
        Temperature: <input type="number" name="temp" value="<?php echo  $temp; ?>"/>
        <br>
        Bloodpressure systolic: <input type="number" name="systolicBP" value="<?php echo  $sysBP; ?>"/>
        <br>
        Bloodpressure diastolic: <input type="number" name="diastolicBP" value="<?php echo  $diaBP; ?>"/>
        <input type="submit" name="btnSubmit" />
    <?php  ?>
    </form>

</div>

</body>
</html>