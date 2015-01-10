$(document).ready(function(){
    
    var datastring; 
    
    $(".images").each(function(){
    datastring = $(this).attr('src')+",";
   
    });
    
   
   $('#valider').click(function(){
       
       
       var requete = $('#requete').val();
       var dataString = 'requete='+requete;
       
       
       
       $.ajax({
                        type: "POST",
                        url: "select.php",
                        data: dataString,
		    	dataType: 'json',                //data format      
                        success: function(data)          //on recieve of reply
                        {   
                           
                            
                         if(data['correction'] != undefined){
                            
                         $('#correction').append(data['correction']); 
                         $('#output').html(" "); 
                        
                         }else {
                             
                            data.forEach(function(entry) {
                             
                             $('#correction').html(" "); 
                            
                            var titre = entry['titre'];
                            var url = entry['url'];           
                            var poids = entry['poids']; 
      
                            $('#output').html("<b> mot: </b>"+requete+"<b>titre: </b>"+titre+"<b> url: </b>"+url+"<b> poids: </b>"+poids);     //Set output element html
                         
                    
                            });   
                         }
                        } 
    });
    
   });
   
   
   
   $('#requete-corpus').bind("enterKey",function(e){
        
        
    });
        
   
    $('#requete-corpus').keyup(function(e){
        if(e.keyCode == 13)
        {
        $(this).trigger("enterKey");
        }   
    });
   
    
});


