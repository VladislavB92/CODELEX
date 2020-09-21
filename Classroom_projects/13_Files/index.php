<?php

/* Each class is made in a separate file.
Such file contains only a class. 
After class declaration nothing is written. 

"include" - throws warning, if file is not existant.
"require" - throws error, if file is not existant.

/app/Person.php <- absolute address
app/Preson.php <- relative address

"use' - must be included when there are several
same naming classes with different namespace.
*/

// Abstract class for spices
// Inheritace!
// 2, 3 classes of spices
// Namespaces
// Index.php

require_once "src/Spices/Spice.php";
require_once "src/Spices/Paprika/Paprika.php";
require_once "src/Spices/Salt/Salt.php";
require_once "src/Spices/SpicesCollection.php";

use src\Spices\Paprika;
use src\Spices\Salt;
use src\Spices\SpicesCollection;

$spices = new SpicesCollection();
$spices->add(new Salt("salt", "salty", "blue"));
$spices->add(new Paprika("paprika", "sweet", "red", "mild"));

foreach ($spices->all() as $spice)
{
    echo $spice->getName() . " has a " . $spice->getTaste() . 
    " taste, is the color of " . $spice->getColor() . 
    "." . PHP_EOL;
} 