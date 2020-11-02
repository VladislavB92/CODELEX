<?php

declare(strict_types=1);

require_once 'SavingAccount.php';

$amount = readline('How much money is in the account?: ');
$annualInteresRate = readline('Enter the annual interest rate: ');

$account = new SavingAccount((float) $amount, (float) $annualInteresRate);

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
    $account->saveInterest();

    $month++;
}

echo 'Total deposited: $' . $account->getDeposited() . PHP_EOL;
echo 'Total withdrawn: $' . $account->getWithdrawn() . PHP_EOL;
echo 'Interest earned: $' . $account->getInterestEarned() . PHP_EOL;
echo 'Ending balance: $' . ($account->getBalance() + $account->getInterestEarned()) . PHP_EOL;
