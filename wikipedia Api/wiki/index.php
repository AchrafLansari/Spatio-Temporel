<?php



include 'globals.php';

$api_url = 'http://tr.wikipedia.org/w/api.php';
$username = 'bob';
$password = 'secret';

try
{
    $wiki = new Wikimate($api_url);
    
}
catch ( Exception $e )
{
    echo "<b>Wikimate error 2</b>: ".$e->getMessage();
}

$page = $wiki->getPage('Liste_du_patrimoine_mondial_au_Maroc');
var_dump($page);
// check if the page exists or not
if ( $page->exists() ) die();

echo $page->getSectionOffsets();

//$wikiCode = $page->getSection('intro');



?>