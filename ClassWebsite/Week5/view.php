<html lang="en">
<head>
  <title>View Patients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        
    <div class="col-sm-offset-2 col-sm-10">
        <h1>Patients</h1>
    
    <?php
        
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
        
        $patient = getPatients();
        
        if (isPostRequest()) {
            $id = filter_input(INPUT_POST, 'patientID');
            deletePatient ($id);

        }

        
    ?>
  
    <table class="table table-striped">
            <thead>
                <tr>
                    
                    <th>FirstName</th>
                    <th>Last Name</th>
                    <th>Married</th>
                    <th>DOB</db>
                </tr>
            </thead>
            <tbody>
           
            
            <?php foreach ($patient as $row): ?>
         
                <tr>
                    <td>
                    <form action="view.php" method="post">
                    <input type="hidden" name="patientID" value="<?php echo $row['id'];?>">
                    <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                    </form>
                    </td>
                    <td><?php echo $row['patientFirstName']; ?></td>
                    <td><?php echo $row['patientLastName']; ?></td>-->
                    <td><?php 
                    if($row['patientMarried'] == 1){
                     $status = "YES";
                     echo $status;
                    }
                     else
                    {
                     $status = "NO";
                     echo $status; } ?></td>    
                    <td><?php echo $row['patientBirthDate']; ?></td>
                   
                    <td><a href="editPatients.php?action=update&id=<?php echo $row['id']; ?>">Edit</a></td>           
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="editPatients.php?action=add">Add Patient</a>
    </div>
    </div>
</body>
</html>