<html lang="en">
<head>
  <title>View Patient</title>
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
        $teams = getPatients();
        
    ?>
  
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Married</th>
                </tr>
            </thead>
            <tbody>
           
            
            <?php foreach ($patient as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['birthDate']; ?></td>  
                    <td><?php echo $row['age']; ?></td>  
                    <td><?php echo $row['married']; ?></td>              
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="addPatient.php">Add Patient</a>
    </div>
    </div>
</body>
</html>