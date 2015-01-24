
<?php
        
        $key = 'wRRkGVyyG';
        $query= $_POST['query'];
        //$rows= $_POST['rows'];
        $date_d= $_POST['date_d'];
        $date_f= $_POST['date_f'];
        
        
        if($_POST){
        
        $path = "http://europeana.eu/api/v2/search.json?wskey=".$key."&query=".$query."&qf=YEAR%3A%5B".$date_d."+TO+".$date_f."%5D&start=1&rows=96&profile=standard";
        
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
        
        //var_dump($parsed_json_record);
        
        //echo $parsed_json_record['edmCountry']; // country
        //echo $parsed_json_record['edmLanguage'][0]; // language a confirmer
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
        //echo 'Total items :'.$items['totalResults'].'<br>';
         
        //echo 'Fournisseurs :'.$items['dataProvider'][0].'<br>'; 
        
        //echo 'Lien externes vers l'article :'.$items['guid'].'<br>';
        //echo 'Lien json pour recuperer informations de l'article :'.$items['link'].'<br>';
        //echo 'Liens Copiryght de l'article :'.$items['rights'][0].'<br>';
        
        //echo 'Contexte temporel  array a retravailler :'.$items['edmTimespanLabel'].'<br>';
        
        //echo 'Qualité sur 10 des metadatas :';
        
        
        //<a href="/path/to/image.png" download> image a mettre dans le path image de kontext + musee
        
        
        //if(isset($items['dcCreator'][0])){echo  $items['dcCreator'][0].'<br>';}
        
        //echo ($items['title'][0]).'<br>';
        
        if(isset($items['edmPlaceLatitude'])){
        if($items['edmPlaceLatitude'][0] != '0.0' && $items['edmPlaceLongitude'][0] !='0.0' ){
            
             $data2[$i] = array('completeness'=>$items['completeness'],'type'=>$items['type'],'id'=>$items['id'],'image'=>urldecode($url_image[0]),'latitude'=>$items['edmPlaceLatitude'][0],'longitude'=>$items['edmPlaceLongitude'][0]);
             $i++;
             
        }
        }
        
        
       
        //if(isset($items['year'][0])){echo $items['year'][0];}
        
        //echo "<br><br>";
        
        
        //echo '<img  width="50px" height="50px" src='.$items['edmPreview'][0].'>';    
        //echo '<img  class="images" width="250px" height="250px"  src='.urldecode($url_image[0]).'>';
        
        //array_push($data['image'],urldecode($url_image[0]));
        //$data2[$i] = $data['completeness'][$i];
        
        }
         
        echo json_encode($data2);
        
        }else { 
            echo "Recherche Introuvable"; 
        }
        }
              //Note il faut voir la possibilités de récuperer le contenu des types textes 
?>