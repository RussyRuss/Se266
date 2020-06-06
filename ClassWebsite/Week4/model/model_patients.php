

<?php
include (__DIR__ . '/db.php');

function getPatients () {
    global $db;
    
    $results = [];

    $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patient ORDER BY patientLastName");

    if($stmt->execute() && $stmt->rowCount() > 0){
        $results= $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}

function addPatient($id, $f, $l, $m, $b) {
    global $db;
    $results = "Not added";


    $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :firstname, patientLastName = :lastname, patientMarried = :married, patientBirthDate = :birthdate");

    $binds = array(
        ":firstname" => $f,
        ":lastname" => $l,
        ":married" => $m,
        ":birthdate" => $b
    );
   

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = "Data Added";
    }

    return ($results);
}


function addPatient2 ($f, $l, $m, $b) {
    global $db;
    $result = "Not Added";
   
   $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :firstname, patientLastName = :lastname, patientMarried = :married,patientBirthDate = :birthdate");

   $stmt->bindValue(':firstname', $f);
   $stmt->bindValue(':lastname', $l);
   $stmt->bindValue(':married', $m);
   $stmt->bindValue(':birthdate', $b);

   $stmt->execute();

  
  
   if ($stmt->rowCount() > 0) {

    $results = 'Data Added';

}



$stmt->closeCursor();



return ($results);

}


?>

