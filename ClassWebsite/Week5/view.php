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
        $patient = getPatients();

        
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
                    <td><?php echo $row['patientFirstName']; ?></td>
                    <td><?php echo $row['patientLastName']; ?></td>
                    <td><?php echo $row['patientMarried']; ?></td>
                    <td><?php echo $row['patientBirthDate']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="addPatients.php"?>Add Patient</a>
    </div>
    </div>
</body>
</html>