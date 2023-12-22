<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teams List</title>
</head>
<body>
    <h1>Teams List</h1>
    <ul>
        <?php foreach ($teams as $team): ?>
            Football team : <?= $team->name ?>
            Team Coach    : <?= $team->coach ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>
