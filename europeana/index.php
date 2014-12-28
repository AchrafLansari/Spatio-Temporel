<!DOCTYPE html>
<html>
    <body>
         <div class="input-group input-group-lg" style="margin-top: 100px;margin-left: 350px;width:350px;" >
                <span class="input-group-addon">#</span>
                <input type="text" id="requete" class="form-control" placeholder="Recherche Par Tag">
            </div>
        
        <input id="valider"  class="btn btn-lg btn-success " type="button" value="Valider" style="margin-left:500px;margin-top: 35px;">
<?php
        
        $key = 'wRRkGVyyG';
        $query= "Paris";
        $date_d = "1863";
        $date_f = "2014";
        $path = "http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=".$query."&rows=94";
        $path2 = "http://europeana.eu/api/v2/search.json?wskey=".$key."&query=".$query."&qf=YEAR%3A%5B".$date_d."+TO+".$date_f."%5D&start=1&rows=96&profile=standard";
        
        //search of person  des resultats sans geoposition ni year
        $path3 = "http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=who:Leonardo+da+Vinci";
        
        //http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=mona+AND+lisa a executer au query
        
        // search of place or many with OR like the example : a corriger
        $path4 ="http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=where:(Paris+OR+London)";
        
        // search with latitude + longitude 
        $path5 = "http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=pl_wgs84_pos_lat:[45+TO+47]+AND+pl_wgs84_pos_long:[7+TO+8]";
        
        // search with concatenation
        $path6 = "http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=Westminster&qf=where:London";
        
        // search with image type only 
        $path7 = "http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=Paris&qf=TYPE:IMAGE";
        
        //search with range date 
        $path8 ="http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=timestamp_created:[2013-11-01T00:00:0.000Z+TO+2013-12-01T00:00:00.000Z]";
        
        $json = file_get_contents($path4);
        $parsed_json = json_decode($json,true);
        echo '<br>';
        var_dump($parsed_json);
        
        echo '<br>'.count($parsed_json['items']).'<br>';
        
        foreach ($parsed_json['items'] as $items) {
        
            
        $url_image = explode('?uri=', $items['edmPreview'][0]); 
        $url_image = explode('&size',$url_image[1]); 
       
        //echo 'Total items :'.$items['totalResults'].'<br>';
         
        //echo 'Fournisseurs :'.$items['dataProvider'][0].'<br>'; 
        //echo 'Qualité sur 10 des metadatas :'.$items['completeness'].'<br>';
        //echo 'Lien externes vers l'article :'.$items['guid'].'<br>';
        //echo 'Lien json pour recuperer informations de l'article :'.$items['link'].'<br>';
        //echo 'Liens Copiryght de l'article :'.$items['rights'][0].'<br>';
        //echo 'Type :'.$items['type'].'<br>';
        //echo 'Contexte temporel  array a retravailler :'.$items['edmTimespanLabel'].'<br>';
        
        
        echo $items['id'].'===>'.$items['dcCreator'][0].'===>'.$items['title'][0].'<br>';
        if($items['edmPlaceLatitude'][0] && $items['edmPlaceLongitude'][0]){
        echo $items['edmPlaceLatitude'][0]." , ".$items['edmPlaceLongitude'][0]."<br>";
        echo $items['year'][0];
        }
        //echo '<img src='.$items['edmPreview'][0].'>';    
        echo '<img src='.urldecode($url_image[0]).'>';
        
        }
       echo urldecode("http://europeanastatic.eu/api/image?uri=http%3A%2F%2Ffotothek.slub-dresden.de%2Fthumbs%2Fdf_ge_0015125.jpg");
         
?>        
       
    </body>
</html>
