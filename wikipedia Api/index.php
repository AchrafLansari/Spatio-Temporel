<?php

/*include_once 'includes/wikidrain.class.php';


$wiki = new wikidrain('wikidrain/1.0 (http://www.example.com/)');
//$result = $wiki->Search('Liste_du_patrimoine_mondial_au_Maroc',1);
//$sections = $wiki->getSections('Liste_du_patrimoine_mondial_au_Maroc');
$results = $wiki->getText('Liste_du_patrimoine_mondial_au_Maroc', '2');

//$related = $wiki->getRelated('API');
//var_dump($related);


//var_dump($result);
echo '<br>';
//var_dump($sections);
echo '<br>';
var_dump($results);
*/

include 'globals.php';

$api_url = 'http://localhost/Spatio-temporel/wikipedia%20Api/api.php';
$username = 'bot';
$password = 'password';

try
{
    $wiki = new Wikimate($api_url);
    if ($wiki->login($username,$password))
        echo 'Success: user logged in.' ;
    else {
        $error = $wiki->getError();
        echo "<b>Wikimate error</b>: ".$error['login'];
    }
}
catch ( Exception $e )
{
    echo "<b>Wikimate error</b>: ".$e->getMessage();
}

/*$page = $wiki->getPage('Liste_du_patrimoine_mondial_au_Maroc');
// check if the page exists or not
if ( $page->exists() ) die();

//echo $page->getSectionOffsets();

//$wikiCode = $page->getSection('intro');
*/


?>