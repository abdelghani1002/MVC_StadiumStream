<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= $_ENV['APP_URL'] . "/public/assets/dist/output.css" ?>>
    <title>Dashboard</title>
</head>

<body>

    <?php
    require "app/Views/includes/admin/navbar.php";
    require "app/Views/includes/admin/aside.php";
    require "app/Views/includes/admin/statistics.php";
    ?>

</body>

</html>