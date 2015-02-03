<html>
<head>
<title> Chapter 5 Examples </title>
</head>
<body>
<?php
//Defining an Array
#This Example will print "Array"
$addresses[0] = "m.gatchalian@klab.com";
echo $addresses ."<br>" ."<br>";

//Initializing an Array
#Indexed Array beggining at 0
$addresses[0] = "spam@cyberpromo.net";
$addresses[1] = "abuse@example.com";
$addresses[2] = "root@example.com";

//Associative Array
$price['gasket'] = 15.29;
$price['wheel'] = 75.25;
$price['tire'] = 50.00;

//Easier way to initialize an array
#Indexed array using the array() construct.
$addresses = array("spam@cyberpromo.net", "abuse@example.com", "root@example.com");

#Associative array using the array() construct
#use the => symbol to separate indices (keys)from values
$price = array(
'gasket' => 15.29,
'wheel' => 75.25,
'tire' => 50.00
);




?> 
</body>
</html> 
