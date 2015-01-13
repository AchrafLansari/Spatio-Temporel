$(document).ready(function(){
    
    var datastring; 
    
    
   
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
                           
                            
                         
      
                            $('#output').html("<b> mot: </b>"+requete+"<b>titre: </b>"+titre+"<b> url: </b>"+url+"<b> poids: </b>"+poids);     //Set output element html
                         
                    
                            
                         
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


