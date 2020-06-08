<?php

       include (__DIR__ . '/db.php');

       function getPTinfo(){

              global $db;
        
              $results = [];
      
              $stmt = $db->prepare("SELECT id, firstName, lastName, DOB, married FROM patientinfo ORDER BY id");       

              if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
                     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                         
                 }
                 
                 return ($results);





       }

       function addPatient($fN, $lN, $dob, $stats){
       
              global $db;

              $stmt = $db->prepare("INSERT INTO patientinfo SET firstName = :firstN, lastName = :lastN, DOB = :dob, married = :statuss");

              $binds = array(
              
                     ":firstN" => $fN,
                     ":lastN" => $lN,
                     ":dob" => $dob,
                     ":statuss" => $stats,

              );
              
              if($stmt -> execute($binds) && $stmt->rowCount() > 0){
                     $results = "Data Added";

              }

              return($results);

       }



       $ptinfo = getPTinfo();

       function updatePatient ($fN, $lN, $dob, $stats, $id) {
              global $db;
      
              $results = "";
      
              $stmt = $db->prepare("UPDATE patientinfo SET firstName = :firstN, lastName = :lastN, DOB = :DOB, married = :married WHERE id=:id");
              
              $stmt->bindValue(':id', $id );
              $stmt->bindValue(':firstN', $fN );
              $stmt->bindValue(':lastN', $lN );
              $stmt->bindValue(':DOB', $dob );
              $stmt->bindValue(':married', $stats);
            
              if ($stmt->execute() && $stmt->rowCount() > 0) {
                  $results = 'Data Updated';
              }

              return ($results);
       }

       function deletePatient ($id) {
              global $db;
              
              $results = "Data was not deleted";
              $stmt = $db->prepare("DELETE FROM patientinfo WHERE id=:id");
              
              $stmt->bindValue(':id', $id);
                  
              if ($stmt->execute() && $stmt->rowCount() > 0) {
                  $results = "Data Deleted";
              }
              
              return ($results);
       }

       function getOnePTinfo ($id) {
              global $db;
             
             $result = "";
             $stmt = $db->prepare("SELECT id, firstName, lastName, DOB, married FROM patientinfo 
             WHERE id=:id");
             $stmt->bindValue(':id', $id);
            
             if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
                  $result = $stmt->fetch(PDO::FETCH_ASSOC);
                             
              }
              
              return ($result);
       }

       function addPatientInfo($id, $md, $pw, $ph, $bps, $bpd, $temp)
       {
              global $db;
              $results = [];


              $stmt = $db->prepare("INSERT INTO patientMeasurements SET patientId = :id, patientMeasurementDate = :measurementDate ,patientWeight = :patientweight, patientHeight = :patientheight, patientBPSystolic = :patientBPS, patientBPDiastolic = :patientBPD, patientTemperature = :patientT");
              $binds = array(
  
                     ":id" => $id,
                     ":measurementDate" => $md,
                     ":patientweight" => $pw,
                     ":patientheight" => $ph,
                     ":patientBPS" => $bps,
                     ":patientBPD" => $bpd,
                     ":patientT" => $temp
              );
       

              if($stmt->execute($binds) && $stmt->rowCount() > 0){
              $results = "Data Added";
              }

              return $results;

       }



       function getMeasurements($measureId)
       {

              global $db;
              $results = "";

              $stmt = $db->prepare("SELECT patientMeasurementId, patientMeasurementDate,
              patientWeight, patientHeight, patientBPSystolic, patientBPDiastolic, patientTemperature FROM
              patientMeasurements WHERE patientId = :id");



              $stmt->bindValue(":id", $measureId);

              if ($stmt->execute() && $stmt->rowCount() > 0)
              {
                     
                     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);




              }
              else 
              {
                     $results = "No Data Available";
              }

              return $results;
       }



       function deleteMeasurement($id)
       {
              
              global $db;

              $results = "Data was not deleted";

              $stmt = $db->prepare("DELETE FROM patientMeasurements WHERE patientMeasurementId = :id");

              $stmt->bindValue(':id', $id);

              if($stmt->execute() && $stmt-> rowCount () > 0)
              {

                     $results = 'Patient Deleted';
                     
              }

              return $results;


       }








?>