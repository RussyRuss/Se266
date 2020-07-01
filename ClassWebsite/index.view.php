<?php include_once __DIR__ . "/index_prac2.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<a href="https://github.com/RussyRuss/Se266">My GitHub Repo</a>
<h1>Task For the Day</h1>
    <ul><br>
        
        <li>

            <strong>Name: </strong> <?= $task['title']; ?>

        </li>

        <li>

            <strong>Due Date: </strong> <?= $task['due']; ?>
            

        </li>
        
            <strong>Personal Responsibility: </strong> <?= $task['assigned_to']; ?>
        
        <li>

             <strong>Status: </strong> <?= $task['completed']; ?>
             
             <ul>
             <input type="checkbox" id="status1" name="status1" value="yes">
                    <label for="status1"> Yes </label><br>
            
            <input type="checkbox" id="status2" name="status2" value="no">
                    <label for="status2"> No </label><br>
            </ul>
        </li>
    
        
        
    </ul>
    
</body>
</html>

