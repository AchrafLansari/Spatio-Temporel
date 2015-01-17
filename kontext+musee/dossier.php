<?php 
    $data = array();
    if($dossier = opendir('images/'))
            {
               array_push($data,'');
              while(false !== ($fichier = readdir($dossier)))
                {
                  if($fichier !='.' && $fichier !='..')
                      array_push($data, $fichier);
                }
               echo json_encode($data);
            closedir($dossier);
            }else {
          echo 'Le dossier n\' a pas pu être ouvert';
        }
        
?>