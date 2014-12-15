<?php
        
        $key = 'wRRkGVyyG';
        $query= "Paris";
        $date_d = "2000";
        $date_f = "2014";
        $path = "http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=".$query;
        $path2 = "http://europeana.eu/api/v2/search.json?wskey=".$key."&query=".$query."&qf=YEAR%3A%5B".$date_d."+TO+".$date_f."%5D&start=1&rows=24&profile=standard";
        
        $json = file_get_contents($path2);
        $parsed_json = json_decode($json,true);
        
        var_dump($parsed_json);
        
        echo '<br>'.count($parsed_json['items']).'<br>';
        
        foreach ($parsed_json['items'] as $items) {
            
        echo $items['id'].'===>'.$items['dcCreator'][0].'===>'.$items['title'][0].'<br>';
        echo '<img src='.$items['edmPreview'][0].'>';    
        }
?>