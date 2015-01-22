
  

        
                                
                    <?php
                    $consumer_key='dva9Y9gdPEcVOTVMxtKzwukj1'; //Provide your application consumer key
                    $consumer_secret='F4LFXaglwhNGvoPrjrozo7LXFY3bcarna5fo8lPm0QK5sZqWAb'; //Provide your application consumer secret
                    $oauth_token = '2893405781-ooi2dg0Kma7lqaLM94Q1Y1N8cy3Wl83vhc5hHod'; //Provide your oAuth Token
                    $oauth_token_secret = 'C3g1cpdk1kYt6EBIdqb5BSvyB71sLo09mPooj6CEeQ3m2';
                    ?> 
    
                
            <div id="legende1">  
            <?php
		    if(!empty($consumer_key) && !empty($consumer_secret) && !empty($oauth_token) && !empty($oauth_token_secret)) {
                    require_once('../twitter/twitteroauth/twitteroauth.php');
                    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);
                    $valeur_search = $_GET["q"];
                    $query = 'https://api.twitter.com/1.1/search/tweets.json?q=' . $valeur_search .'&result_type=popular&count=5' ;
                   // echo $query.'<br><br>';
                    $content = $connection->get($query);      
                    
                    }                   
                    echo  '<ul id="legende">';
                            
                    echo '<li class=""><a  title="legende"><img id="twitter_icones" src="../twitter/icones/twitter2.png" />';
                    if(!empty($consumer_key) && !empty($consumer_secret) && !empty($oauth_token) && !empty($oauth_token_secret)) {                        
                            if(!empty($content)){ 
                                
                                foreach($content->statuses as $tweet){
                                 
                                echo '<div id="tweet"> ' . $tweet->text . '</div>';
                               
                                 }}
                        
                    } else {
                        echo'<p>Please update your settings to provide valid credentials</p>';
                    }
                    echo '</a></li>';
                    echo '</ul>';
                ?>
        </div>
                    
             

        <?php
function parseTweet($text) {
    $text = preg_replace('#http://[a-z0-9._/-]+#i', '<a  target="_blank" href="$0">$0</a>', $text); //Link
    $text = preg_replace('#@([a-z0-9_]+)#i', '@<a  target="_blank" href="http://twitter.com/$1">$1</a>', $text); //usernames
    $text = preg_replace('# \#([a-z0-9_-]+)#i', ' #<a target="_blank" href="http://search.twitter.com/search?q=%23$1">$1</a>', $text); //Hashtags
    $text = preg_replace('#https://[a-z0-9._/-]+#i', '<a  target="_blank" href="$0">$0</a>', $text); //Links
    return $text;
}
?>
        <script type="text/javascript">
            $(function() {
               
                    
                   $('#legende a').stop().animate({'marginLeft':'100px'},500);

                $('#legende > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-450px'},1000);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'100px'},1000);
                    }
                );

});
        </script>
    