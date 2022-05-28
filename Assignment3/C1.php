<?php
$doc = new DOMDocument("1.0", "UTF-8");

$root = $doc->createElement("Movie_CD_Store");

$classical = $doc->createElement("Classical");
$mn = $doc->createElement("Movie_Name", "Devdas");
$classical->appendChild($mn);
$an = $doc->createElement("Actor_Name", "Shahrukh Khan");
$classical->appendChild($an);
$re = $doc->createElement("Release_Year", 1959);
$classical->appendChild($re);

$action = $doc->createElement("Action");
$mn = $doc->createElement("Movie_Name", "KGF");
$action->appendChild($mn);
$an = $doc->createElement("Actor_Name", "Yash");
$action->appendChild($an);
$re = $doc->createElement("Release_Year", 2019);
$action->appendChild($re);

$horror = $doc->createElement("Horror");
$mn = $doc->createElement("Movie_Name", "Creature 3D");
$horror->appendChild($mn);
$an = $doc->createElement("Actor_Name", "Neel Nitin");
$horror->appendChild($an);
$re = $doc->createElement("Release_Year", 2019);
$horror->appendChild($re);

$root->appendChild($classical);

$root->appendChild($action);

$root->appendChild($horror);

$doc->appendChild($root);

$doc->save("C1.xml");

echo '<a href="C1.xml">Click Here </a>';

?>