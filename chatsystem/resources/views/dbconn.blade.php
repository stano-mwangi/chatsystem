<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel & Mysql</title>
</head>
<body>
<?php
if (DB::connection()->getPdo()) {
    echo "Successfully Connected to database and database name is: " . DB::connection()->getDatabaseName();
}
?>

</body>
</html>