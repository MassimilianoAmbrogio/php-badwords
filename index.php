<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- Inizio esercizio php badwords -->

    <?php
    // GET PHP INFO.
    $text = 'Hello World';
    // LENGTH
    $length = strlen($text);
    ?>

    <p><?php echo $text; ?></p>
    <h3><?php echo $length; ?></h3>

    <!-- LINK BADWORD -->
    <a href="./script.php?badword=mela">Parola censurata</a>

    <!-- Fine esercizio php badwords -->
</body>
</html>