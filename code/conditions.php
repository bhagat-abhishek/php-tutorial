<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condtions and Booleans</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

<?php 
    $nameofBook = "Dark Matter";
    $read = false;

    if($read) {
        $message = "You have read $nameofBook.";
    } else {
        $message = "You have not read $nameofBook.";
    }
?>

    <h1><?= $message ?></h1>

</body>
</html>