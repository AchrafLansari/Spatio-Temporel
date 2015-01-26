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
        $add = array();
     $add = md5($_SERVER['REMOTE_ADDR']);
     echo "IP: $add" . "<br>";
     $k = substr($add, 0 , strlen($add)/2 );
     echo "tableau : " . $k . "<br>";
     
     //$_COOKIE["id_itilisateur"]=$k;
     setcookie ("id_utilisateur", $k, time() - 3600);
     
     if(isset($_COOKIE["id_utilisateur"])) {
     
    echo '<img src="images/image1.jpg" id="imgc" alt="" width="250" height="250" /><br>';
    echo '<img src="images/image2.jpg" id="imgc" alt="" width="250" height="250" /><br>';
    echo '<img src="images/image3.jpg" id="imgc" alt="" width="250" height="250" /><br>';
    echo '<img src="images/image4.jpg" id="imgc" alt="" width="250" height="250" /><br>';
     }
     else {
          mkdir("/" .$k , 0700);
     }
     
     ?>
         
    </body>
</html>