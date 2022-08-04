<?php declare(strict_types = 1);

require "./src/FizzBuzz.php";
use Task\FizzBuzz;

$fb = new FizzBuzz();
$result = $fb->generateList(1,100);

echo implode('; ', $result);