<?php


$names;
echo "Wie zit er in de klas?  " . "\n";
$names = readline();
$namesArray = explode(' ', $names);
echo "De studenten in de klas zijn:\n";
foreach ($namesArray as $name)
{
  echo $name . "\n";
}


 ?>
