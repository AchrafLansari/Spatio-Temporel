<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


    
        <ul id="navigation">
            <li class="home"><a title="Weather"> <div id="weather"></div> </a></li>  
        </ul>


<script src="../weather/script/freeAPI.js" type="text/javascript"></script>
<script src="../weather/script/weather.js" type="text/javascript"></script>
<script type="text/javascript">

    var resultContainer = $('#weather');
    var output = '';

    $(document).ready(function () {
        
       GetLocalWeather('<?php echo $_GET["q"]; ?>');
         
        
    });
</script>
<script type="text/javascript">
            $(function() {
                
                $('#navigation').delay(10000).hide(500);
                
                $('#navigation a').stop().animate({'marginTop':'-90px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginTop':'-60px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginTop':'-90px'},200);
                    }
                );
                    
                                   
            });
        </script>
