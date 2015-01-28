$(document).ready(function(){
   
    
    $('.bubblingG').css('display','none');
   
    
       
       
    
        
   
   $('#submitButton').click(function(){
       
       
       var requete = $('#s').val();
       var rows = $('#rows').val();
       var dataString="query='"+requete+"'&rows="+rows;
       
       $('.bubblingG').css('display','block');
     
       
       var dataString = 'q='+$('#s').val()+'';
       for(i=0;i<dataString.length;i++){
           dataString = dataString.replace(" ","+");
       }
       
      
      
       
       
    
    $.ajax({
                        url: "../europeana/requete/simple.php",
                        type: "POST",
                        dataType: 'json',
                        data: { query : $('#s').val(),
                                rows : rows
                              },
                        success: function(data)          //on recieve of reply
                        {   
                           //console.log('Response received : '+data["completeness"]);
                           //setAllMap(null);
                           $('.bubblingG').css('display','none');
                            var message;
                            var lng,lat;  
                            var textimage;
                           data.forEach(function(entry) {
                                message = ""+i;
                                i++;
                                $('#output').append(entry["completeness"]+"==>"+entry["image"]+"<br>");     //Set output element html
                                 lat = entry['latitude'];
                                 lng = entry['longitude'];
                                 if(entry["image"]!="undefined") {
                                  textimage +=  '<img class="img_europena" src="'+ entry["image"] +'" alt="image europeana" height="150" width="150">  <img src="icones/telecharger.png" alt="telecharger" title="telecharger" height="32" width="32"/><br> ';
                                    }
                               });
                                
                                    var contentString = '<div id="content">'+
                                    '<div id="siteNotice">'+
                                    '</div>'+
                                    '<h1 id="firstHeading" class="firstHeading">Europeana search</h1> <br><br>'+
                                    '<div id="bodyContent" style="color:#000000;">'+                                   
                                    textimage +    
                                    '(last visited June 22, 2009).</p>'+
                                    '</div>'+
                                    '</div>';

                                var infowindow = new google.maps.InfoWindow({
                                    content: contentString
                                });

                                
                                
                                marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(lat,lng),
                                        map:carte,
                                        draggable:false,
                                        animation: google.maps.Animation.DROP,
                                    });
                                 google.maps.event.addListener(marker, 'click', function() {
                                        infowindow.open(carte,marker);
                                });
                                 
                                //carte.panTo(new google.maps.LatLng(lat,lng));
                                 carte.setCenter(new google.maps.LatLng(lat,lng));
                                
                                
                                
                          
                         
                        },error : function(xhr, status){
                            console.log(status);
                        }
    });
    
    $('#load').load("../twitter/index.php?"+dataString);
    
    //$('#load2').load("../weather/index.php?"+dataString);
    
    $('#data_wolframe').empty();
    $('#data_wolframe').html('<img id="ajax" src="icones/ajax.gif" width="72" height="72" style="display: none;position:absolute;left:48%;top:50%;" /> ');
    
    $('#data_wolframe').load('../wolfram/wolframe.php?'+dataString);
    
    $('#wolfram').fadeIn(2000);
    
    $('#wolfram').delay(15000).fadeOut(2000);
   
      
    
   });
   
    $('#wolfram').click(function(){
        flag = false;
        $('a.poplight[href^=#]').click();
        
       
    });
    
    $('#generateur').click(function(){
       flag = true;
       $('a.poplight[href^=#]').click();
          
    });
    $('#actualiser').click(function(){
            $('.btn_close').css('display','none'); 
            $('a.poplight[href^=#]').click();
            
    });
    
    $('a.poplight[href^=#]').click(function() {
                        
                        if(flag == true){
                            $('#data_wolframe').load('../wikipedia/index.php');
                            $('#actualiser').css('display','block');  
                        }else {
                           // $('#data_wolframe').empty();
                            //$('#data_wolframe').html('<img id="ajax" src="icones/ajax.gif" width="72" height="72" style="display: none;position:absolute;left:48%;top:50%;" /> ');
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
            
            
   
   /*$('#requete-corpus').bind("enterKey",function(e){
        
        
    });
        
   
    $('#requete-corpus').keyup(function(e){
        if(e.keyCode == 13)
        {
        $(this).trigger("enterKey");
        }   
    });*/
   
    
});


