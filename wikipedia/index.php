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
    $rand_afficher = substr(rtrim($band_keys1) , -1);
    $pays_test = substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)));
    if($rand_afficher =='e'){
        if( ($pays_test=='Costa_Rica') or ($pays_test=='Royaume-Uni') or ($pays_test=='Sri_Lanka') or  ($pays_test == 'Cap-Vert') or ($pays_test=='Cambodge') or  ($pays_test=='Burkina Faso') or ($pays_test=='Zimbabwe') or ($pays_test=='Martinique' ) or ($pays_test=='Mozambique' ) or ($pays_test=='Zimbabwe') or ($pays_test =='Nig�ria') or ($pays_test =='Japon') or (($pays_test =='S�n�gal')) or ($pays_test =='Mali')  or ($pays_test =='Bangladesh') or ($pays_test =='Liban') or  ($pays_test =='Suriname')or  ($pays_test =='Mexique'))  
            {
              $paye =  "au_"  .(substr($band_keys1 ,0,strlen($band_keys1))) ;
                }
        else {
                    
            $paye =  "en_"  .(substr($band_keys1 ,0,strlen($band_keys1))) ;
        }
                
        }
        if ($rand_afficher  != 'e'  ){
                   
                   $paye = "au_"  .substr($band_keys1 , 0,strlen($band_keys1));
        }
        if(  ($pays_test=='Malte') || ($pays_test=='Cuba') || ($pays_test=='Saint-Marin') || ($pays_test=='Antigua-et-Barbuda') || ($pays_test=='Sainte-Lucie') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Singapour')|| (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Madagascar')|| (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Oman') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Saint-Christophe-et-Ni�v�s') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Antigua-et-Barbuda') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Monaco') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Bahre�n') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1))) =='Chypre')){
                        $paye = "à_"  .substr($band_keys1 ,0,strlen($band_keys1));
        }
         
        if(($pays_test=='Uruguay') || ($pays_test=='Angola') || ($pays_test=='Afghanistan') || ($pays_test=='Iran') || ($pays_test=='Ouganda')) {
             $paye =  "en_"  .(substr($band_keys1 ,0,strlen($band_keys1))) ; 
        }
        
        $pos = strpos(substr($band_keys1 ,0,strlen($band_keys1)),' ');
        $pos2 = strpos(substr($band_keys1 ,0,strlen($band_keys1)),'-');
         
        if($pos != false || $pos2 != false  ||  $pays_test == 'Maldives' || $pays_test == 'Arabie_saoudite' || $pays_test == 'Comores'   || $pays_test == 'Seychelles' || $pays_test == 'Kiribati' || $pays_test == 'Tonga' || $pays_test == 'Philippines' ) {

         $paye = "aux_"  .(substr($band_keys1 ,0,strlen($band_keys1)));
        }
        
        if( $pays_test == 'Afrique du Sud'){
            $paye = "en_".$pays_test;
        }            

             $pays = str_replace (" ", "_", $paye);
            $url_final = 'Liste_du_patrimoine_mondial_'.$pays;
            $url_final = rtrim($url_final);            
            $paystable = explode('_' ,$pays );
            for($i=1 ; $i< count($paystable) ; $i++)
            {
              $payepropre = $paystable[$i]. '' ;
            }
	     echo "<h4>Liste du patrimoine mondial :"  ."<div id = 'noir'>" .  $pays_test . "</div>" .  '</h4><br>';            
            $page = $wiki->getPage($url_final);

        if($url_final == '') {

           echo 'Error';
        }   
        else {
        if (!$page->exists() ) {
            echo "Page doesn't exist.\n";
           } 
        else {
            $tab = $page->getAllSections();

            if($tab[0]!=''){
                $section = utf8_decode($page->getSection('Patrimoine mondial'));
                if($section == ''){
                    $section = utf8_decode($page->getSection('Listes'));
         }
        
        $tab = tokenization($section,"{}",0,1);        
        for($i=1;$i<count($tab);$i++){
        $coord = explode("name=", $tab[$i]);            
            if (isset($coord[1])) { 
			
               echo '<div style="height: 40px; witdh:500px;text-decoration:none; "> <h3> '. "<a  class='lien_patrimoine' style='text-decoration:none; cursor:pointer;'>" . utf8_encode($coord[1]) .  "</a></h3>" . "<br>";
            }
            $lien = explode("http", $tab[$i]);
            if (isset($lien[1])) { 
                $lien_final = explode("]",$lien[1]);
               echo '<a href="http'.$lien_final[0].'" target="_blank"> <img src="icones/fleche.jpg" alt="suivant" style="float: right;cursor:  pointer;" height="50" width="50" ></a>'; 
                
            }
        }
        
        
    }
  }
}?>
<script> $(".lien_patrimoine").click(function () {
            var text = $(this).text();
            $('#s').val(text);
            var dataString = 'q='+$('#s').val()+'';
       for(i=0;i<dataString.length;i++){
           dataString = dataString.replace(" ","+");
       }
             $.ajax({
                        url: "../europeana/requete/simple.php",
                        type: "POST",
                        dataType: 'json',
                        data: { query : $('#s').val(),
                                rows : 24
                              },
                        success: function(data)          //on recieve of reply
                        {   
                           //console.log('Response received : '+data["completeness"]);
                           //setAllMap(null);
                           $('.bubblingG').css('display','none');
                            var message;
                            var lng,lat;  
                            var textimage;
                           data.forEach(function(entry) {
                                message = ""+i;
                                i++;
                                $('#output').append(entry["completeness"]+"==>"+entry["image"]+"<br>");     //Set output element html
                                 lat = entry['latitude'];
                                 lng = entry['longitude'];
                                 if(entry["image"]!="undefined") {
                                  textimage +=  '<img class="img_europena" src="'+ entry["image"] +'" alt="image europeana" height="150" width="150">  <img src="icones/telecharger.png" alt="telecharger" title="telecharger" height="32" width="32"/><br> ';
                                    }
                               });
                                
                                    var contentString = '<div id="content">'+
                                    '<div id="siteNotice">'+
                                    '</div>'+
                                    '<h1 id="firstHeading" class="firstHeading">Europeana search</h1> <br><br>'+
                                    '<div id="bodyContent" style="color:#000000;">'+                                   
                                    textimage +    
                                    '(last visited June 22, 2009).</p>'+
                                    '</div>'+
                                    '</div>';

                                var infowindow = new google.maps.InfoWindow({
                                    content: contentString
                                });

                                
                                
                                marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(lat,lng),
                                        map:carte,
                                        draggable:false,
                                        animation: google.maps.Animation.DROP,
                                    });
                                 google.maps.event.addListener(marker, 'click', function() {
                                        infowindow.open(carte,marker);
                                });
                                 
                                //carte.panTo(new google.maps.LatLng(lat,lng));
                                 carte.setCenter(new google.maps.LatLng(lat,lng));
                                
                                
                                
                          
                         
                        },error : function(xhr, status){
                            console.log(status);
                        }
    });
    $('#load').load("../twitter/index.php?"+dataString);
    
    //$('#load2').load("../weather/index.php?"+dataString);
    
    $('#data_wolframe').empty();
    $('#data_wolframe').html('<img id="ajax" src="icones/ajax.gif" width="72" height="72" style="display: none;position:absolute;left:48%;top:50%;" /> ');
    
    $('#data_wolframe').load('../wolfram/wolframe.php?'+dataString);
           
             $('a.close').click();
             //$('#submitButton').click();
      });</script>

    

