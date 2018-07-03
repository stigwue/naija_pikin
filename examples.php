<?php

require_once('naija_pikin.php');

$np = new NaijaPikin('dictionary.json');

echo 'Examples <br>';
echo '<br>';

echo 'Random noun: ' . $np->getNoun(true) . '<br>';
echo 'Specific noun (John): ' . $np->getNoun(false, 'John') . '<br>';
echo '<br>';

echo 'Random adjective: ' . $np->getAdjective(true) . '<br>';
echo 'Random adjective, specific letter (X): ' . $np->getAdjective(true, 'x') . '<br>';
echo 'Specific adjective (Xanthic): ' . $np->getAdjective(false, '', 'Xanthic') . '<br>';

echo '<br>';
echo 'Random name (will match first letters): ' . $np->getName(true) . '<br>';

echo '<br>';
echo 'It\'ll be on ' . $np->getAdjective(true, 'm') . ' Monday. ' . $np->getName(true);
echo ' would not wait until ' . $np->getAdjective(true, 't') . ' Thursday.<br>';


?>
