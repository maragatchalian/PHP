<?php

//Double Quotes
$who = 'Kilroy';
$where = 'here';
echo "$who was $where" ."<br>";

$n = 12;
echo  "You are the {$n}th person" ."<br>" ."<br>"; 

//Here Documents
$clerihew = <<< EndOfQuote
Sir Humphrey Davy
Abominated gravy.
He lived in the odium
Of having discovered sodium.
EndOfQuote;
echo $clerihew ."<br>" ."<br>";

//Printing Strings
#1 Echo
echo "Hello, World!" ."<br>";
echo ("Hello, World!" ."<br>");
/*Because echo is a true fuction,
we cannot us it as part of a larger expression*/

#2 Print()
if (print("test" ."<br>")) {
print("It worked!" ."<br>");
}

#3 Printf
printf('Bond. James Bond. %03d.', 7);

