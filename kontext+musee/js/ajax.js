$(document).ready(function(){
    
     
    $('.bubblingG').css('display','none');
    
    
    //$('#wolfram').fadeOut(2000);
    
   
   $('#submitButton').click(function(){
       
       
       var requete = $('#s').val();
       var rows = $('#rows').val();
       var dataString="query='"+requete+"'&rows="+rows;
       
       $('.bubblingG').css('display','block');
     
       
       var dataString = 'q='+$('#s').val()+'';
       dataString = dataString.replace(" ", "+");
      
      
       
       
    
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
                           data.forEach(function(entry) {
                                message = ""+i;
                                i++;
                                $('#output').append(entry["completeness"]+"==>"+entry["image"]+"<br>");     //Set output element html
                                 lat = entry['latitude'];
                                 lng = entry['longitude'];
                                
                                });
                                var infowindow = new google.maps.InfoWindow({
                                    content: message,
                                    size: new google.maps.Size(50,50)
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
    
    $('#load2').load("../weather/index.php?"+dataString);
    $('#data_wolframe').load('../wolfram/wolframe.php?'+dataString);
    
    $('#wolfram').fadeIn(2000);
    
    $('#wolfram').delay(15000).fadeOut(2000);
   
      
    
   });
   
    $('#wolfram').click(function(){
        $('a.poplight[href^=#]').click();
       //alert('test');
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


