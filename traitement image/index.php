<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title> image </title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        
    </head>
    <body>
        <script>
             $(document).ready(function(){    
              $('#imgc').click(function(){
             alert("image click");});
        });
          
        </script> 
        <?php
     $add = md5($_SERVER['REMOTE_ADDR']);
     $k = substr($add, 0 , strlen($add)/2 );     
     if(isset($_COOKIE["id_utilisateur"])) {
     setcookie ("id_utilisateur", $k, time() - 3600);
     }
     else {
           $file = "./" . $k; 
           if (file_exists($file)) {
            $image = "http://uploads.siteduzero.com/files/192001_193000/192501.png"; 
            
            $current = file_get_contents($image);
            $path = "./" . $k ."/mini.png";  
            file_put_contents($path , $current); 
           }
         else {
            mkdir($file , 0777, true);
            $image = "http://uploads.siteduzero.com/files/192001_193000/192501.png";         
            $current = file_get_contents($image);
            $path = "./" . $k ."/mini.png";  
            file_put_contents($path , $current);
        }         
        
     }
     
     ?>
         
    </body>
</html>