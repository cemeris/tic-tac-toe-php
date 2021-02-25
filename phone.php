<?php

$result = '';

if (array_key_exists('result', $_GET)) {
    $result = $_GET['result'];
}

if (array_key_exists('number', $_GET)) {
    $result = $result . $_GET['number'];
    header('location: ?result=' . $result);
}
?>

<!-- Output part: -->
<link rel="stylesheet" href="style.css">
<div class="container">



<?php
    $i = 9;
    while($i >= 0):?>
<a href="?number=<?=$i?>&result=<?=$result?>"><?=$i-- ; ?></a>
    <?php endwhile;?>
</div>

<h2>Dial: <span id="output"><?=$result; ?></span></h2>
<a href="?"><strong>Clear</strong></a>