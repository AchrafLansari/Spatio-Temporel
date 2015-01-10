<?php

include_once 'includes/wikidrain.class.php';


$wiki = new wikidrain('wikidrain/1.0 (http://www.example.com/)');
$result = $wiki->Search('Liste_du_patrimoine_mondial_au_maroc',1);
$sections = $wiki->getSections('Liste_du_patrimoine_mondial_au_Maroc');
$results = $wiki->getText('Liste_du_patrimoine_mondial_au_Maroc', '2');

//$related = $wiki->getRelated('API');
//var_dump($related);


/*var_dump($result);
echo '<br>';
var_dump($sections);
echo '<br>';*/
var_dump($results);
echo '<br>';



