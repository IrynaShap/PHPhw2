<?php
function getStringInput(): string
{
	return trim(fgets(STDIN));
}

function getNumericInput(): int
{
	$number = getStringInput();
	if (!is_numeric($number)) {
		echo "Ви ввели не число!\n";
		exit;
	}
	return (int)$number;
}

echo "Як тебе звати?\n";
$user_name = getStringInput();
echo "Привіт, $user_name! Як твоє прізвище?\n";
$user_surname = getStringInput();
echo "Радий познайомитись з тобою $user_name $user_surname!\n";

echo "Введіть перше число:\n";
$first_number = getNumericInput();
echo "Введіть друге число:\n";
$second_number = getNumericInput();
echo "Введіть третє число:\n";
$third_number = getNumericInput();
$sum = $first_number + $second_number + $third_number;
echo "Сума чисел $first_number, $second_number, $third_number дорівнює " . $sum . "\n";
echo "Cереднє арифметичне чисел $first_number, $second_number, $third_number дорівнює " . (($sum) / 3) . "\n";

