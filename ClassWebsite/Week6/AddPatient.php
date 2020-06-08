<?php

    include __DIR__ . '/week4/model/model_PTinfo.php';
    include __DIR__ . '/week4/model/functions.php';
    require "AddPatientPHP.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">    
    <title>Document</title>

</head>
<body>


<ul>
  <li><a class="active" href="assignments.php">Assignments</a></li>
  <li><a href="herouku.php">Herouku Resouces </a></li>
  <li><a href="php.php">PHP Resources</a></li>
  <li><a href="git.php">Git Resources</a></li>
  <li><a href="mygit.php">My Github Repo</a></li>
</ul>

<h1 style="text-align:center">PHP & MySQL</<h1>
<h2 style="text-align:center">- Leticia Garcia </h2>




<div id="main-container">
<?php if($error != ""): ?>
    <h3>Add Patient</h3>



    <div class="animal">

    <form name="patientform" method = "post">

    <div>
    <label>First Name: </label>
    <input type="text" value = "<?= $firstName = filter_input(INPUT_POST, "firstName") ?>" name ="firstName">
    </div>

    <div>
    <label>Last Name: </label>
    <input type="text" value = "<?= $lastName = filter_input(INPUT_POST, "lastName")?>" name ="lastName">
    </div>

    <div>
    <label> D.O.B: </label>
    <input type = "date" name="dob" value ="<?=$dob = filter_input(INPUT_POST, "dob")?>"/>
    </div>

    <div>
    <label>Are you married?: </label>
    <select name ="married" value="<?=$married = filter_input(INPUT_POST, "married")?>">

    <option value=2>Yes</option>
    <option value=1>No</option>
    </select>
    </div>

    <input type="submit" value ="Submit" name="submitpt">





    </form>


    <?php

        if ($error !="" && $stopthis == true):
    ?>
    <?= $error; ?>

    <?php endif;?>

<?php
    endif;
?>
<div>
</div>

<?php if($error == "" && $stopthis == true): ?>

    <?php

        if(isPostRequest()){

            $firstName = filter_input(INPUT_POST, "firstName"); //Filter for the First Name
            $lastName = filter_input(INPUT_POST, "lastName"); //Filter for the Last Name  
    
            $married = filter_input(INPUT_POST, "married");  
            $dob = filter_input(INPUT_POST, "dob");             

            $result = addPatient($firstName, $lastName, $dob,$married);

        }


    ?>




 

    <h2>Patient Added</h2>
    <div>
    <label><strong>First Name: </strong><?= $firstName?> </label>
    </div>
    <div>
    <label><strong>Last Name: </strong><?= $lastName?> </label>
    </div>
    <div>
    <div>
    <label><strong>D.O.B: </strong><?=$dob?> </label>
    <br>
    <a href="week4.php">View Patients</a>
    </div>
<?php endif; ?>















</body>
</hmtl>