<?php
/*
Zadanie 1 - rozwiązywane z wykładowcą
Napisz funkcję rentCost($days), która pobiera liczbę dni jako argument, a następnie wylicza koszt wynajmu pokoju według podanego wzoru:

wynajem trwa jeden dzień, koszt pokoju 200 zł/dzień,
wynajem trwa od dwóch do trzech dni, koszt pokoju 180 zł/dzień,
wynajem trwa od czterech do siedmiu dni, koszt pokoju 160 zł/dzień,
wynajem trwa osiem lub więcej dni, koszt pokoju 150 zł/dzień.
Dodatkowo za każdy pełny tydzień (7 dni) przysługuje 50 zł zniżki.
Funkcja ma zwracać obliczony koszt.

Przykład:

echo rentCost(8);   //1150.00
echo rentCost(3);   //540.00
echo rentCost(15);  //2150.00
*/

function dodawanie($a, $b){
    $c = $a + $b;
    return $c;
}

$zmienna = dodawanie(5, 4);
echo $zmienna . "<br>";


function rentCost($days) {
  // zerowanie kosztu początkowego
  $cost = 0;
  
  // ustawienie kosztu pokoju zgodnie z liczbą dni
  if ($days == 1) {
    $cost = 200;
  } elseif ($days >= 2 && $days <= 3) {
    $cost = 180 * $days;
  } elseif ($days >= 4 && $days <= 7) {
    $cost = 160 * $days;
  } elseif ($days >= 8) {
    $cost = 150 * $days;
  }
  else {
    $cost = 0;
  }
  
  // obliczenie ilości pełnych tygodni i zniżki za każdy z nich
  $discount = floor($days / 7) * 50;
  // drugie rozwiązanie:  $discount = ( $days - ( $days % 7 ) ) / 7;  w

  // odjęcie zniżki od końcowego kosztu
  $cost -= $discount;
  
  // zwrócenie końcowego kosztu
  return $cost;
}

$days = 0;
$cost = rentCost($days);
echo "Koszt wynajmu pokoju na $days dni: $cost zł" . "<br>";

//wyświetlenie bez zmiennych
echo "Koszt wynajmu pokoju na $days dni: $cost zł" . rentcost(8) . "<br>";  // 1150.00


/* inny sposob:
function rentCost($days) {
  $costPerDay = 0;
  
  if ($days == 1) {
    $costPerDay = 200;
  } elseif ($days >= 2 && $days <= 3) {
    $costPerDay = 180;
  } elseif ($days >= 4 && $days <= 7) {
    $costPerDay = 160;
  } elseif ($days >= 8) {
    $costPerDay = 150;
  }
  
  $weeks = floor($days / 7);
  $discount = $weeks * 50;
  
  $cost = $days * $costPerDay - $discount;
  
  return number_format($cost, 2);
  */

/*
Pierwszy komentarz informuje, że zmienna $cost zostaje na początku ustawiona na 0, co oznacza, że początkowo koszt wynajmu jest równy zero.
Drugi komentarz wyjaśnia, że następnie funkcja sprawdza, na jak długo został wynajęty pokój i ustawia odpowiednią wartość kosztu na podstawie podanych kryteriów.
Trzeci komentarz opisuje, że funkcja oblicza ilość pełnych tygodni, które przypada na wynajem, a następnie oblicza zniżkę za każdy pełny tydzień, co wynosi 50 zł.
Czwarty komentarz informuje, że na końcu funkcja odejmuje zniżkę od końcowego kosztu wynajmu pokoju.
Piąty komentarz opisuje, że funkcja zwraca końcowy koszt wynajmu pokoju, który został wyliczony przez funkcję.
*/
?>