<?php

include_once 'includes/wikidrain.class.php';


$wiki = new wikidrain('wikidrain/1.0 (http://www.example.com/)');
$result = $wiki->Search('Liste_du_patrimoine_mondial_en_indonesie',1);
$sections = $wiki->getSections('Liste_du_patrimoine_mondial_en_Indonesie');
//$result = $wiki->getText('API', '0');

//$related = $wiki->getRelated('API');
//var_dump($related);


var_dump($result);
echo '<br>';
var_dump($sections);
echo '<br>';




