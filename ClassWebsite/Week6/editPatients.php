<?php
        
        include __DIR__ . '/week4/model/model_PTinfo.php';
        include __DIR__ . '/week4/model/functions.php';
        

        if (isPostRequest() && isset($_POST['btnSubmit'])) {
            
            $id = filter_input(INPUT_POST, 'hiddenvar');        
            $temp = filter_input(INPUT_POST, 'temp');
            $sysBP = filter_input(INPUT_POST, 'systolicBP');
            $diaBP = filter_input(INPUT_POST, 'diastolicBP');
            $height = filter_input(INPUT_POST, 'height');
            $weight = filter_input(INPUT_POST, 'weight');
            $date = date("y-m-d");

            $result = addPatientInfo($id, $date, $weight, $height, $sysBP, $diaBP, $temp);
        }

        // let's figure out if we're doing update or add
        if (isset($_GET['action'])) {
            $action = filter_input(INPUT_GET, 'action');
            $id = filter_input(INPUT_GET, 'id');
            if ($action == "update") {
                $row = getOnePTinfo($id);
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];
                $dob = $row['DOB'];
                $marriage = $row['married'];
            } else {
                $firstName = "";
                $lastName = "";
                $dob = "";
                $marriage = "";
            }
        
        }
            
        //} elseif (isset($_POST['action'])) {
         //   $action = filter_input(INPUT_POST, 'action');
          //  $id = filter_input(INPUT_POST, 'id');
          //  $firstName = filter_input(INPUT_POST, 'firstName');
          //  $lastName = filter_input(INPUT_POST, 'lastName');
          //  $dob = filter_input(INPUT_POST, 'DOB');
          //  $marriage = filter_input(INPUT_POST, 'married'); 
        //} 
            
       
       if (isPostRequest() && $action == "add") {
            $firstName = filter_input(INPUT_POST, "firstName"); //Filter for the First Name
            $lastName = filter_input(INPUT_POST, "lastName"); //Filter for the Last Name  

            $married = filter_input(INPUT_POST, "married");  
            $dob = filter_input(INPUT_POST, "dob");             

            $result = addPatient($firstName, $lastName, $dob,$married);
       
            header('Location: week4.php');
           
       } 

       if(isset($_POST['submitupdate']) && isPostRequest())
       {

            $id = filter_input(INPUT_POST, 'hiddenvar');
            $first = filter_input(INPUT_POST, 'firstName');
            $last = filter_input(INPUT_POST, 'lastName');
            $dateob = filter_input(INPUT_POST, 'dob');
            $marr = filter_input(INPUT_POST, 'married');
            $result = updatePatient ($first, $last, $dateob, $marr, $id);
            header('Location: week4.php');

       }


       $block = filter_input(INPUT_POST, "answer");

       if(isPostRequest() && $action == "delete")
       {

            if($block == "yes")
            {


                $result = deletePatient($id);
                header("Location: week4.php");

            }
            else{

                header("Location: week4.php");



            }


       }

       if(isset($_POST['delete']) && isPostRequest())
       {

            $deleteMe = filter_input(INPUT_POST, "hiddendelete");
            $goodbye = deleteMeasurement($deleteMe);
  

       }








?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php if($action == "delete") : ?>

    <form name="deleteportion" method="post">

    <label>You are deleting Patient ID {<?php echo $id?>}</label>
    <br>
    <label>Are you sure?: </label>
    <select name="answer">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
    <br>
    <input type="submit" name="submission" value="Delete">


    </form>


