<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Intégration API Twitter 1.1 | NOE interactive</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="skinNoe/skin.css" />

<meta name='robots' content='noindex,nofollow' />
<link rel='stylesheet' id='demo-css'  href='twitterapi.css' type='text/css' media='all' />

<meta name="description" content="How to use the latest Twitter 1.1 API, by NOE Interactive, by NOE Interactive" />
<meta name="keywords" content="Twitter, oAuth, NOE Interactive, php" />
<link rel="canonical" href="http://noe-interactive.com/demo/!/twitterapi"/>

</head>

<body class="page lang-fr">


          
                <?php
                    $consumer_key='dva9Y9gdPEcVOTVMxtKzwukj1'; //Provide your application consumer key
                    $consumer_secret='F4LFXaglwhNGvoPrjrozo7LXFY3bcarna5fo8lPm0QK5sZqWAb'; //Provide your application consumer secret
                    $oauth_token = '2893405781-ooi2dg0Kma7lqaLM94Q1Y1N8cy3Wl83vhc5hHod'; //Provide your oAuth Token
                    $oauth_token_secret = 'C3g1cpdk1kYt6EBIdqb5BSvyB71sLo09mPooj6CEeQ3m2'; //Provide your oAuth Token Secret
		    if(!empty($consumer_key) && !empty($consumer_secret) && !empty($oauth_token) && !empty($oauth_token_secret)) {
                    require_once('twitteroauth/twitteroauth.php');
                    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);
                    $valeur_search = $_POST["search_valuer"];
                    $query = 'https://api.twitter.com/1.1/search/tweets.json?q=' . $valeur_search .'&result_type=mixed&geocode=48.8534100,2.3488000,1mi&count=1000' ;
                   // echo $query.'<br><br>';
                    $content = $connection->get($query);  
                    var_dump($content);
                    }                   
                    //echo '<br> <h1> Status : </h1> <br>' ;                   
                    if(!empty($consumer_key) && !empty($consumer_secret) && !empty($oauth_token) && !empty($oauth_token_secret)) {                        
                            if(!empty($content)){ foreach($content->statuses as $tweet){
                                echo '
                                <div id="'.$tweet->id_str.'">                                    
                                    <p >'.parseTweet($tweet->text).'</p>
                                </div>
                                ';
                            }}

                            
                    } else {
                        echo'<p>Please update your settings to provide valid credentials</p>';
                    }
                    
function parseTweet($text) {
    $text = preg_replace('#http://[a-z0-9._/-]+#i', '<a  target="_blank" href="$0">$0</a>', $text); //Link
    $text = preg_replace('#@([a-z0-9_]+)#i', '@<a  target="_blank" href="http://twitter.com/$1">$1</a>', $text); //usernames
    $text = preg_replace('# \#([a-z0-9_-]+)#i', ' #<a target="_blank" href="http://search.twitter.com/search?q=%23$1">$1</a>', $text); //Hashtags
    $text = preg_replace('#https://[a-z0-9._/-]+#i', '<a  target="_blank" href="$0">$0</a>', $text); //Links
    return $text;
}
?>


</body>
</html>