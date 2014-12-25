<?php

include 'globals.php';

$api_url = 'http://localhost/Spatio-temporel/wikipedia%20Api/api.php';


$wiki = new Wikimate($api_url);
#$wiki->setDebugMode(TRUE);


echo "Fetching 'Sausages'...\n";
$page = $wiki->getPage('Maroc');

// check if the page exists or not
if (!$page->exists() ) {
	echo "'Sausages' doesn't exist.\n";

} else {
	// get the page title
	echo "Title: ".$page->getTitle()."\n";
	// get the number of sections on the page
	echo "Number of sections: ".$page->getNumSections()."\n";
	// get an array of where each section starts and its length
	echo "Section offsets:".print_r($page->getSectionOffsets(), true)."\n";
        
        echo "<br>".$page->getSection('intro');

}
