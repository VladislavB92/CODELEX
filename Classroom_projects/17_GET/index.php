<?php

$min = (int) ($_POST['min'] ?? 1);
$max = (int) ($_POST['max'] ?? 100);

?>

<!DOCTYPE html>
<html>
<body>
<h1>Random number generator</h1>
<form action="/" method="post">
<label for="min">min</label>
    <input type="number" id="min" min="1" max="1000" name="min" />
    <label for="min">max</label>
    <input type="number" id="max" min="1" max="1000" name="max" />
    <button type="submit">Submit</button>
    <?= rand($min, $max); ?>
</form>

</body>
</html>