<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LEMP Stack - MySQL Test</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:dbname=create_database_name;host=mysql', 'create_database_user', 'create_database_password', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $query = $pdo->query('SHOW VARIABLES like "version"');

    $row = $query->fetch();

    echo 'MySQL version:' . $row['Value'];
?>
</body>
</html>