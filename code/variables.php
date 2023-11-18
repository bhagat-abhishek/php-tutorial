<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable in PHP</title>
</head>
<body>
    
    <h1>
        <?php echo "Hello World" ?>
    </h1>

    <p>
        <?php 
        
            $variable = "Abby";

            // This is a comment which is ignored by the interpreter

            echo "Hey $variable, how are you doing";

        
        ?>
    </p>

    <p>
        <?php 

            echo "Hi" . $variable; // this is a example of concatination
        
        ?>
    </p>

</body>
</html>