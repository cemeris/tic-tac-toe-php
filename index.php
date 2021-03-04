<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include 'functions.php';
?>

<link rel="stylesheet" href="style.css">

<?php
$entries = getEntries();

//getTable($entries);
$entries['table'] = array_key_exists('table', $entries) ? $entries['table'] : [];
$table = &$entries['table'];


if (array_key_exists('r', $_REQUEST) && array_key_exists('c', $_REQUEST)) {
    $r = $_REQUEST['r'];
    $c = $_REQUEST['c'];
    echo "<h3>r=" . $r . "; c= " . $c . "</h3>";
    if (
        !array_key_exists($r, $table) ||
        !array_key_exists($c, $table[$r]) ||
        $table[$r][$c] === ''
    ) {
        $entries['count'] = array_key_exists('count', $entries) ? $entries['count'] + 1 : 1;
        $table[$r][$c] = $entries['count'] % 2 === 0 ? 'o' : "x";
        saveEntries($entries);
    }
}

?>

<div class="container">
    <?php for ($r = 0; $r < 3; $r++) : ?>
        <?php for ($c = 0; $c < 3; $c++) : ?>
            <a href="?r=<?= $r ?>&c=<?= $c ?>"><?= $table[$r][$c]; ?></a>
        <?php endfor; ?>
    <?php endfor; ?>
</div>