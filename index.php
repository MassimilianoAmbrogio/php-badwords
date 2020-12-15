<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <!-- Inizio esercizio php badwords -->

    <?php
    // GEN TEXT
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolores fugit natus, facilis expedita quo ipsa velit doloremque accusamus vel.';
    ?>

    <p><?php echo $text; ?></p>
    
    <!-- LENGHT -->
    <h4>Il paragrafo è lungo: <?php echo strlen($text); ?> caratteri</h4>

    <?php
    // CENSURED TEXT
    $target = $_GET['badword'];
    $censuredText = str_replace($target, '***', $text);
    ?>

    <p><?php echo $censuredText; ?></p>

    <!-- Fine esercizio php badwords -->
</body>
</html>