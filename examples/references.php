<?php

//EXAMPLE 1
echo "<br><br>EXAMPLE 1 <br>";
$a = 1;
$b = $a;
$a++;
echo "$a + $b = " . ($a + $b);

//EXAMPLE 2
echo "<br><br>EXAMPLE 2 <br>";
$a = 1;
$b = &$a;
$a++;
echo "$a + $b = " . ($a + $b);

//EXAMPLE 3
echo "<br><br>EXAMPLE 3 <br>";
$a = 1;
$b = &$a;
$b++;
echo "$a + $b = " . ($a + $b);


//EXAMPLE 4
echo "<br><br>EXAMPLE 4 <br>";
$a = 1;
$b = &$a;
$c = $a;
$b++;
echo "$a + $b + $c = " . ($a + $b + $c);

//EXAMPLE 5
echo "<br><br>EXAMPLE 5 <br>";
$a = 1;
$b = &$a;
$c = &$b;
$b++;
echo "$a + $b + $c = " . ($a + $b + $c);

//EXAMPLE 6
echo "<br><br><b>ARRAYS</b><br>EXAMPLE 6  <br>";
$array_a = [
    'key' => 1
];
$value = $array_a['key'];
$value++;
echo "key =" . $array_a['key'] . "; value = " . $value;

//EXAMPLE 7
echo "<br><br>EXAMPLE 7  <br>";
$array_a = [
    'key' => 1
];
$value = &$array_a['key'];
$value++;
echo "key =" . $array_a['key'] . "; value = " . $value;



//EXAMPLE 8
echo "<br><br><b>FUNCTIONS</b><br>EXAMPLE 8  <br>";
$array_a = [
    'key' => 1
];

function example8($v) {
    return $v++;
}
$value = $array_a['key'];
example8($value);

echo "key =" . $array_a['key'] . "; value = " . $value;

//EXAMPLE 9
echo "<br><br><b>FUNCTIONS</b><br>EXAMPLE 9  <br>";
$array_a = [
    'key' => 1
];

function example9(&$v) {
    return $v++;
}
$value = $array_a['key'];
example9($value);

echo "key =" . $array_a['key'] . "; value = " . $value;

//EXAMPLE 10
echo "<br><br><b>FUNCTIONS</b><br>EXAMPLE 10  <br>";
$array_a = [
    'key' => 1
];

function example10(&$v) {
    return $v++;
}
$value = &$array_a['key'];
example9($value);

echo "key =" . $array_a['key'] . "; value = " . $value;

