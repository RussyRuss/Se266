<?php
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";
    
    $schools = [];

    $schoolName = "";
    $city = "";
    $state = "";

    if (isPostRequest()) {
        // your search logic goes here. Call getSchools with the appropriate arguments
        $schoolName = filter_input(INPUT_POST, 'schoolName');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');

        $schools = getSchools($schoolName, $city, $state);
        
    }
    
    include_once __DIR__ . "/includes/header.php";
?>

            <h2>Search Schools</h2>
            <form method="post" action="search.php">
                <div class="rowContainer">
                   <div class="col1">School Name:</div>
                   <div class="col2"><input type="text" name="schoolName" value="<?php echo $schoolName; ?>"></div> 
               </div>
               <div class="rowContainer">
                   <div class="col1">City:</div>
                   <div class="col2"><input type="text" name="city" value="<?php echo $city; ?>"></div> 
               </div>
               <div class="rowContainer">
                   <div class="col1">State:</div>
                   <div class="col2"><input type="text" name="state" value="<?php echo $state; ?>"></div> 
               </div>
                 <div class="rowContainer">
                   <div class="col1">&nbsp;</div>
                   <div class="col2"><input type="submit" name="search" value="Search" class="btn btn-warning"></div> 
               </div>
            </form>
            
            <?php if(isPostRequest()): ?>

        <p>Found <?php echo count($schools) ?> schools</p>
        <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
    <table>

        <thead>
            <tr>
                <th>School Name</th>
                <th>City</th>
                <th>State</th>
            </tr>
        </thead>

        <tbody>
        
        <?php foreach ($schools as $row): ?>
            <tr>
                <td><?php echo $row['schoolName']; ?></td>
                <td><?php echo $row['schoolCity']; ?></td>
                <td><?php echo $row['schoolState']; ?></td> 
                            
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>

        <?php endif;?>
            <?php
            
                include_once __DIR__ . "/includes/footer.php";
            ?>
        