<?php endif; ?>



   
<?php if($action == "add") : ?>
    
    <div class="container">
    <h2>Add Patient </h2>
        
    <form name="patientform"method = "post">

    <div class="form-group">
    <label>First Name: </label>
    <input type="text" value = "<?= $firstName = filter_input(INPUT_POST, "firstName") ?>" name ="firstName">
    </div>

    <div class="form-group">
    <label>Last Name: </label>
    <input type="text" value = "<?= $lastName = filter_input(INPUT_POST, "lastName")?>" name ="lastName">
    </div>

    <div class="form-group">
    <label> D.O.B: </label>
    <input type = "date" name="dob" value ="<?=$dob = filter_input(INPUT_POST, "dob")?>"/>
    </div>

    <div class="form-group">
    <label>Are you married?: </label>
    <select name="married">
        <option value=2>Yes</option>
        <option value=1>No</option>
    </select>
    </div>

    <div class="form-group">
    <button type="submit" value ="Submit" name="submit"><?php echo $action; ?> Patient </button>
    <div>

    </form>
    
    <div><a href="week4.php">View Patient</a></div>
    </div>
<?php endif; ?>

<?php if ($action == "update"): ?>
<br>



<div class="container">
    <h2>Update Patient </h2>
        
    <form name="patientform" action="editPatients.php" method = "post">
    <input type="hidden" name="hiddenvar" value="<?php echo $id ?>">
    <div class="form-group">
    <label>First Name: </label>
    <input type="text" value = "<?php echo $firstName; ?>" name ="firstName">
    </div>

    <div class="form-group">
    <label>Last Name: </label>
    <input type="text" value = "<?php echo $lastName ;?>" name ="lastName">
    </div>

    <div class="form-group">
    <label> D.O.B: </label>
    <input type = "date" name="dob" value ="<?php echo $dob?>"/>
    </div>

    <div class="form-group">
    <label>Are you married?: </label>
    <select name ="married" value="<?php echo $married;?>">

    <option value=2>Yes</option>
    <option value=1>No</option>
    </select>
    </div>

    <div class="form-group">
    <button type="submit" value ="Submit" name="submitupdate"><?php echo $action; ?> Patient </button>
    <div>

    </form>
    
    <div><a href="week4.php">View Patient</a></div>
    </div>  

    <h2>Patient Measurments</h2>
    <form  method="post">
        <input type="hidden" name="hiddenvar" value="<?php echo $id ?>">
        Height: <input type="number" name="height" value="<?php echo  $height; ?>" />
        
        <br>

        Weight: <input type="number" name="weight" value="<?php echo  $weight; ?>" />
        <br>
        Temperature: <input type="number" name="temp" value="<?php echo  $temp; ?>"/>
        <br>
        Bloodpressure systolic: <input type="number" name="systolicBP" value="<?php echo  $sysBP; ?>"/>
        <br>
        Bloodpressure diastolic: <input type="number" name="diastolicBP" value="<?php echo  $diaBP; ?>"/>
        <input type="submit" name="btnSubmit" />
        
    </form>

    <?php 
        
        $patientMeasurements = getMeasurements($id);

    ?>
    <br>
    <?php if($patientMeasurements != "No Data Available"):?>

    <table>
        <thead>

        <tr>
            <th></th>
            <th>Meausrement Id</th>
            <th>Date</th>
            <th>Weight</th>
            <th>Height</th>
            <th>systolic</th>
            <th>Diastolic</th>
            <th>Temperature</th>
            <th>Delete</th>



        </tr>

        </thead>

        <tbody>

            <?php foreach ($patientMeasurements as $row): ?>

            <tr>

                <form name="measure-table" method="post">
                <td><input type="hidden" name="hiddendelete" value="<?php $a =$row["patientMeasurementId"]; echo $a; ?>"></td>
                <td><?php echo $row["patientMeasurementId"]?></td>
                <td><?php echo $row["patientMeasurementDate"]?></td>
                <td><?php echo $row["patientWeight"]?></td>
                <td><?php echo $row["patientHeight"]?></td>
                <td><?php echo $row["patientBPSystolic"]?></td>
                <td><?php echo $row["patientBPDiastolic"]?></td>
                <td><?php echo $row["patientTemperature"]?></td>
                <td><input type="submit" name="delete" value="Delete"></td>



            </tr>
            
            <?php endforeach?>



        </tbody>

    </table>

    <?php elseif($patientMeasurements == "No Data Available"):?>


        <p>No Data Available</p>



    <?php endif; ?>



<?php endif; ?>
</body>
</html>