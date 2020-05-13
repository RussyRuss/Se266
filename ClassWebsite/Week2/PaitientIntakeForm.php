<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Intake Form</title>
</head>
<style>
  div{
    margin: 4px;
  }
</style>
<body>
<?php
  $fnameErr = $lnameErr = $dobErr = $feetErr = $inchesErr = $weightErr = "";
  $fname = $lname = $dob = $feet = $inches = $weight = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["fname"])){
      $fnameErr = "First Name Required";
    }else {
      $fname = test_input($_POST["First"]);
    }

    if(empty($_POST["lname"])){
      $lnameErr = "Last Name Required";
    }else {
      $fname = test_input($_POST["Last"]);
    }

    if(empty($_POST["dob"])){
      $dobErr = "Date Required";
    }else {
      $fname = test_input($_POST["Dob"]);
    }

    if(empty($_POST["feet"])){
      $feetErr = "feet Required";
    }else {
      $feet = test_input($_POST["Feet"]);
    }

    if(empty($_POST["inches"])){
      $inchesErr = "inches Required";
    }else {
      $inches = test_input($_POST["Inches"]);
    }
    
    
    
    
    $lname = test_input($_POST["lname"]);
    $dob = test_input($_POST["dob"]);
    $height = test_input($_POST["feet"]);
    $inches = test_input($_POST["inches"]);
    $weight = test_input($_POST["weight"]);
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  
  <h2>PHP Form Validation Example</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<h2>Patient Intake Form</h2>
<p>Complete the form with valid information</p>
<form name="patient-form" method="post" action="patient.php">
  <div class="content">
    <div>
      <label>First Name: </label>
      <input type="text" name="fname">
    </div>
    <div>
      <label>Last Name: </label>
      <input type="text" name="lname"> 
    </div>
    <div>
      <label for="married">Married Status: </label>
      <select name="married">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
    <div>
      <label>Birth Date: </label>
      <input type="text" name="dob">
    </div>
    <div>
      <label>Height: </label>
          <label>Feet: </label>
          <input type="text" name="feet">
          <label>Inches: </label>
          <input type="text" name="inches">
    </div>
    <div>
      <label>Weight: </label>
      <input type="text" name="weight">
    </div>
    <input type="submit" name="submit" value="Submit Form">
  </div>
</form>
   
</body>
</html>

