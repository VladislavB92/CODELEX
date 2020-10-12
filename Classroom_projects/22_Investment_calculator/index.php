<?php

declare(strict_types=1);

require_once 'MyInvestment.php';

$investment = new MyInvestment(
    (float) $_POST['amount'],
    (int) $_POST['duration'],
    (int) $_POST['percentage']
);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate your yearly gain</title>
</head>

<body>
    <div class="header">
        <h1>Investment calculator</h1>
    </div>

    <div class="calculator">
        <form action="/" method="post">
            <label for="amount">How much you want to invest?</label>
            <input id="amount" type="text" name="amount"><br>

            <form action="/" method="post">
                <label for="duration">For how many</label>
                <select id="duration" name="duration">
                    <?php for ($i = 0; $i <= 50; $i++) : ?>
                        <option value="<?= $i; ?>"><?php if ($i === 0) : ?>
                                <?= "years?" ?>
                            <?php else : ?>
                                <?= $i; ?>
                            <?php endif; ?> </option>
                    <?php endfor; ?>
                </select><br>

                <form action="/" method="post">
                    <label for="percentage">What is the percentage?</label>
                    <input id="percentage" type="text" name="percentage"><br>

                    <button type="submit">Calculate</button><br>
                </form>
    </div>

    <div class="result">
        <h2>If you will invest now €<?= $investment->getAmount(); ?>
            for
            <?= $investment->getDuration();
            if ($investment->getDuration() > 1) : ?> years
            <?php else : ?> year
            <?php endif; ?>
            under yearly rate of <?= $investment->getPercentage(); ?>%
            you will get €<?= $investment->getTotal(); ?>!</h2>
    </div>
</body>

</html>