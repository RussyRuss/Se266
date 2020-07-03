<?php

include (__DIR__ . '/models/model_votes.php');
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if ($contentType == "application/json") {

    $content = trim(file_get_contents("php://input"));
    $decoded = json_decode($content, true);
    $action = $decoded['action'];

    if ($action == "insert") {
        insertVote ($decoded['DisneyCharacterID']);
        echo json_encode(getVotes());
        
    }
    else if ($action == "getCharacter") {
        
        echo json_encode(getCharacter($decoded['DisneyCharacterID']));
    } else if ($action == "getVote") {
        $votes = getVotes();    

        //an array for results
        $results = array();
        $results[0] = array(); 
        $results[1] = array (); 

        foreach ($votes as $v) {

            //pushing each result to either the character name and the vote count
            array_push($results[0], $v['DisneyCharacterName']);
            array_push($results[1], $v['VoteCount']);
            
        }
        //echoing the results for them to be displayed on the page
        echo json_encode($results);
    }
}