<?php
// Создаем анонимную функцию для проверки числа на простоту
$isPrime = function($num) {
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
};

// Пример использования анонимной функции
$num = 11;
if ($isPrime($num)) {
    echo $num . " is a prime number.";
} else {
    echo $num . " is not a prime number.";
}

// Output: 11 is a prime number.
?>