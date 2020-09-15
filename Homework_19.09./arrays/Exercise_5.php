<?php

// Exercise #5
/* Code an interactive, two-player game of Tic-Tac-Toe. 
You'll use a two-dimensional array of chars. 

(...a game already in progress)

	X   O
	O X X
	  X O
 
'O', choose your location (row, column): 0 1

	X O O
	O X X
	  X O
 
'X', choose your location (row, column): 2 0

	X O O
	O X X
	X X O

The game is a tie.
*/

$player1_sign = "";
$row = "";
$column = "";
$winner = false;
$turn = 1;

$board = [

    [" ", " ", " "],
    [" ", " ", " "],
    [" ", " ", " "],
];

// rendering game board
function displayBoard($board)
{
    echo "\n";
    echo " " . $board[0][0] . " | " . $board[0][1] . " | " . $board[0][2] .  "\n";
    echo "---+---+---\n";
    echo " " . $board[1][0] . " | " . $board[1][1] . " | " . $board[1][2] .  "\n";
    echo "---+---+---\n";
    echo " " . $board[2][0] . " | " . $board[2][1] . " | " . $board[2][2] .  "\n";
    echo "\n";
}

// Head of program
echo "\n====WELCOME TO TIC-TAC-TOE====\n";
echo "\nThis is your game board.\n";
displayBoard($board);
echo "\n--Gameplay mechanics--\n1. Before the start, both players choose desired sign: X or 0 (zero)";
echo "\n2. When asked, write row number from 1 - 3\n";
echo "3. Choose column number from 1 - 3\n";
echo "4. Press ENTER\n";
echo "5. The player who first will fill up a row, a line or a diagonal will win\n";
echo "\n-!Let's begin!-\n";

// Choosing signs for each player
while ($player1_sign != "X" || $player1_sign != "0") {

    $player1_sign = readline("\nChoose your sign (X or 0) and press ENTER:   ");
    echo "\n";
    $player2_sign = "";

    if ($player1_sign == "X") {
        $player2_sign = "0";

        echo "Player 1 chooses X\n";
        echo "Player 2 plays as 0\n";
        break;
    } elseif ($player1_sign == "0") {
        $player2_sign = "X";

        echo "Player 1 chooses 0\n";
        echo "Player 2 plays as X\n";
        break;
    } else {
        echo "Wrong sign! Choose X or 0 !\n";
    }
    echo "\n";
}
$active_player = $player1_sign;
// Entering the coordinates

while ($winner == false || $turn <= 10) {

    echo "\nTurn $turn";
    echo "\n*** Player with $active_player, choose your position ***";
    echo "\n";

    displayBoard($board);

    // Promts to enter the location of input sign.
    // Substracts -1 from logical input to correspondent to array indexes.
    echo "Enter the row: ";
    $row = readline() - 1;

    echo "Enter the column: ";
    $column = readline() - 1;

    // Determines, if the input of location is in range of array.
    // And places the sign in array.
    if ($row <= 3 || $column <= 3) {
        $board[$row][$column] = $active_player;
    } elseif ($row > 3 || $column > 3) {
        echo "\nWRONG POSITION!\nYou lost your move!\n";
    }

    // Check winner logic (messy, I know).
    if (
        // Check rows
        $board[0][0] == $active_player &&
        $board[0][1] == $active_player &&
        $board[0][2] == $active_player ||
        $board[1][0] == $active_player &&
        $board[1][1] == $active_player &&
        $board[1][2] == $active_player ||
        $board[2][0] == $active_player &&
        $board[2][1] == $active_player &&
        $board[2][2] == $active_player ||

        // Check columns
        $board[0][0] == $active_player &&
        $board[1][0] == $active_player &&
        $board[2][0] == $active_player ||
        $board[0][1] == $active_player &&
        $board[1][1] == $active_player &&
        $board[2][1] == $active_player ||
        $board[0][2] == $active_player &&
        $board[1][2] == $active_player &&
        $board[2][2] == $active_player ||

        // Check diagonals
        $board[0][0] == $active_player &&
        $board[1][1] == $active_player &&
        $board[2][2] == $active_player ||
        $board[0][2] == $active_player &&
        $board[1][1] == $active_player &&
        $board[2][0] == $active_player
    ) {
        //Determines the winner.
        $winner == $active_player;
        echo "\nCongratulations! The winner is Player with $active_player\n";
        displayBoard($board);
        $winner = true;
        break;
    } elseif ($turn == 9) {
        // Determins the tie.
        echo "\n";
        displayBoard($board);
        echo "\nIt's a tie!\n";
        break;
    } else {
        // If no winners or tie, count round.
        $turn++;
    }

    // Change turns (signs) after each round.
    if ($active_player == $player1_sign) {
        $active_player = $player2_sign;
        echo "\n";
    } elseif ($active_player == $player2_sign) {
        echo "\n";
        $active_player = $player1_sign;
    }
}
