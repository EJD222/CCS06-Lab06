<?php
//File name: hello.php

function greet() {
    $message = "Hello ";
    $message .= "World! ";

    return $message;
}
echo greet();
echo "The date today is " . date("F j, Y") . ".";   