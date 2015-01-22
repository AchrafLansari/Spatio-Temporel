$(document).ready(function(){
    
     
    $('.bubblingG').css('display','none');
    
    
    //$('#wolfram').fadeOut(2000);
    
   
   $('#submitButton').click(function(){
       
       
       var requete = $('#s').val();
       var rows = $('#rows').val();
       var dataString="query='"+requete+"'&rows="+rows;
       
       $('.bubblingG').css('display','block');
     
       
       var dataString = 'q='+requete;
      
      
       
       
    
    $.ajax({
                        url: "../europeana/requete/simple.php",
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
    $('#load').load("../twitter/index.php?"+dataString);
    $('#load2').load("../weather/index.php?"+dataString);
    $('#data_wolframe').load('../wolfram/wolframe.php?'+dataString);
    $('#wolfram').fadeIn(2000);
    
      
    
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


