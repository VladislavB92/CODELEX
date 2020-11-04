<?php

declare(strict_types=1);

class PinManager
{
    private string $correctPin = "3399";

    private function getCorrectPin(): string
    {
        return $this->correctPin;
    }

    public function checkPin(string $enteredPin): string
    {
        if ($enteredPin === $this->getCorrectPin()) {
            return "UNLOCKED";
        } else {
            return "LOCKED";
        }
    }

    public function fillPin(string $pressedButton): string
    {
        if (isset($pressedButton) && strlen($_SESSION["pincode"] ?? "") < 4) {
            if ($_SESSION["pincode"] !== "") {
                $_SESSION["pincode"] .= "";
            }

            $_SESSION["pincode"] .= $pressedButton;
            return $_SESSION["pincode"];
        } else {
            $_SESSION["pincode"] = "";
            return $_SESSION["pincode"];
        }
    }
}
