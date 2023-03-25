<?php
$name = $argv[1];
$birth_year = $argv[2];

$current_year = date("Y");
$age = $current_year - $birth_year;

echo "Your name is $name, and your age is $age years old\n";

if ($age >= 18) {
    echo "You are a voter\n";
}

if ($age >= 60) {
    echo "You are a senior citizen\n";
}
?>