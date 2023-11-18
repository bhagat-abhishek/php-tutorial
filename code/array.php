<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>

    <h1>Recommended Books</h1>

    <?php

    $books = [
        "Bhagawad Gita",
        "Wolf of Wall Steet",
        "Old Days",
    ];

    ?>


    <ul>

        <?php foreach ($books as $book) {

            echo "<li>$book</li>";
        }

        ?>

    </ul>


    <ul>

        <?php foreach($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>

    </ul>

    <!-- Demonstrated different way of looping over an array -->

</body>

</html>