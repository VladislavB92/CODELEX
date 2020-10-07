<?php

function randColor()
{
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT); // Random color generator
}

$color = $_GET[randColor()] ?? randColor();
$defaultSize = $_GET['size'] ? $_GET['size'] + ($_GET['size'] / 4) : 50;
// If $_GET['size'] is 'true', 'size' + 'size' / 4, or the it will be 50;

?>

<!DOCTYPE html>
<html>

<body>

    <form action="/" method="get">

        <div style="width: <?= $defaultSize ?>px; height: <?= $defaultSize ?>px; background-color: <?= randColor(); ?>"></div>

        <input type="hidden" name="size" value=<?= $defaultSize; ?>>

        <button type="submit" value=<?= $color ?> name="color">Size up and change color!</button>

    </form>

</body>

</html>