<?php

    include (__DIR__ . '/db.php');
 
    function getCharacter($CharacterId){
        global $db;

        

        $results = [];

        $stmt = $db->prepare ("SELECT DisneyCharacterID, DisneyCharacterName, DisneyCharacterImage FROM DisneyCharacters WHERE DisneyCharacterID = :Id;");
        $stmt->bindValue(':Id', $CharacterId);
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                       
       }
        
        return ($results);
    }
    //pushes everything to the results array 
    function getVotes(){
        global $db;

        

        $results = [];

        $stmt = $db->prepare ("SELECT DisneyCharacterName, COUNT(DisneyVoteID) AS VoteCount
        FROM DisneyCharacters c LEFT OUTER JOIN DisneyVotes v ON c.DisneyCharacterID=v.DisneyCharacterID
        GROUP BY DisneyCharacterName");

        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                       
       }
        
        return ($results);
    }


    function insertVote($CharacterId)
    {
        global $db;
        //no results added 
        $results = "not added";

        

        $results = [];
        //this statment passes the ID into the Disney Votes
        $stmt = $db->prepare ("INSERT INTO DisneyVotes SET DisneyCharacterId = :Id;");
        $stmt->bindValue(':Id', $CharacterId);

        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = "Data Added";
                       
       }
        
        return ($results);
    }
?>
