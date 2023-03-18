<?php
/* Zadanie 3
Napisz skrypt, który podaną przez użytkownika kwotę rozmieni na jak najmniejszą liczbę monet i banknotów o nominałach 1, 2, 5, 10 zł. Przykład:

188zł zostanie rozmienione na:
18 banknotów 10zł,
1 moneta 5zł,
1 moneta 2zł,
1 moneta 1zł.
Funkcja przyjmuje liczby całkowite, czyli podana kwota ma być w pełnych złotych.
Funkcja powinna zwracać tablicę, gdzie kluczem jest nominał monety a wartością jej ilość. */

function exchangeMoney($amount) {
  $denominations = [10, 5, 2, 1]; // dostępne nominały
  $result = []; // tablica wynikowa

  // iterujemy po dostępnych nominałach
  foreach ($denominations as $denomination) {
    $count = floor($amount / $denomination); // obliczamy ilość monet/banknotów danego nominału

    if ($count > 0) {
      $result[$denomination] = $count; // dodajemy wynik do tablicy
      $amount -= $count * $denomination; // odejmujemy wartość monet/banknotów od kwoty początkowej
    }
  }

  return $result; // zwracamy wynik
}



// przykładowe użycie funkcji i wypisanie wyniku na stronie
$amount = 333;
$result = exchangeMoney($amount);

echo "Kwota $amount zł zostanie rozmieniona na:<br>";
foreach ($result as $denomination => $count) {
  if ($denomination >= 5) {
    $type = "banknotów";
  } else {
    $type = "monet";
  }
  echo "$count $type $denomination zł<br>";
}

 

/*
Funkcja exchangeMoney przyjmuje jako argument kwotę w złotych, która ma być rozmieniona na jak najmniejszą liczbę monet i banknotów o nominałach 1, 2, 5 i 10 złotych. Następnie funkcja iteruje po dostępnych nominałach, poczynając od największych (10 złotych) aż do najmniejszych (1 złoty). Dla każdego nominału funkcja oblicza, ile monet/banknotów danego nominału jest potrzebnych, aby uzyskać jak najmniejszą liczbę monet i banknotów potrzebnych do rozmiany kwoty. Jeśli ilość monet/banknotów danego nominału jest większa od zera, to dodawana jest ona do tablicy wynikowej, a następnie wartość monet/banknotów jest odejmowana od kwoty początkowej. Na końcu funkcja zwraca tablicę wynikową, w której kluczami są nominały monet/banknotów, a wartościami - ilość monet/banknotów danego nominału.

Na przykład, jeśli użytkownik poda kwotę 188 złotych, to funkcja obliczy, że potrzebne są 18 banknotów 10 złotych, 1 moneta 5 złotych, 1 moneta 2 złote i 1 moneta 1 złotego, a następnie zwróci tablicę z tymi wartościami. Tablica ta zostanie następnie przetworzona przez pętlę foreach, która wypisze wynik na stronie w postaci:

yaml
Copy code
Kwota 188 zł zostanie rozmieniona na:
18 banknotów 10 zł
1 moneta 5 zł
1 moneta 2 zł
1 moneta 1 zł
Funkcja działa poprawnie dla kwot podanych w pełnych złotych. W przypadku podania kwoty z groszami, funkcja może zwrócić niepoprawny wynik.


*/


?>