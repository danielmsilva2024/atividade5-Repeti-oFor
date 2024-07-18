<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
?>

<?php 
$num=(float)readline("Digite um número positivo:");
for ($i = 0; $i <= $num; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
?>

<?php
$word = readline("Insira uma palavra: ");
for ($i = 0; $i < strlen($word); $i++) {
    echo $word[$i] . "\n";
}
?>

<?php
echo "Insira uma palavra: ";
$word = trim(fgets(STDIN));
for ($i = 0; $i < strlen($word); $i++) {
    echo $word[$i] . "\n";
}
?>

<?php
echo "Insira um número inteiro positivo: ";
$num = (int) trim(fgets(STDIN));
$soma = 0;
for ($i = 1; $i <= $num; $i++) {
    $soma += $i;
}
echo "A soma dos números entre 1 e $num é $soma.\n";
?>

<?php
echo "Insira um número inteiro: ";
$num = (int) trim(fgets(STDIN));
$isPrimo = true;
if ($num <= 1) {
    $isPrimo = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrimo = false;
            break;
        }
    }
}
echo $isPrimo ? "O número $num é primo.\n" : "O número $num não é primo.\n";
?>

<?php
echo "Insira uma sequência de números inteiros (separe-os com espaços): ";
$nums = explode(' ', trim(fgets(STDIN)));
$max = $nums[0];
foreach ($nums as $num) {
    if ($num > $max) {
        $max = $num;
    }
}
echo "O maior número inserido é $max.\n";
?>

<?php
for ($i = 5; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "\n";
    }
    echo "\n";
}
?>

<?php
echo "Insira um número inteiro positivo: ";
$num = (int) trim(fgets(STDIN));
echo "Os divisores de $num são: ";
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        echo "$i ";
    }
}
echo "\n";
?>

<?php
echo "Os números primos entre 1 e 100 são: ";
for ($i = 2; $i <= 100; $i++) {
    $isPrimo = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $isPrimo = false;
            break;
        }
    }
    if ($isPrimo) {
        echo "$i ";
    }
}
echo "\n";
?>

<?php
$soma = 0;
for ($i = 2; $i <= 100; $i += 2) {
    $soma += $i;
}
echo "A soma dos números pares entre 1 e 100 é $soma.\n";
?>

