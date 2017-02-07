<?php
print "\n\n ********** Converting to Boolean ***************\n\n";

print "\n When converting an empty to boolean is false";
var_dump((bool) "");        // bool(false)  
print "\n ------------------------------------------------------- ";

print "\n When converting an non empty to boolean is true\n";
var_dump((bool) "Hello");        // bool(false)  
print "\n ------------------------------------------------------- ";

var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)

var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

