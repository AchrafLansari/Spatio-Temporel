$(document).ready(function(){
    
     
    $('.bubblingG').css('display','none');
    
   
   $('#valider').click(function(){
       
       
       var requete = $('#requete').val();
       var rows = $('#rows').val();
       var dataString="query='"+requete+"'&rows="+rows;
       
       $('.bubblingG').css('display','block');
       
       $.ajax({
                        url: "requete/simple.php",
                        type: "POST",
                        dataType: 'json',
                        data: { query : requete,
                                rows : rows
                              },
                        success: function(data)          //on recieve of reply
                        {   
                           //console.log('Response received : '+data["completeness"]);
                           $('.bubblingG').css('display','none'); 
                           data.forEach(function(entry) {
                                
                                $('#output').append(entry["completeness"]+"==>"+entry["image"]+"<br>");     //Set output element html
                          });
                            
                            
                            
                    
                            
                         
                        },error : function(xhr, status){
                            console.log(status);
                        }
    });
    
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


