<?php
/*
Zadanie 4
Napisz funkcję max2($n1, $n2).

Funkcja przyjmuje dwie liczby, a następnie zwraca większą z nich.
Następnie napisz funkcję max3($z1, $z2, $z3) zwracającą największą spośród trzech podanych liczb.
Funkcja max3 ma do tego celu używać funkcji max2.
*/


/**
 * Funkcja max2 zwraca większą z dwóch podanych liczb.
 * 
 * @param int $n1 Pierwsza liczba
 * @param int $n2 Druga liczba
 * @return int Większa z dwóch podanych liczb
 */
function max2($n1, $n2) {
    if ($n1 > $n2) {
        return $n1;
    } else {
        return $n2;
    }
}

/**
 * Funkcja max3 zwraca największą z trzech podanych liczb.
 * Wykorzystuje funkcję max2.
 * 
 * @param int $z1 Pierwsza liczba
 * @param int $z2 Druga liczba
 * @param int $z3 Trzecia liczba
 * @return int Największa z trzech podanych liczb
 */
function max3($z1, $z2, $z3) {
    return max2(max2($z1, $z2), $z3);
}

// Przykładowe użycie funkcji
echo max2(5, 10) . "<br>"; // Wypisze 10
echo max3(5, 10, 8); // Wypisze 10





/*
Funkcja max2 porównuje dwie podane liczby i zwraca większą z nich. Funkcja max3 wykorzystuje funkcję max2 do porównania trzech liczb - na początku wywołuje max2 z dwoma pierwszymi liczbami, a następnie wynik porównuje z trzecią liczbą za pomocą kolejnego wywołania funkcji max2. Wynik końcowy to największa z trzech podanych liczb.
*/

?>