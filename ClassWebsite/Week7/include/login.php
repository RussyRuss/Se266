<?php

    include __DIR__ . "/include/header.php";
    //include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/include/functions.php";
    
   // $msg = '';

    //if (isPostRequest()) {
        $username = filter_input(INPUT_POST, 'userName');
        $password = filter_input(INPUT_POST, 'password');
       
     //   if ($_POST['username'] == 'donald' && 
     //   $_POST['password'] == 'duck') {
     //   $_SESSION['valid'] = true;
     //   $_SESSION['timeout'] = time();
    //    $_SESSION['username'] = 'donald';
        
    //    echo 'You have entered valid use name and password';
     //}else {
     //   $msg = 'Wrong username or password';
    // }
  //}
    
    
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
 
 body {font-family: Arial, Helvetica, sans-serif;}


    </style>
<title>Schools Upload</title>
</head>
<body>

    <div id="mainDiv">
        <form method="post" action="login.php">
        
            <div class="rowContainer">
                <h3>Please Login</h3>
            </div>
            <div class="rowContainer">
                <div class="col1">User Name:</div>
                <div class="col2"><input type="text" name="userName" value="donald"></div> 
            </div>
            <div class="rowContainer">
                <div class="col1">Password:</div>
                <div class="col2"><input type="password" name="password" value="duck"></div> 
            </div>
              <div class="rowContainer">
                <div class="col1">&nbsp;</div>
                <div class="col2"><input type="submit" name="login" value="Login" class="btn btn-warning"></div> 
            </div>
            
        </form>
        
    </div>


</body>
</html>