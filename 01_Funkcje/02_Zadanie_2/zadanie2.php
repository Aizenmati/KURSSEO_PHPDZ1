<?php
/*
Zadanie 2 - rozwiązywane z wykładowcą
Napisz funkcję perfectNumber($n), która przyjmuje liczbę całkowitą. Funkcja zwraca następujące wartości:

true, gdy liczba jest doskonała,
false, gdy liczba nie jest doskonała.
Liczba doskonała jest równa sumie swoich dzielników. Przykładami takich liczb są:

6 = 1 + 2 + 3
28 = 1 + 2 + 4 + 7 + 14
*/

function perfectNumber($n) {
  // zerowanie sumy dzielników
  $sum = 0;

  // sprawdzanie dzielników liczby
  for ($i = 1; $i < $n; $i++) {
    if ($n % $i == 0) {
      $sum += $i; // dodanie znalezionego dzielnika do sumy
    }
  }

  // porównanie sumy dzielników z liczbą i zwrócenie odpowiedniej wartości
  if ($sum == $n) {
    return true; // liczba jest doskonała
  } else {
    return false; // liczba nie jest doskonała
  }
}

$n = 28;
$result = perfectNumber($n);
if ($result) {
  echo "$n jest liczbą doskonałą";
} else {
  echo "$n nie jest liczbą doskonałą";
}

/*
Funkcja ta działa w następujący sposób:

Zeruje sumę dzielników na początku.
Następnie funkcja sprawdza wszystkie liczby mniejsze od podanej liczby $n, aby znaleźć wszystkie jej dzielniki.
Jeśli liczba całkowita $i jest dzielnikiem liczby $n, dodaj ją do sumy dzielników.
Po znalezieniu wszystkich dzielników, funkcja porównuje sumę dzielników z podaną liczbą $n.
Jeśli suma jest równa $n, funkcja zwraca true, co oznacza, że liczba jest doskonała.
Jeśli suma nie jest równa $n, funkcja zwraca false, co oznacza, że liczba nie jest doskonała.
*/

?>