<div>
        <ul>
            <?php foreach ($animals as $animal) : ?>
                <li><?= $animal ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div>
        <ul>
            <?php foreach ($person as $description => $value) : ?>
                <li><strong><?= ucwords($description); ?>: </strong><?= $value; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div>
        <ul>
            <li><strong>Assignment: </strong> <?= ucwords($task['name']); ?></li>
            <li><strong>Due Date: </strong> <?= ucwords($task['due']); ?></li>
            <li><strong>Assigned To: </strong> <?= ucwords($task['assigned']); ?></li>
            <li>
                <strong>Status: </strong> 
                <?php 
                    if ($task['completed']){
                        echo '&#9989';
                    }
                    else {
                        echo "Incomplete";
                    }
                ?>
            </li>
        </ul>
    </div>
    <div>
        <?= oldEnoughToDrink(22); ?>
    </div>
    <div>
        <ul>  
            <?php for ($num = 1; $num <= 100; $num++) : ?>
                <li> <?= fizzBuzz($num); ?> </li>
            <?php endfor; ?>
        </ul>
    </div>
</body>
</html>