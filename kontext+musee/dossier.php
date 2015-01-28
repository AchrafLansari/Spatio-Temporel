<?php 
session_start();
    $data = array();
    /*if(isset($_SESSION['dossier'])) {
    $url ='../traitement/'.$_SESSION['dossier'];
    }
    else {
        $url = 'images';
    }*/
    if($dossier = opendir('../traitement/'.$_SESSION['dossier'].'/'))
            {
               array_push($data,'');
              while(false !== ($fichier = readdir($dossier)))
                { 
                  
                  if($fichier !='.' && $fichier !='..'  && $fichier !=' '){
                      
                      array_push($data, '../../traitement/'.$_SESSION['dossier'].'/'.$fichier);
                }}
               echo json_encode($data);
            closedir($dossier);
            }else {
          echo 'Le dossier n\' a pas pu �tre ouvert';
        }
        
?>