<!DOCTYPE html>
<a href="index.php"></a>

<html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />  
    </head>
    <body>
            <div class="input-group input-group-lg" style="margin-top: 100px;margin-left: 350px;width:350px;" >
                <span class="input-group-addon">#</span>
                <input type="text" id="requete" class="form-control" placeholder="Recherche Par Tag">
            </div>
            <select name="select" id="rows">
                <option value="12">12</option> 
                <option value="24" selected>24</option>
                <option value="36">36</option>
                <option value="48">48</option>
                <option value="96">96 </option>
            </select>
        
        
        <input id="valider"  class="btn btn-lg btn-success " type="button" value="Valider" style="margin-left:500px;margin-top: 35px;">
<?php
        /*
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
        $path5 = "http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=pl_wgs84_pos_lat:[45+TO+47]+AND+pl_wgs84_pos_long:[7+TO+8]";
        
        // search with concatenation
        $path6 = "http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=Westminster&qf=where:London";
        
        // search with image type only 
        $path7 = "http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=Paris&qf=TYPE:IMAGE";
        
        //search with range date 
        $path8 ="http://www.europeana.eu/api/v2/search.json?wskey=".$key."&query=timestamp_created:[2013-11-01T00:00:0.000Z+TO+2013-12-01T00:00:00.000Z]";
        
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
        //echo $parsed_json_record['places']; // si il a un tableau de places veut dire qu'il est géolocalisable 
        //echo $parsed_json_record['latitude']; // il faut récuperer la latitude
        //echo $parsed_json_record['longitude']; // il faut récuperer la longitude
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
       
              //Note il faut voir la possibilités de récuperer le contenu des types textes 
*/
?>      
        <style>
            .bubblingG {
            text-align: center;
            width:250px;
            height:156px;
            }

            .bubblingG span {
            display: inline-block;
            vertical-align: middle;
            width: 31px;
            height: 31px;
            margin: 78px auto;
            background: #000000;
            -moz-border-radius: 157px;
            -moz-animation: bubblingG 1.2s infinite alternate;
            -webkit-border-radius: 157px;
            -webkit-animation: bubblingG 1.2s infinite alternate;
            -ms-border-radius: 157px;
            -ms-animation: bubblingG 1.2s infinite alternate;
            -o-border-radius: 157px;
            -o-animation: bubblingG 1.2s infinite alternate;
            border-radius: 157px;
            animation: bubblingG 1.2s infinite alternate;
            }

            #bubblingG_1 {
            -moz-animation-delay: 0s;
            -webkit-animation-delay: 0s;
            -ms-animation-delay: 0s;
            -o-animation-delay: 0s;
            animation-delay: 0s;
            }

            #bubblingG_2 {
            -moz-animation-delay: 0.36s;
            -webkit-animation-delay: 0.36s;
            -ms-animation-delay: 0.36s;
            -o-animation-delay: 0.36s;
            animation-delay: 0.36s;
            }

            #bubblingG_3 {
            -moz-animation-delay: 0.72s;
            -webkit-animation-delay: 0.72s;
            -ms-animation-delay: 0.72s;
            -o-animation-delay: 0.72s;
            animation-delay: 0.72s;
            }

            @-moz-keyframes bubblingG {
            0% {
            width: 31px;
            height: 31px;
            background-color:#000000;
            -moz-transform: translateY(0);
            }

            100% {
            width: 75px;
            height: 75px;
            background-color:#FFFFFF;
            -moz-transform: translateY(-66px);
            }

            }

            @-webkit-keyframes bubblingG {
            0% {
            width: 31px;
            height: 31px;
            background-color:#000000;
            -webkit-transform: translateY(0);
            }

            100% {
            width: 75px;
            height: 75px;
            background-color:#FFFFFF;
            -webkit-transform: translateY(-66px);
            }

            }

            @-ms-keyframes bubblingG {
            0% {
            width: 31px;
            height: 31px;
            background-color:#000000;
            -ms-transform: translateY(0);
            }

            100% {
            width: 75px;
            height: 75px;
            background-color:#FFFFFF;
            -ms-transform: translateY(-66px);
            }

            }

            @-o-keyframes bubblingG {
            0% {
            width: 31px;
            height: 31px;
            background-color:#000000;
            -o-transform: translateY(0);
            }

            100% {
            width: 75px;
            height: 75px;
            background-color:#FFFFFF;
            -o-transform: translateY(-66px);
            }

            }

            @keyframes bubblingG {
            0% {
            width: 31px;
            height: 31px;
            background-color:#000000;
            transform: translateY(0);
            }

            100% {
            width: 75px;
            height: 75px;
            background-color:#FFFFFF;
            transform: translateY(-66px);
            }

            }

            </style>
            <div class="bubblingG">
            <span id="bubblingG_1">
            </span>
            <span id="bubblingG_2">
            </span>
            <span id="bubblingG_3">
            </span>
            </div>        
        <div id="output"></div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
        <script src="ajax.js"></script>
    </body>
</html>
