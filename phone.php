<link rel="stylesheet" href="style.css">
<div class="container">

    <?php
    $i = 9;
    while($i >= 0):?>
<a href="?number=<?=$i?>"><?=$i-- ; ?></a>
    <?php endwhile;?>
</div>

<h2>Dial: <span id="output"></span></h2>
<a href="?"><strong>Clear</strong></a>