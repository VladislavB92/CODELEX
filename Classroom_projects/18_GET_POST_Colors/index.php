<?php

function randColor() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

$color = $_GET[randColor()] ?? 'red';
$defaultSquare = 50;
$addingDimension = $defaultSquare / 4;
$newDimension = $defaultSquare + $addingDimension;

?>

<!DOCTYPE html>
<html>
<body>

<div style="width: <?= $defaultSquare ?>px; height: <?= $defaultSquare ?>px; background-color: <?php echo randColor(); ?>"></div>

<form action="/" method="get">
<button type="submit" value=<?php $color ?> name="color">Size up and change color!</button>
</form>

</body>
</html>