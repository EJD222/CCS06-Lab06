<?php
//File name: hello.php

function greet() {
    $message = "Hello ";
    $message .= "World! ";

    return $message;
}
echo greet() . "The date today is " . date("Y-m-d") . ".";
?>