<?php

<?php
//Validation will go here...

function isDate($dt) {

    try {

        $d = new DateTime($dt);

        return (true);

    } catch(Exception $e) {

        return false;

    }

}

/*
Is the first name a non-empty string
Is the last name a non-empty string
Was the married field filled out?
Is the birth date a valid date?
Is the height a valid number?
Is the weight a valid number?   
*/

//#######################################################

function bmi($feet, $inches, $weight){
        
    $feetToInches = $feet * 12 + $inches;


    $meters = $feetToInches * 0.0254;
    $kg = $weight / 2.20462;

    $bMI = $kg / ($meters * $meters);

    return $bMI;

}

function bmiDescription($bMI){

    $result = "";
    if ($bMI < 18.5){

        $result = "Underweight";

    }else if ($bMI > 18.5 && $bMI < 24.9){

        $result = "Normal Weight";

    }else if ($bMI > 25 && $bMI < 29.9){

        $result = "Overweight";

    }else{

        $result = "Obesity";
    }

    return $result;

}

function age ($bdate) {

    $date = new DateTime($bdate);

    $now = new DateTime();

    $interval = $now->diff($date);



    return $interval->y;

}

if (isset($_POST["submit"])) {

    $fname = filter_input (INPUT_POST, "fname");
    $lname = filter_input (INPUT_POST, "lname");
    $maritual = filter_input(INPUT_POST, "married");
    $dob = filter_input (INPUT_POST, "dob");
    $ft = filter_input (INPUT_POST, "feet");
    $in = filter_input (INPUT_POST, "inches");
    $wgt = filter_input (INPUT_POST, "weight");

    $patient_age = age($dob);

    $bodymass = bmi($ft, $in, $wgt);
    $cleanmass = (round($bodymass, 1));

    $done = bmiDescription($bodymass);




} else {

}

?>

  ?>


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
<?php
    //Validation will go here...

    function isDate($dt) {

        try {

            $d = new DateTime($dt);

            return (true);

        } catch(Exception $e) {

            return false;

        }

    }
    
    /*
    Is the first name a non-empty string
    Is the last name a non-empty string
    Was the married field filled out?
    Is the birth date a valid date?
    Is the height a valid number?
    Is the weight a valid number?   
    */

    //#######################################################

    function bmi($feet, $inches, $weight){
            
        $feetToInches = $feet * 12 + $inches;


        $meters = $feetToInches * 0.0254;
        $kg = $weight / 2.20462;

        $bMI = $kg / ($meters * $meters);

        return $bMI;

    }

    function bmiDescription($bMI){

        $result = "";
        if ($bMI < 18.5){

            $result = "Underweight";

        }else if ($bMI > 18.5 && $bMI < 24.9){

            $result = "Normal Weight";

        }else if ($bMI > 25 && $bMI < 29.9){

            $result = "Overweight";

        }else{

            $result = "Obesity";
        }

        return $result;

    }

    function age ($bdate) {

        $date = new DateTime($bdate);

        $now = new DateTime();

        $interval = $now->diff($date);

 

        return $interval->y;

    }

    if (isset($_POST["submit"])) {

        $fname = filter_input (INPUT_POST, "fname");
        $lname = filter_input (INPUT_POST, "lname");
        $maritual = filter_input(INPUT_POST, "married");
        $dob = filter_input (INPUT_POST, "dob");
        $ft = filter_input (INPUT_POST, "feet");
        $in = filter_input (INPUT_POST, "inches");
        $wgt = filter_input (INPUT_POST, "weight");

        $patient_age = age($dob);
    
        $bodymass = bmi($ft, $in, $wgt);
        $cleanmass = (round($bodymass, 1));
    
        $done = bmiDescription($bodymass);
    



    } else {

    }

?>
</body>
</html>