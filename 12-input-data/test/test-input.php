<?php

require_once "12-input-data/helper/input.php";

$name = input("Name");
echo "Hello $name!" . PHP_EOL;

$belajar = input("Belajar");
echo $belajar . PHP_EOL;