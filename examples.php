<?php
$entries = [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];

$i1 = 1;
$i2 = 0;
for ($r = 2; $r >= 0; $r--) {
    for ($c = 2; $c >= 0; $c -= 2) {
        $a = $i2;
        $i2 = $i1 + $i2;
        $i1 = $a;
        $entries[$r][$c] = $i2;
    }
}


?>



<?php output($entries);?>
<pre><?=print_r($entries, true)?></pre>
<?php function output($entries) { ?>
    <table>
        <?php for($row = 0; $row < 3; $row++): ?>
            <tr>
            <?php for($col = 0; $col < 3; $col++): ?>
                <td><?=$entries[$row][$col] ; ?></td>
            <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
<?php } ?>

<div style="width:100px; display:inline-block;">
    <h1>1)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', 'x', 'x'],
        ['x', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>2)</h1>
    <?php
    $entries = [
        ['0', 'x', 'x'],
        ['0', 'x', 'x'],
        ['0', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>3)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', '0', 'x'],
        ['x', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>4)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['0', '0', '0'],
        ['x', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>5)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', 'x', 'x'],
        ['x', '0', '0']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>6)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', '0', '0'],
        ['x', '0', '0']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>7)</h1>
    <?php
    $entries = [
        ['x', '0', 'x'],
        ['0', '0', '0'],
        ['x', '0', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>8)</h1>
    <?php
    $entries = [
        ['x', '0', '0'],
        ['m', 'm', 'm'],
        ['x', '0', '0']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>9)</h1>
    <?php
    $entries = [
        ['6', '0', '5'],
        ['4', '0', '3'],
        ['2', '0', '1']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>10)</h1>
    <?php
    $entries = [
        ['8', '0', '5'],
        ['3', '0', '2'],
        ['1', '0', '1']
    ];
    output($entries);?>
</div>