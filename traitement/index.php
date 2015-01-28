

        <?php
        if($_POST)
        {
            session_start();
            
            $src = $_POST['src'] ;
            
     $add = md5($_SERVER['REMOTE_ADDR']);
     $k = substr($add, 0 , strlen($add)/2 );
     $_SESSION['dossier'] = $k;
     if(isset($_COOKIE["id_utilisateur"])) {
     setcookie ("id_utilisateur", $k, time() - 3600);
     }
     else {
           $file = "./" . $k; 
           if (file_exists($file)) {
            $image = $src; 
            var_dump($image);
            $current = file_get_contents($image);
            $rand = rand(0,1000);
            $path = "./" . $k ."/image".$rand .".jpg"; 
            
            file_put_contents($path , $current); 
           }
         else {
            mkdir($file , 0777, true);
            $image = $src;         
            $current = file_get_contents($image);
            $rand = rand(0,1000);
            $path = "./" . $k ."/image".$rand .".jpg";  
            file_put_contents($path , $current);
        }         
        
     }
}
     ?>
