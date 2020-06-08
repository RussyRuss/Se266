<?php 

  
  include __DIR__ . '/model/functions.php';



  //if(isset($_POST['delete']) && isPostRequest())
  //{

   // $id = filter_input(INPUT_POST, "id");

   //$deleteme =  deletePatient ($id);
   //header("Location:week4.php");

  //}





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
<h2 style="text-align:center">- Russel </h2>




<div id="main-container">
<h3>Week 4 Assignments</h3>


<h2> Patients </h2>

<?php 
  include __DIR__ . '/week4/model/model_patients.php';

  $ptinfo = getPTinfo();

  if (isPostRequest()) {
    $id = filter_input(INPUT_POST, 'id');
    deletePatient ($id);
  }
?>

<table>
  <thread>
    <tr>
      <th></th>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>DOB</th>
      <th>Married</th>
      <th>Age</th>
      <th>Edit</th>

    </tr>
  </thread>
  <tbody>
  <?php foreach($ptinfo as $row): ?>
    <tr>
      <td>
      <form action="week4.php" method="post">
      <input type= "hidden" name="id" value="<?php echo $row['id'];?>">

      <form>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['firstName']; ?></td>      
      <td><?php echo $row['lastName']; ?></td>
      <td><?php echo $row['DOB']; ?></td>
      <?php if($row['married'] == 2){$marriage = "Yes";}else{$marriage = "No";}?>
      <td><?php echo $marriage; ?></td>

      <?php
        $age = $row["DOB"];
        $result = TheAge($age);
      ?>

      <td><?php echo $result; ?></td> 
      <td><a href="editPatients.php?action=update&id=<?php echo $row['id']; ?>">Edit</a><td>
      <td><a href="editPatients.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a><td>      
    </tr>
  <?php endforeach; ?>  
  <br/>
  </tbody>
  </table>
  <br/>
  <!--<a href="AddPatient.php"> Add PT </a>-->
  <a href="editPatients.php?action=add"> Add PT</a>



  

</div>
</body>
</html>