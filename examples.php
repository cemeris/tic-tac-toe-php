<?php
$entries = [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];

for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$r][$c] = 'x';
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