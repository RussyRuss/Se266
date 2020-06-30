<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1>To Due List</h1>
    <ul>
        <?php foreach ($task as $key => $feature) : ?>
            <li><?= $feature; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>

