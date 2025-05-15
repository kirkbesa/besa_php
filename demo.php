<?php 

// Check Odd/Even
$num = readline("Enter an number: ");
$result = "Even";
if ($num != 0) {
    $result = "Odd";
}
echo "The number is {$result}";

// Check Prime Number
function isPrimeNumber($number) {
    if ($number < 2) {
        return "{$number} is not prime\n";
    }

    if ($number == 2) {
        return "{$number} is prime\n";
    }

     if ($number % 2 == 0) {
        return "{$number} is not prime\n";
    }

    $sqrtNumber = sqrt($number);
    
    for ($i = 3; $i <= $sqrtNumber; $i += 2) {
        if ($number % $i == 0) {
            return "{$number} is not prime\n";
        }
    }
    return "{$number} is prime\n";
}

$userNumInput = readline("Enter a number: ");
if (!is_numeric($userNumInput)) {
    echo "Invalid Input";
    exit;
}

$userNumInput = (int)$userNumInput;
for ($ctr = 0; $ctr <= $userNumInput; $ctr++) {
    echo isPrimeNumber($ctr);
}

// Libraries
require __DIR__ . '/vendor/autoload.php';

use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;

$slugify = new Slugify();
echo $slugify->slugify("This is a new title\n");

$uuid = Uuid::uuid4();
echo $uuid->toString() . "\n";

$faker = Faker\Factory::create();
echo $faker->name() . "\n";
echo $faker->address() . "\n";
echo $faker->text() . "\n";
echo $faker->phoneNumber() . "\n";
echo $faker->address() . "\n";
