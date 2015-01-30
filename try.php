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
echo $clerihew;

?> 
