<?php
include 'globals.php';
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
$api_url = 'http://fr.wikipedia.org/w/api.php';
$wiki = new Wikimate($api_url);
$texte = file_get_contents("Data/pays.txt");
    $tab_mots = tokenization($texte , "\n",0,1); 
    $rand_keys = array();
    $band_keys1 = array();
    $rand_afficher = array();
    $band_keys1 =  $tab_mots[mt_rand (0, count($tab_mots)-1)];
    $rand_afficher = substr(rtrim($band_keys1) , -1);
    
        if($rand_afficher =='e'){
        $pays_test = substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)));
        if(($pays_test =='Mexique' ) 
                or ($pays_test=='Combodge' )
                or ($pays_test=='Mozambique' )
                or  ($pays_test=='Zaïre Zimbabwe') 
                
                        
              )  
        {
            $paye =  "au_"  .(substr($band_keys1 ,0,strlen($band_keys1))) ;
        }
         elseif ($pays_test =='Guadeloupe')
               $paye = "en_" . 'guadalupe';
         
        else 
           $paye = "en_"  .substr($band_keys1 , 0,strlen($band_keys1));
      
        }
        elseif ($pays_test =='Iles_Heard_et_McDonald')
               $paye = "au_" . 'iles heart et mcdonald';
        elseif ($pays_test =='Tokélaou')
               $paye = "au_" . 'Tokélou';
        elseif ($pays_test =='oman')
               $paye = "au_" . 'omar';
        elseif ($pays_test =='sainte-Lucie')
               $paye = "en_" . 'saint-lucie';
        elseif ($pays_test =='Ouganda')
               $paye = "au_" . 'ouanda';
        elseif ($pays_test =='Antigua-et-Barbuda')
               $paye = "au_" . 'Antiqua-et-Barbuda';        
        elseif ($pays_test =='Somalie')
               $paye = "en_" . 'somalia';
        elseif ($pays_test =='Mariannes_du_Nord')
               $paye = "au_" . 'Marianne_du_Nord';
        elseif ($pays_test =='Cambodge')
               $paye = "en_" . 'cambridge';
        
        else {
        if( (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Cuba')){
                $paye = "�_"  .substr($band_keys1 ,0,strlen($band_keys1));
            }
        else if( (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Kiribati') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Ile Christmas')  ){
                 $paye = "aux_"  .substr($band_keys1 ,0,strlen($band_keys1));
                }
        else {
                 $paye = "au_"  .substr($band_keys1 ,0,strlen($band_keys1));
             }
             } 
             $pays = str_replace (" ", "_", $paye);
            $url_final = 'Liste_du_patrimoine_mondial_'.$pays;
            $url_final = rtrim($url_final);            
            var_dump($url_final);echo'<br>';            
            $page = $wiki->getPage($url_final);
    if (!$page->exists() ) {
	echo "Page doesn't exist.\n";
       } 
    else {
        $section = utf8_decode($page->getSection('Patrimoine mondial'));
        $tab = tokenization($section,"{}",0,1);        
        for($i=1;$i<count($tab);$i++){
        $coord = explode("name=", $tab[$i]);            
            if (isset($coord[1])) { 
               echo $coord[1].'<br>';
            }
            $lien = explode("http", $tab[$i]);
            if (isset($lien[1])) { 
                $lien_final = explode("]",$lien[1]);
                echo '<a href="http'.$lien_final[0].'" target="_blank"> --></a> <br>'; 
            }
        }
}




