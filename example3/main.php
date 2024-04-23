#!/usr/bin/env php
<?php
// echo "Enter your name: ";


// // Read user input from the command line
// $name=trim(fgets(STDIN));

// //Validate the input

// if(empty($name)){
//     echo "Error: You must enter a name.\n";
//     exit(1);
// }

// echo "Hello {$name} \n";


$fname=readline("First Name : ");
$lname=readline("Last Name : ");
echo "Hello {$fname} {$lname}\n";
