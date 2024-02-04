<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hike List</title>
</head>
<body>
    <h1>Hike List</h1>
    <ul>
        <?php foreach ($hikes as $hike): ?>
            <li><?= $hike->name ?> (<?= $hike->place ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>