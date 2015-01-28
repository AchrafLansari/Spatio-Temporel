
<?php
        
        $key = 'wRRkGVyyG';
        
        
        
        if($_POST){
        
        $query= $_POST['query'];
        $rows= $_POST['rows'];    
        $path = "http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=".$query."&rows=".$rows;
           
        $json = file_get_contents($path);
        $parsed_json = json_decode($json,true);
        
        
        
        if($parsed_json != NULL && $parsed_json['itemsCount'] != 0){
            
        
           
            
        //echo '<br>';
        //var_dump($parsed_json);
        
        
       // echo '<br>'.count($parsed_json['items']).'<br>';
        $data2 =array();
        
        $i=0;
        foreach ($parsed_json['items'] as $items) {
         
       /* $record_path = "http://europeana.eu/api/v2/record".$items['id'].".json?wskey=".$key."&profile=full";
        $json_record = file_get_contents($record_path);
        $parsed_json_record = json_decode($json_record,true);
        */
        
        
        if(isset($parsed_json_record['places']))
        { // si il a un tableau de places veut dire qu'il est géolocalisable 
       // echo $parsed_json_record['latitude']; // il faut récuperer la latitude
       // echo $parsed_json_record['longitude']; // il faut récuperer la longitude
        }
        //echo $parsed_json_record['timespans']; // si il a timespans veut dire qu'il a une début de période et une fin :
        //echo $parsed_json_record['begin']; // il faut récuperer le début
        //echo $parsed_json_record['end']; // il faut récupérer la fin
         
        
        if(isset($items['edmPreview'][0])){    
        $url_image = explode('?uri=', $items['edmPreview'][0]); 
        $url_image = explode('&size',$url_image[1]); 
        }
        
        //echo 'Fournisseurs :'.$items['dataProvider'][0].'<br>'; 
        
        //echo 'Lien externes vers l'article :'.$items['guid'].'<br>';
        //echo 'Lien json pour recuperer informations de l'article :'.$items['link'].'<br>';
        //echo 'Liens Copiryght de l'article :'.$items['rights'][0].'<br>';
        
        //echo 'Contexte temporel  array a retravailler :'.$items['edmTimespanLabel'].'<br>';
        
        
        
        if(isset($items['edmPlaceLatitude'])){
        if($items['edmPlaceLatitude'][0] != '0.0' && $items['edmPlaceLongitude'][0] !='0.0' ){
            
            $data2[$i] = array('completeness'=>$items['completeness'],'type'=>$items['type'],'id'=>$items['id'],'image'=>urldecode($url_image[0]),'latitude'=>$items['edmPlaceLatitude'][0],'longitude'=>$items['edmPlaceLongitude'][0],'titre'=>$items['title'][0],'link'=>$items['guid'],'fournisseur'=>$items['dataProvider'][0]);
             $i++;
             
        }
        }
        
        
       
        //if(isset($items['year'][0])){echo $items['year'][0];}
        
        
        }
         
        echo json_encode($data2);
        
        }else { 
            echo "Recherche Introuvable"; 
        }
        }
              //Note il faut voir la possibilités de récuperer le contenu des types textes 

?>      
        