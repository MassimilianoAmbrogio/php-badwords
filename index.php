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
    <h4><?php echo $length; ?></h4>

    <?php
    // GET BADWORD
    $badword = $_GET['Ciao Mondo'];
    ?>

    <h5></h5>

    <!-- Fine esercizio php badwords -->
</body>
</html>