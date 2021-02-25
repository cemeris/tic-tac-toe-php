<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$default = [
    [0, 0, 0],
    [0, 0, 0],
    [0, 0, 0]
];

// Example #1
$content = fill($default, function (&$ent2, $r, $c) {
    $ent2[$r][$c] = 'x';
});


// Example #2
$entries = $default;
for ($r = 0; $r <= 2; $r++) {
    for ($c = 1; $c <= 2; $c++) {
        $entries[$r][$c] = 'x';
    }
}
$content = $content . output($entries);

// Example #3
$content = $content . fill($default, function (&$ent2, $r, $c) {
    if ($r != 1 || $c != 1) {
        $ent2[$r][$c] = 'x';
    }
});

file_put_contents('storage.txt', $content);


function fill($ent1, $callback) {
    for ($r = 0; $r <= 2; $r++) {
        for ($c = 0; $c <= 2; $c++) {
            $callback($ent1, $r, $c);
        }
    }
    return output($ent1);
}
function output($ent) {
    static $i = 0;
    $i++;
    $out = PHP_EOL . "Example #$i" . PHP_EOL;

    for ($r = 0; $r <= 2; $r++) {
        $out = $out  . "|";
        for ($c = 0; $c <= 2; $c++) {
            $out = $out . $ent[$r][$c]  . "|";
        }
        $out = $out . PHP_EOL;
    }

    return $out;
}



$json_example_array = [
    'row1' => [1, 4, 8],
    'row2' => [6, 2, 5],
    'row3' => [9, 7, 3]
];

file_put_contents('storage.json', json_encode($json_example_array));

