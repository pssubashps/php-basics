<?php

/**
 * A program to do basic math oprations
 * 
 * exe : math.php add|mul|sub|div 1 2
 */
$op = 'add';
$a = $argv[2];
$b = $argv[3];



print "\n First Number is $a";
print "\n Second number is $b\n";

if ($op == 'add') {
    $c = $a + $b;
    print "\n Sum of $a & $b = $c\n";
}

if ($op == 'mul') {
    $c = $a * $b;
    print "\n Multiplication of $a & $b = $c\n";
}
