<!DOCTYPE html>
<html>
	<head>
    <title>Wellcome to PHP</title>
	</head>
	<body>
    <h2>PHP Functin and Variable Scope</h2>
  <?php

     //global $person

     $person = "I am at outsid";
     function checkScop ($person) {
     	global $person;

     	//local
     	if (isset($person)) {
     		echo "insinde functoin : {$person} <br/>";
     	}
      	$person = "I am at insinde";
     }
        echo "1: {$person} <br/>";
        checkScop ($person);
        echo "2: {$person} <br/>"; 
  ?>
	</body>
</html>
