<?php require "php.php"; ?>

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
<h2>Patient Intake Form</h2>
<p>Complete the form with valid information.</p>
<hr>
<form name="patient-form" method="post" action="patient.php">
  <div class="content">
    <div>
      <label>First Name: </label>
      <input type="text" name="fname">
    </div>

    <div>
      <label>Last Name: </label>
      <input type="text" name="lname" > 
    </div>

    <div>
      <label for="married">Maritual Status: </label>
      <select name="married">
        <option value="Yes">Yes</option>
        <option value="No" selected>No</option>
      </select>
    </div>

    <div>
      <label>Birth Date: </label>
      <input type="date" name="dob">
    </div>

    <div>
      <label>Height: </label>
          <label>Feet: </label>
          <input type="number" min="1" max="7" name="feet" size="4px">
          <label>Inches: </label>
          <input type="number" min="1" max="11" name="inches" size="4px">
    </div>

    <div>
      <label>Weight: </label>
      <input type="decimal" name="weight" size="4px">
    </div>

    <input type="submit" name="submit" value="Submit Form">
  </div>
</form>
   
</body>
</html>