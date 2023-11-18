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

        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>

    </ul>

    <!-- Demonstrated different way of looping over an array -->


    <h1>Associative arrays</h1>


    <?php

    $players = [

        [
            "name" => "Ronaldo",
            "club" => "Real Madrid"
        ],
        [
            "name" => "Messi",
            "club" => "FC Barcelona"
        ],
        [
            "name" => "Sunil",
            "club" => "FC Benguluru"
        ],

    ];

    ?>

    <h2>List of players with clubs</h2>

    <?php foreach ($players as $player) : ?>
        <li><?= $player['name'] ?> (<?= $player['club'] ?>)</li>
    <?php endforeach; ?>

</body>

</html>