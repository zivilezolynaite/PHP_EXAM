/*
6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, sudaugintų
tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad
terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
*/

//  php index.php  3 5 -->> Jūsų skaičius: 225

<!DOCTYPE html>
<html>
<body>

<?php

if (isset($argv[1]) === false || is_numeric($argv[1]) === false) {
    echo "Neteisingai įvestas pirmas skaičius" . PHP_EOL;
    exit(1);
}

if (isset($argv[2]) === false || is_numeric($argv[2]) === false) {
    echo "Neteisingai įvestas antras skaičius" . PHP_EOL;
    exit(1);
}
echo "Jūsų rezultatas yra: " . round((($argv[1] * $argv[2]) ** 2), 2);

?>

</body>
</html>