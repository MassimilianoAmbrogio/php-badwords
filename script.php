<?php
// GET BADWORD AND REPLACE
$badword = $_GET['badword'];
$replaced = str_replace('mela', '***', $badword);
?>

<p><?php echo $replaced ?></p>