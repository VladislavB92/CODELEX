<?php

declare(strict_types=1);

require_once 'SavingAccount.php';

$amount = readline('How much money is in the account?: ');

$account = new SavingAccount((float) $amount);

$annualInteresRate = readline('Enter the annual interest rate: ');


$accountOpened = readline('How long has the account been opened? ');

$month = 1;

while ($month <= $accountOpened) {
    $amountDepositedForMonth = readline(
        'Enter amount deposited for month: ' . $month . ': '
    );
    $account->saveDeposite((float) $amountDepositedForMonth);

    $amountWithdrawnForMonth = readline(
        'Enter amount withdrawn for ' . $month . ': '
    );
    $account->saveWithdraw((float) $amountWithdrawnForMonth);

    $account->addAnnualInterestRate((float) $annualInteresRate);

    $month++;
}

echo 'Total deposited: $' . $account->getDeposited() . PHP_EOL;
echo 'Total withdrawn: $' . $account->getWithdrawn() . PHP_EOL;
echo 'Interest earned: $' . $account->getEarnedInterest() . PHP_EOL;
echo 'Ending balance: $' . $account->getEndingBalance() . PHP_EOL;
