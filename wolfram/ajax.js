$(document).ready(function(){
   
   $('#valider').click(function(){
         
       var requete = $('#q').val();
       var dataString = 'q='+requete;
      
       $.ajax({
                        type: "POST",
                        url: "wolframe.php",
                        data: dataString,
		    	dataType: 'html',                //data format      
                        success: function(data)          //on recieve of reply
                        {   
                            $('#data_wolframe').html("")    
                            $('#data_wolframe').append(data);    //Set output element html
                        } 
        });
   });
});


