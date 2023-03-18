<?php
/*
Zadanie 5
Napisz funkcję rockPaperScissors($player1, $player2), która przyjmuje dwa napisy i na ich podstawie zwraca informacje, kto wygrał.
Prawidłowe napisy przyjmowane przez funkcję to: paper, scissors, rock.

Funkcja ma zwracać jeden z czterech napisów:

Player 1 win
Player 2 win
Draw
Wrong input
*/

function rockPaperScissors($player1, $player2) {
    // Sprawdzamy, czy obaj gracze podali poprawne wartości
    if (!in_array($player1, array('rock', 'paper', 'scissors')) || !in_array($player2, array('rock', 'paper', 'scissors'))) {
        return 'Wrong input'; // Jeśli co najmniej jeden z graczy podał błędną wartość, zwracamy odpowiedni komunikat
    }

    // Sprawdzamy, kto wygrał
    if ($player1 === $player2) {
        return 'Draw'; // Remis
    } elseif (($player1 === 'rock' && $player2 === 'scissors') || ($player1 === 'scissors' && $player2 === 'paper') || ($player1 === 'paper' && $player2 === 'rock')) {
        return 'Player 1 win'; // Gracz 1 wygrał
    } else {
        return 'Player 2 win'; // Gracz 2 wygrał
    }
}

// Testujemy funkcję
$winner1 = rockPaperScissors('paper','rock');
echo($winner1);  // Player 1 win

$winner2 = rockPaperScissors('paper','paper');
echo($winner2);  // Draw

$winner3 = rockPaperScissors('paper','dummy');
echo($winner3);  // Wrong input



/* Funkcja rockPaperScissors przyjmuje dwa argumenty $player1 i $player2, które to są nazwami ruchów graczy. Następnie w pierwszej linii funkcji sprawdzamy, czy obaj gracze podali poprawne wartości (czyli rock, paper lub scissors), a jeśli któremuś z graczy nie udało się tego zrobić, zwracamy odpowiedni komunikat.

Następnie porównujemy ruchy graczy i określamy zwycięzcę. Jeśli obaj gracze wybrali ten sam ruch, zwracamy "Draw" (czyli remis). W przeciwnym wypadku, jeśli gracz 1 wygrał, zwracamy "Player 1 win", a jeśli gracz 2 wygrał, zwracamy "Player 2 win".

Na końcu kodu testujemy funkcję, wywołując ją trzy razy z różnymi argumentami i wypisując wyniki na stronie. */




?>