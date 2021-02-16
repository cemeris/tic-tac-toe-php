<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<link rel="stylesheet" href="style.css">

<?php $entries = [
    ['', 'x', ''],
    ['x', '', ''],
    ['', '', 'x']
];
?>
<div class="container">
    <?php for($row = 0; $row < 3; $row++): ?>
        <?php for($col = 0; $col < 3; $col++): ?>
            <?php $entries[$row][$col] = 'x'; ?>
            <a href="#"><?=$entries[$row][$col] ; ?></a>
        <?php endfor;?>
    <?php endfor;?>
</div>

<pre><?=print_r($entries, true)?></pre>

