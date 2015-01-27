
                    $(function() {
                        var flag="";
                    $('a.poplight[href^=#]').click(function() {
                        
                        if(flag == true){
                            $('#data_wolframe').load('../wikipedia/index.php');
                             $('#actualiser').css('display','block');  
                        }else {
                            $('#ajax').css('display','block');
                             $('#actualiser').css('display','none');
                        }
                    
                    var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
                    var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

                    //R�cup�rer les variables depuis le lien
                    var query= popURL.split('?');
                    var dim= query[1].split('&amp;');
                    var popWidth = dim[0].split('=')[1]; //La premi�re valeur du lien

                    //Faire apparaitre la pop-up et ajouter le bouton de fermeture
                    $('#' + popID).fadeIn().css({
                            'width': Number(popWidth)
                    })
                    .prepend('<a href="#" class="close"><img src="../wolfram/icones/close_pop.png" class="btn_close" title="Fermer" alt="Fermer" /></a>');

                    //R�cup�ration du margin, qui permettra de centrer la fen�tre - on ajuste de 80px en conformit� avec le CSS
                    var popMargTop = ($('#' + popID).height() + 80) / 2;
                    var popMargLeft = ($('#' + popID).width() + 80) / 2;

                    //On affecte le margin
                    $('#' + popID).css({
                            'margin-top' : -popMargTop,
                            'margin-left' : -popMargLeft
                    });

                    //Effet fade-in du fond opaque
                    $('#load3').append('<div id="fade"></div>'); //Ajout du fond opaque noir
                    //Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
                    $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

                    return false;
            });
            
            
           
            //Fermeture de la pop-up et du fond
            $('a.close, #fade').live('click', function() { //Au clic sur le bouton ou sur le calque...
                    $('#fade , .popup_block').fadeOut(function() {
                            $('#fade, a.close').remove();  //...ils disparaissent ensemble
                    });
                    return false;
            });  
            
            
            
           

                        });