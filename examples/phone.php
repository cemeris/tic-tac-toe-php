<?php

$result = '';

if (array_key_exists('result', $_GET)) {
    $result = $_GET['result'];
}

if (array_key_exists('number', $_GET)) {
    $result = $result . $_GET['number'];
    header('location: ?result=' . $result);
}


$nr_list = json_decode(file_get_contents('phone.json'), true);
if (!is_array($nr_list)) {
    $nr_list = [];
}
if (array_key_exists('save', $_GET)) {
    $nr_list[] = $result;
    file_put_contents('phone.json', json_encode($nr_list, JSON_PRETTY_PRINT));
    header('location: ?result=');
}

?>

<!-- Output part: -->
<link rel="stylesheet" href="../style.css">
<div class="container">



    <?php
    $i = 9;
    while ($i >= 0) : ?>
        <a href="?number=<?= $i ?>&result=<?= $result ?>"><?= $i--; ?></a>
    <?php endwhile; ?>
    <a href="?save&result=<?= $result ?>">Save</a>
</div>

<h2>Dial: <span id="output"><?= $result; ?></span></h2>
<a href="?"><strong>Clear</strong></a><br>


<?php
for ($i = 0; $i < count($nr_list); $i++) {
    echo "<p>" . $nr_list[$i] . "</p>";
}

?>