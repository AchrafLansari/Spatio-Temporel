
<?php
        
        $key = 'wRRkGVyyG';
        $query= $_POST['query'];
        $rows= $_POST['rows'];
        
        
        if($_POST){
            
        $path = "http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=".$query."&rows=".$rows;
           
        $json = file_get_contents($path);
        $parsed_json = json_decode($json,true);
        
        
        
        if($parsed_json != NULL && $parsed_json['itemsCount'] != 0){
            
        
           
            
        echo '<br>';
        //var_dump($parsed_json);
        
        
        echo '<br>'.count($parsed_json['items']).'<br>';
        
        foreach ($parsed_json['items'] as $items) {
            
        $record_path = "http://europeana.eu/api/v2/record".$items['id'].".json?wskey=".$key."&profile=full";
        $json_record = file_get_contents($record_path);
        $parsed_json_record = json_decode($json_record,true);  
        
        //var_dump($parsed_json_record);
        
        //echo $parsed_json_record['edmCountry']; // country
        //echo $parsed_json_record['edmLanguage'][0]; // language a confirmer
        //echo $parsed_json_record['places']; // si il a un tableau de places veut dire qu'il est g�olocalisable 
        //echo $parsed_json_record['latitude']; // il faut r�cuperer la latitude
        //echo $parsed_json_record['longitude']; // il faut r�cuperer la longitude
        //echo $parsed_json_record['timespans']; // si il a timespans veut dire qu'il a une d�but de p�riode et une fin :
        //echo $parsed_json_record['begin']; // il faut r�cuperer le d�but
        //echo $parsed_json_record['end']; // il faut r�cup�rer la fin
            
        
        if(isset($items['edmPreview'][0])){    
        $url_image = explode('?uri=', $items['edmPreview'][0]); 
        $url_image = explode('&size',$url_image[1]); 
        }
        //echo 'Total items :'.$items['totalResults'].'<br>';
         
        //echo 'Fournisseurs :'.$items['dataProvider'][0].'<br>'; 
        
        //echo 'Lien externes vers l'article :'.$items['guid'].'<br>';
        //echo 'Lien json pour recuperer informations de l'article :'.$items['link'].'<br>';
        //echo 'Liens Copiryght de l'article :'.$items['rights'][0].'<br>';
        
        //echo 'Contexte temporel  array a retravailler :'.$items['edmTimespanLabel'].'<br>';
        
        //echo 'Qualit� sur 10 des metadatas :';
        echo $items['completeness'].'<br>';
        echo $items['type'].'<br>';
        echo $items['id'].'<br>';
        
        if(isset($items['dcCreator'][0])){echo  $items['dcCreator'][0].'<br>';}
        
        echo ($items['title'][0]).'<br>';
        
        if(isset($items['edmPlaceLatitude'])){
        if($items['edmPlaceLatitude'][0] != '0.0' && $items['edmPlaceLongitude'][0] !='0.0' ){
        echo $items['edmPlaceLatitude'][0]." , ".$items['edmPlaceLongitude'][0]."<br>";
        }
        }
        
        if(isset($items['year'][0])){echo $items['year'][0];}
        
        echo "<br><br>";
        
        
        //echo '<img  width="50px" height="50px" src='.$items['edmPreview'][0].'>';    
        echo '<img  class="images" width="250px" height="250px"  src='.urldecode($url_image[0]).'>';
        
        }
        
        }else { 
            echo "Recherche Introuvable"; 
        }
        }
              //Note il faut voir la possibilit�s de r�cuperer le contenu des types textes 

?>      
        