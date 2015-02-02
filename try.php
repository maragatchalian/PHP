<html>
<head>
<title> Chapter 4 Examples </title>
</head>
<body>
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
printf('Bond. James Bond. %03d.', 7 ."<br>");

//print() and vardump()
$a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
print_r($a);


//strlen() function

$string = 'Hello, world';
$length = strlen($string); 

echo "$length" . "<br>"; //prints the lenth of the string

// $str3 is "Programming PHP"


$title = "      Programming PHP    \n";
$str1 = ltrim($title); 
$str2 = rtrim($title);
$str3 = trim($title);


echo ("$str1, $str2, $$tr3" ."<br>" ."<br>" );

//Changing Strings
echo  ("Changing Case" ."<br>" ."<br>");
$string1 = "FRED flintstone";
$string2 = "barney rubble";
print(strtolower($string1 ."<br>"));
print(strtoupper($string1 ."<br>"));
print(ucfirst($string2 ."<br>"));
print(ucwords($string2 ."<br>"));


?> 
</body>
</html>
