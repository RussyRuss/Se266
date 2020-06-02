<?php

include (__DIR__ . '/db.php');


function patients () {
    global $db;
    
    $results = [];

    $stmt = $db->prepare("SELECT id, firstName, lastName, birthDate, age, married FROM patients ORDER BY firstName"); 
    
    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
             
     }
     
     return ($results);
}


function addpatient ($t, $d) {
    global $db;
    $results = "Not added";

    $stmt = $db->prepare("INSERT INTO patients SET firstName = :patient, lastName = :lastName");

    $binds = array(
        ":team" => $t,
        ":division" => $d
    );
    
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = 'Data Added';
    }
    
    return ($results);
}

function addpatient2 ($t, $d) {
    global $db;
    $results = "Not added";

    $stmt = $db->prepare("INSERT INTO patients SET firstName = :patient, division = :division");
   
    $stmt->bindValue(':team', $t);
    $stmt->bindValue(':division', $d);
   
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $results = 'Data Added';
    }
   
    $stmt->closeCursor();
   
    return ($results);
}


// $result = addTeam2 ('Feyenoord', 'Eredivisie');
// echo $result;



?>