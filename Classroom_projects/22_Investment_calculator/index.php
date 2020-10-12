<?php

declare(strict_types=1);

require_once 'MyInvestment.php';

if (isset($_POST['amount'])) {
    $investment = new MyInvestment();
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate your yearly gain</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="header">
        <h1>Investment calculator</h1>
    </div>

    <div class="calculator">
        <form action="/" method="post">
            <label for="amount">How much you want to invest?</label>
            <input id="amount" type="text" name="amount"><br><br>

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
                </select><br><br>

                <form action="/" method="post">
                    <label for="percentage">What is the percentage?</label>
                    <input id="percentage" type="text" name="percentage"><br><br>

                    <button type="submit">Calculate</button><br>
                </form><br>
    </div>

    <div class="result">
        <?php if ($_POST != null) : ?>
            <h2>If you will invest now <span style="color:d6e0f0">€<?= $investment->getAmount(); ?></span>
                for <span style="color:d6e0f0">
                    <?= $investment->getDuration();
                    if ($investment->getDuration() > 1) : ?> years
                    <?php else : ?> year
                    <?php endif; ?> </span>
                under yearly rate of <span style="color:d6e0f0">
                    <?= $investment->getPercentage(); ?>%</span>
                you will get <span style="color:d6e0f0">€<?= $investment->getTotal(); ?>.</span>
            </h2>
        <?php endif; ?>
    </div>
</body>

</html>