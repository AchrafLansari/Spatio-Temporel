<?php



include 'globals.php';

$api_url = 'http://tr.wikipedia.org/w/api.php';
$username = 'bob';
$password = 'secret';

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

$page = $wiki->getPage('Liste_du_patrimoine_mondial_au_Maroc');
// check if the page exists or not
if ( $page->exists() ) die();

echo $page->getSectionOffsets();

//$wikiCode = $page->getSection('intro');



?>