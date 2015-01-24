<?php
include 'globals.php';
$rand_keys = array();
$band_keys1 = array();
$rand_afficher = array();
$api_url = 'http://fr.wikipedia.org/w/api.php';
$texte = file_get_contents("Data/pays.txt");
$pays_test = '';

function tokenization ($text,$delimiteurs,$nb_carac,$state)
    {
        $arrayElements = array();
        global $tab_mots_vides;
        $words = strtok($text,$delimiteurs);          
        while ($words !== false){
            if($state == 0){
                $words = trim(str_replace('&nbsp','',$words));
                $cpt = strlen($words);
            if($cpt >= $nb_carac){
            if (!array_key_exists($words,array_flip($tab_mots_vides)))
                {
                $arrayElements[]=$words;
                }
            }
            }
            else{
                $arrayElements[]=$words;
                }
                $words = strtok($delimiteurs);
        }
        return $arrayElements;
        }

$wiki = new Wikimate($api_url);

    $tab_mots = tokenization($texte , "\n",0,1);
    
    
    $band_keys1 =  $tab_mots[mt_rand (0, count($tab_mots)-1)];
    //$band_keys1 =  $tab_mots[3];
    $rand_afficher = substr(rtrim($band_keys1) , -1);
    $pays_test = substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)));
   // var_dump($pays_test);echo'<br>';
    
    
        
    
        if($rand_afficher =='e'){
                               
                if(($pays_test=='Burkina Faso') or ($pays_test=='Martinique' ) or ($pays_test=='Mozambique' ) or ($pays_test=='Zimbabwe') or ($pays_test =='Nig�ria') or ($pays_test =='Japon') or (($pays_test =='S�n�gal')) or ($pays_test =='Mali')  or ($pays_test =='Bangladesh') or ($pays_test =='Liban') or  ($pays_test =='Suriname'))  
                {
                    $paye =  "au_"  .(substr($band_keys1 ,0,strlen($band_keys1))) ;
                }else {
                    $paye =  "en_"  .(substr($band_keys1 ,0,strlen($band_keys1))) ;
                }
                
        }
        if ($rand_afficher  != 'e' ){
                   
                   $paye = "au_"  .substr($band_keys1 , 0,strlen($band_keys1));
        }
        if( ($pays_test=='Cuba') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Singapour')|| (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Madagascar')|| (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Oman') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Saint-Christophe-et-Ni�v�s') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Antigua-et-Barbuda') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Monaco') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Bahre�n') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1))) =='Chypre')){
                        $paye = "�_"  .substr($band_keys1 ,0,strlen($band_keys1));
        }
        
        
        $pos = strpos(substr($band_keys1 ,0,strlen($band_keys1)),' ');
        $pos2 = strpos(substr($band_keys1 ,0,strlen($band_keys1)),'-');
         
        if($pos != false || $pos2 != false  ||  $pays_test == 'Maldives' || $pays_test == 'Seychelles' || $pays_test == 'Kiribati' || $pays_test == 'Tonga' ) {

         $paye = "aux_"  .(substr($band_keys1 ,0,strlen($band_keys1)));
        }
        
        if( $pays_test == 'Afrique du Sud'){
            $paye = "en_".$pays_test;
        }            
         

             $pays = str_replace (" ", "_", $paye);
            $url_final = 'Liste_du_patrimoine_mondial_'.$pays;
            $url_final = rtrim($url_final);            
            var_dump($url_final);
			echo'<br>';            
            $page = $wiki->getPage($url_final);
    if($url_final = '') {
      
       echo 'Error';
    }   
    else {
    if (!$page->exists() ) {
	echo "Page doesn't exist.\n";
       } 
    else {
        
        $section = utf8_decode($page->getSection('Patrimoine mondial'));
        //var_dump($page->getSection('Patrimoine mondial'));
        if($section == null){
        $section = utf8_decode($page->getSection('Listes'));
        }
        
        $tab = tokenization($section,"{}",0,1);        
        for($i=1;$i<count($tab);$i++){
        $coord = explode("name=", $tab[$i]);            
            if (isset($coord[1])) { 
			
               echo "<h3> <img src='img/fleche.png' alt='suivant' height='35' width='42'>" . $coord[1]. "</h3>";
            }
            $lien = explode("http", $tab[$i]);
            if (isset($lien[1])) { 
                $lien_final = explode("]",$lien[1]);
               // echo '<a href="http'.$lien_final[0].'" target="_blank"> <img src="img/fleche.png" alt="suivant" height="42" width="42"></a>'; 
            }
        }
}
         
           /* else if( (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Kiribati') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Ile Christmas')  ){
                     $paye = "aux_"  .substr($band_keys1 ,0,strlen($band_keys1));
                    }
            else {
                     $paye = "au_"  .substr($band_keys1 ,0,strlen($band_keys1));
                 }
            * 
            */

    }


    

