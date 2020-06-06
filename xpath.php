<?php
$xml= <<<XML
<?xml version="1.0" ?>
<!DOCTYPE izdanja[
    <!ATTLIST file
    id ID #IMPLIED>
]>
<izdanja>
    <film id="1">
    <naslov>Dar Knight Returns</naslov>
    <reditelj>c. Nolan</reditelj>
    </film>
    <film id="2">
    <naslov>Bumblebee</naslov>
    <reditelj>Travis Knight</reditelj>
    </film>
</izdanja>
XML;

$xml = new SimpleXMLElement($xml);
$filmovi = $xml->xpath("/izdanja/film");
foreach($filmovi as $f){
    echo $f->naslov . "<br>";
    echo $f->reditelj . "<br>";
}



