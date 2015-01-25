<!DOCTYPE html>
<html lang="en">
	<head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <title>Navigateur Spatio temporelle</title>
        	
		<link rel="stylesheet" href="css/kontext.css">
                <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/demo.css">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">


                <link rel="stylesheet" >
                 <script src="js/jquery-1.11.1.min.js"></script>	   

                <script src="js/ge1doot.js"></script>
                <script src="js/muse.js"></script>
                <script src="js/imageTransform3D.js"></script>
                
                <script type="text/javascript" src="https://maps-api-ssl.google.com/maps/api/js?v=3.4&sensor=true"></script> 
                <script src="js/timeline-api.js" type="text/javascript"></script>
                <script src="js/timeline.js" type="text/javascript"></script>
                <script src="js/labellers.js" type="text/javascript"></script>
                <script src="js/timeline_002.js" type="text/javascript"></script>
                <script src="js/labellers_002.js" type="text/javascript"></script>
                <script src="js/date.js" type="text/javascript"></script> 
                <script src="js/popup.js" type="text/javascript"></script> 
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
                <script src="script.js"></script>
                <script src="js/ajax.js" type="text/javascript"></script>
                
                <style>
                    .style-1 input[type="text"] {
                        padding: 10px;
                        border: solid 1px #dcdcdc;
                        transition: box-shadow 0.3s, border 0.3s;
                      }
                      .style-1 input[type="text"]:focus,
                      .style-1 input[type="text"].focus {
                        border: solid 1px #707070;
                        box-shadow: 0 0 5px 1px #969696;
                      }
                </style>   
                
               
	</head>
	<body onload="initialisation();setupTimeline();">
		<article class="kontext">
			<div class="layer one show">
				
                                <div id="map">  </div>
                                <div id="container2"><!-- Website stuff goes in here -->  
    
<div class="timeline-container" id="timeline" style="width:85%; height:100px; border:1px solid black; margin-left:0.5%">
        <div style="top: 35px; left: -1em;" class="timeline-band-input">
            <input type="text"></div>
       <div style="top: 0px; height: 71.4px; left: -2404px; width: 6010px;" class="timeline-band">
           <div class="timeline-band-inner">
               <div style="z-index: 0;" class="timeline-band-layer">
                   <div name="ether-background" style="cursor: grab; background: none repeat scroll 0% 0% rgb(238, 238, 238);" class="timeline-band-layer-inner"></div>
                   
               </div>
               <div style="z-index: 100;" class="timeline-band-layer">
                   <div name="ether-markers" style="cursor: grab; display: block;" class="timeline-band-layer-inner">
                       <div class="timeline-ether-marker-bottom" style="position: absolute; left: -79px; bottom: 0px;">mar 2</div>
                       <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1px; bottom: 0px;">mar 9</div>
                       <div class="timeline-ether-marker-bottom" style="position: absolute; left: 81px; bottom: 0px;">mar 16</div>
                       <div class="timeline-ether-marker-bottom" style="position: absolute; left: 161px; bottom: 0px;">mar 23</div>
                       <div class="timeline-ether-marker-bottom" style="position: absolute; left: 241px; bottom: 0px;">mar 30</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 321px; bottom: 0px;">avr 6</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 401px; bottom: 0px;">avr 13</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 481px; bottom: 0px;">avr 20</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 561px; bottom: 0px;">avr 27</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 641px; bottom: 0px;">mai 4</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 721px; bottom: 0px;">mai 11</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 801px; bottom: 0px;">mai 18</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 881px; bottom: 0px;">mai 25</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 961px; bottom: 0px;">jui 1</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1041px; bottom: 0px;">jui 8</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1121px; bottom: 0px;">jui 15</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1201px; bottom: 0px;">jui 22</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1281px; bottom: 0px;">jui 29</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1361px; bottom: 0px;">jui 6</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1441px; bottom: 0px;">jui 13</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1521px; bottom: 0px;">jui 20</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1601px; bottom: 0px;">jui 27</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1681px; bottom: 0px;">aou 3</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1761px; bottom: 0px;">aou 10</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1841px; bottom: 0px;">aou 17</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 1921px; bottom: 0px;">aou 24</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2001px; bottom: 0px;">aou 31</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2081px; bottom: 0px;">sep 7</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2161px; bottom: 0px;">sep 14</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2241px; bottom: 0px;">sep 21</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2321px; bottom: 0px;">sep 28</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2401px; bottom: 0px;">oct 5</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2481px; bottom: 0px;">oct 12</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2561px; bottom: 0px;">oct 19</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2641px; bottom: 0px;">oct 26</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2721px; bottom: 0px;">nov 2</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2801px; bottom: 0px;">nov 9</div>
                   <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2881px; bottom: 0px;">nov 16</div>
               <div class="timeline-ether-marker-bottom" style="position: absolute; left: 2961px; bottom: 0px;">nov 23</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3041px; bottom: 0px;">nov 30</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3121px; bottom: 0px;">dec 7</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3201px; bottom: 0px;">dec 14</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3281px; bottom: 0px;">dec 21</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3361px; bottom: 0px;">dec 28</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3441px; bottom: 0px;">jan 4</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3521px; bottom: 0px;">jan 11</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3601px; bottom: 0px;">jan 18</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3681px; bottom: 0px;">jan 25</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3761px; bottom: 0px;">fev 1</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3841px; bottom: 0px;">fev 8</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3921px; bottom: 0px;">fev 15</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4001px; bottom: 0px;">fev 22</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4081px; bottom: 0px;">mar 1</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4161px; bottom: 0px;">mar 8</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4241px; bottom: 0px;">mar 15</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4321px; bottom: 0px;">mar 22</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4401px; bottom: 0px;">mar 29</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4481px; bottom: 0px;">avr 5</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4561px; bottom: 0px;">avr 12</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4641px; bottom: 0px;">avr 19</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4721px; bottom: 0px;">avr 26</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4801px; bottom: 0px;">mai 3</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4881px; bottom: 0px;">mai 10</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4961px; bottom: 0px;">mai 17</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5041px; bottom: 0px;">mai 24</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5121px; bottom: 0px;">mai 31</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5201px; bottom: 0px;">jui 7</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5281px; bottom: 0px;">jui 14</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5361px; bottom: 0px;">jui 21</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5441px; bottom: 0px;">jui 28</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5521px; bottom: 0px;">jui 5</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5601px; bottom: 0px;">jui 12</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5681px; bottom: 0px;">jui 19</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5761px; bottom: 0px;">jui 26</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5841px; bottom: 0px;">aou 2</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5921px; bottom: 0px;">aou 9</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 6001px; bottom: 0px;">aou 16</div></div></div><div style="z-index: 1;" class="timeline-band-layer"><div name="ether-lines" style="cursor: grab; display: block;" class="timeline-band-layer-inner"><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: -90px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: -10px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 70px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 150px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 230px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 310px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 390px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 470px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 550px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 630px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 710px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 790px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 870px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 950px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1030px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1110px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1190px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1270px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1350px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1430px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1510px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1590px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1670px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1750px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1830px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1910px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 1990px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2070px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2150px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2230px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2310px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2390px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2470px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2550px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2630px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2710px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2790px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2870px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 2950px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3030px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3110px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3190px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3270px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3350px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3430px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3510px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3590px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3670px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3750px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3830px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3910px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 3990px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4070px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4150px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4230px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4310px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4390px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4470px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4550px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4630px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4710px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4790px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4870px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 4950px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5030px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5110px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5190px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5270px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5350px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5430px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5510px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5590px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5670px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5750px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5830px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5910px; width: 22px; top: 0px; height: 100%;"></div><div style="position: absolute; background: none repeat scroll 0% 0% rgb(255, 255, 224); opacity: 0.3; left: 5990px; width: 22px; top: 0px; height: 100%;"></div></div></div><div style="z-index: 105;" class="timeline-band-layer"><div name="event-highlights" style="cursor: grab; display: block;" class="timeline-band-layer-inner"></div></div><div style="z-index: 110;" class="timeline-band-layer"><div name="events" style="cursor: grab; display: block;" class="timeline-band-layer-inner"></div></div></div></div><div style="top: 86.4px; left: -1em;" class="timeline-band-input"><input type="text"></div><div style="top: 71.4px; height: 30.6px; left: -2404px; width: 6010px;" class="timeline-band"><div class="timeline-band-inner"><div style="z-index: 0;" class="timeline-band-layer"><div name="ether-background" style="cursor: grab; background: none repeat scroll 0% 0% rgb(221, 221, 221);" class="timeline-band-layer-inner"><div style="position: absolute; background: none repeat scroll 0% 0% white; opacity: 0.5; left: 2903px; width: 204px; top: 2px; height: 27px;" name="ether-highlight"></div></div></div><div style="z-index: 100;" class="timeline-band-layer"><div name="ether-markers" style="cursor: grab; display: block;" class="timeline-band-layer-inner"><div class="timeline-ether-marker-bottom" style="position: absolute; left: -51px; bottom: 0px;">aou</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 9px; bottom: 0px;">sep</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 67px; bottom: 0px;">oct</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 127px; bottom: 0px;">nov</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 185px; bottom: 0px;">dec</div><div class="timeline-ether-marker-bottom-emphasized" style="position: absolute; left: 245px; bottom: 0px;">2011</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 305px; bottom: 0px;">fev</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 359px; bottom: 0px;">mar</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 419px; bottom: 0px;">avr</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 478px; bottom: 0px;">mai</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 538px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 596px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 656px; bottom: 0px;">aou</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 716px; bottom: 0px;">sep</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 774px; bottom: 0px;">oct</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 834px; bottom: 0px;">nov</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 892px; bottom: 0px;">dec</div><div class="timeline-ether-marker-bottom-emphasized" style="position: absolute; left: 952px; bottom: 0px;">2012</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1012px; bottom: 0px;">fev</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1068px; bottom: 0px;">mar</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1128px; bottom: 0px;">avr</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1186px; bottom: 0px;">mai</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1246px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1304px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1364px; bottom: 0px;">aou</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1424px; bottom: 0px;">sep</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1482px; bottom: 0px;">oct</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1542px; bottom: 0px;">nov</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1600px; bottom: 0px;">dec</div><div class="timeline-ether-marker-bottom-emphasized" style="position: absolute; left: 1660px; bottom: 0px;">2013</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1720px; bottom: 0px;">fev</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1774px; bottom: 0px;">mar</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1834px; bottom: 0px;">avr</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1892px; bottom: 0px;">mai</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 1952px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2010px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2070px; bottom: 0px;">aou</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2130px; bottom: 0px;">sep</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2189px; bottom: 0px;">oct</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2249px; bottom: 0px;">nov</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2307px; bottom: 0px;">dec</div><div class="timeline-ether-marker-bottom-emphasized" style="position: absolute; left: 2367px; bottom: 0px;">2014</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2427px; bottom: 0px;">fev</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2481px; bottom: 0px;">mar</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2541px; bottom: 0px;">avr</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2599px; bottom: 0px;">mai</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2659px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2717px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2777px; bottom: 0px;">aou</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2837px; bottom: 0px;">sep</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2895px; bottom: 0px;">oct</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 2955px; bottom: 0px;">nov</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3013px; bottom: 0px;">dec</div><div class="timeline-ether-marker-bottom-emphasized" style="position: absolute; left: 3073px; bottom: 0px;">2015</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3133px; bottom: 0px;">fev</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3187px; bottom: 0px;">mar</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3247px; bottom: 0px;">avr</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3305px; bottom: 0px;">mai</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3365px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3423px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3483px; bottom: 0px;">aou</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3543px; bottom: 0px;">sep</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3601px; bottom: 0px;">oct</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3661px; bottom: 0px;">nov</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3719px; bottom: 0px;">dec</div><div class="timeline-ether-marker-bottom-emphasized" style="position: absolute; left: 3779px; bottom: 0px;">2016</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3839px; bottom: 0px;">fev</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3896px; bottom: 0px;">mar</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 3956px; bottom: 0px;">avr</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4014px; bottom: 0px;">mai</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4074px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4132px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4192px; bottom: 0px;">aou</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4252px; bottom: 0px;">sep</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4310px; bottom: 0px;">oct</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4370px; bottom: 0px;">nov</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4428px; bottom: 0px;">dec</div><div class="timeline-ether-marker-bottom-emphasized" style="position: absolute; left: 4488px; bottom: 0px;">2017</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4548px; bottom: 0px;">fev</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4602px; bottom: 0px;">mar</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4662px; bottom: 0px;">avr</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4720px; bottom: 0px;">mai</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4780px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4838px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4898px; bottom: 0px;">aou</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 4958px; bottom: 0px;">sep</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5016px; bottom: 0px;">oct</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5076px; bottom: 0px;">nov</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5134px; bottom: 0px;">dec</div><div class="timeline-ether-marker-bottom-emphasized" style="position: absolute; left: 5194px; bottom: 0px;">2018</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5254px; bottom: 0px;">fev</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5309px; bottom: 0px;">mar</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5369px; bottom: 0px;">avr</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5427px; bottom: 0px;">mai</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5487px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5545px; bottom: 0px;">jui</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5605px; bottom: 0px;">aou</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5665px; bottom: 0px;">sep</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5723px; bottom: 0px;">oct</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5783px; bottom: 0px;">nov</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5841px; bottom: 0px;">dec</div><div class="timeline-ether-marker-bottom-emphasized" style="position: absolute; left: 5901px; bottom: 0px;">2019</div><div class="timeline-ether-marker-bottom" style="position: absolute; left: 5961px; bottom: 0px;">fev</div></div></div><div style="z-index: 1;" class="timeline-band-layer"><div name="ether-lines" style="cursor: grab; display: block;" class="timeline-band-layer-inner"><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: -51px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 9px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 67px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 127px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 185px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 245px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 305px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 359px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 419px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 478px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 538px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 596px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 656px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 716px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 774px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 834px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 892px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 952px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1012px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1068px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1128px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1186px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1246px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1304px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1364px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1424px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1482px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1542px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1600px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1660px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1720px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1774px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1834px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1892px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 1952px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2010px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2070px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2130px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2189px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2249px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2307px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2367px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2427px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2481px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2541px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2599px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2659px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2717px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2777px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2837px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2895px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 2955px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3013px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3073px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3133px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3187px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3247px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3305px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3365px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3423px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3483px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3543px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3601px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3661px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3719px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3779px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3839px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3896px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 3956px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4014px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4074px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4132px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4192px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4252px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4310px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4370px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4428px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4488px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4548px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4602px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4662px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4720px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4780px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4838px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4898px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 4958px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5016px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5076px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5134px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5194px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5254px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5309px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5369px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5427px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5487px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5545px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5605px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5665px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5723px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5783px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5841px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5901px; width: 1px; top: 0px; height: 100%;"></div><div style="position: absolute; opacity: 0.25; border-left: 1px solid rgb(170, 170, 170); left: 5961px; width: 1px; top: 0px; height: 100%;"></div></div></div><div style="z-index: 105;" class="timeline-band-layer"><div name="event-highlights" style="cursor: grab; display: block;" class="timeline-band-layer-inner"></div></div><div style="z-index: 110;" class="timeline-band-layer"><div name="events" style="cursor: grab; display: block;" class="timeline-band-layer-inner"></div></div></div></div><div class="timeline-message-container"><div style="height: 33px; background: url(&quot;http://simile.mit.edu/timeline/api/images/message-top-left.png&quot;) no-repeat scroll left top transparent; padding-left: 44px;"><div style="height: 33px; background: url(&quot;http://simile.mit.edu/timeline/api/images/message-top-right.png&quot;) no-repeat scroll right top transparent;"></div></div><div style="background: url(&quot;http://simile.mit.edu/timeline/api/images/message-left.png&quot;) repeat-y scroll left top transparent; padding-left: 44px;"><div style="background: url(&quot;http://simile.mit.edu/timeline/api/images/message-right.png&quot;) repeat-y scroll right top transparent; padding-right: 44px;"></div>
                       
                   </div>
               
               </div>
         </div>
     
    <img src='icones/wolframe2.png' width="96px" height="96px" id='wolfram'/>
     <div class="input-list style-1 clearfix" style="width: 90%;position:absolute;">

              <input type="text" id="timeFrom" placeholder=":time From"  style="float:left;margin-left: 8px;width:70px;" />
              <input type="text" id="timeTo" placeholder=":time To"  style="float:right;margin-right: 20px;width:70px;" />

     </div>
    
    
    
</div>
                                <div id='load'></div> 
                                <div id='load2'></div> 
                                <div id='load3'>
                                    
                                    <a href="#?w=700" rel="popup_name" class="poplight" style="display:none" ></a>
        
        
        <div id="popup_name" class="popup_block" style="height: 500px;overflow:scroll;" >
                <h2>Wolfram Search :</h2>
                
                <div id="data_wolframe"> <img id="ajax" src="icones/ajax.gif" width="72" height="72" style="display: none;position:absolute;left:48%;top:50%;" /> </div>
        </div>
                                </div>
                                

                                <div id="container"><!-- Website stuff goes in here -->  
    <form id="searchForm" method="post">
		<fieldset>
        
           	<input id="s" type="text" />    
                 <div class="dropdown">
                    <select id="rows" name="one" class="dropdown-select">
                      <option value="12">12</option> 
                      <option value="24" selected>24</option>
                      <option value="36">36</option>
                      <option value="48">48</option>
                      <option value="96">96 </option>
                    </select>
                  </div>
                              
            <input type="submit" value="Submit" id="submitButton" />
            
            
                        
            <ul class="icons">
                <li class="web" title="Web Search" data-searchType="web">Web</li>
                <li class="images" title="Image Search" data-searchType="images">Images</li>
                <li class="news" title="News Search" data-searchType="news">News</li>
                <li class="videos" title="Video Search" data-searchType="video">Videos</li>
            </ul>
            
        </fieldset>
    </form>
    
    <div class="bubblingG">
            <span id="bubblingG_1">
            </span>
            <span id="bubblingG_2">
            </span>
            <span id="bubblingG_3">
            </span>
    </div>      
    
</div>
<script type="text/javascript">
    

// timeline
var timeline = null;
var eventSource = null;

var totalMilis = 1000;
var currentMilis = totalMilis;
var deltaMilis = 100;
var lastTimer = 1;

function update(thisTimer) {
    
  if (thisTimer == lastTimer) {
    currentMilis = currentMilis - deltaMilis;
    if (currentMilis > 0) {
      setTimeout("update(" + thisTimer + ")", deltaMilis);
    }
    else {
      // alert('actualizar: ' + thisTimer);
      currentMilis = totalMilis;
      lastTimer = 1;
      
    }
  }
}


function setupTimeline() {
  eventSource = new Timeline.DefaultEventSource();
  var bands = [
		Timeline.createBandInfo({
      eventSource:    eventSource,
      width:          "70%",
      intervalUnit:   Timeline.DateTime.WEEK,
      intervalPixels: 80
		}),
		Timeline.createBandInfo({
      eventSource:    eventSource,
      width:          "30%",
      intervalUnit:   Timeline.DateTime.MONTH,
      intervalPixels: 60,
      showEventText:  false,
      trackHeight:    0.4,
      trackGap:       0.2
    })
  ];

  // synchronise bands
  bands[1].syncWith = 0;
  bands[1].highlight = true;
  timeline = Timeline.create(document.getElementById("timeline"), bands);


  for(var i = 0; i < timeline.getBandCount(); i++) {
    timeline.getBand(i).addOnScrollListener(function(band){
      var dFrom;
      var dTo;
      // alert("min/max date: " + band.getMinVisibleDate() + "..." + band.getMaxVisibleDate());
      dFrom = band.getMinVisibleDate();
      document.getElementById("timeFrom").value = dFrom.toString('yyyy-MM-dd');
      // Mon Dec 15 2008 18:42:29 GMT+0100 -> 2008-12-15
      dTo = band.getMaxVisibleDate();
      document.getElementById("timeTo").value = dTo.toString('yyyy-MM-dd');
      lastTimer += 1;
      // update(lastTimer);
      currentMilis = totalMilis;
      setTimeout("update(" + lastTimer + ")", deltaMilis);
    });
  } 
}

/*
addOnScrollListener  ( listener ) 
getMinVisibleDate()
getMaxVisibleDate()
*/

    //]]>
    </script>


<script type="text/javascript">
 
var carte;
function initialisation(){
    // On rentre les coordonnées(latitude, longitude) de notre choix dans une variable
    var maLatlng = new google.maps.LatLng(-25.363882,131.044922);

    // On établit les options de notre choix :
    // la profondeur du zoom, les coordonnées sur lesquelles la carte sera centrée, le type de vue (satellite, plan...)
    var mesOptions = {
       zoom: 3,
       center: maLatlng,
       mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    
    
    
    
    // On crée notre carte en lui passant toutes nos options en paramètre
    carte = new google.maps.Map(document.getElementById("map"), mesOptions);

    google.maps.event.addListener(carte, "dblclick", function (event) { 
               var lat = event.latLng.lat();
               var lng = event.latLng.lng(); 
               $.ajax({
                        url: "../europeana/requete/position.php",
                        type: "POST",
                        dataType: 'json',
                        data: { latitude : parseInt(lat),
                                longitude : parseInt(lng)
                              },
                        success: function(data)          //on recieve of reply
                        {   
                           //console.log('Response received : '+data["completeness"]);
                           $('.bubblingG').css('display','none');
                           setAllMap(null);
                           var i = 0;
                           data.forEach(function(entry) {
                                
                                $('#output').append(entry["completeness"]+"==>"+entry["image"]+"<br>");     //Set output element html
                                
                                var message = ""+i;
                                i++;
                                var infowindow = new google.maps.InfoWindow({
                                    content: message,
                                    size: new google.maps.Size(50,50)
                                });
                                
                                
                                
                                marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(entry['latitude'], entry['longitude']),
                                        map:carte,
                                        draggable:false,
                                        animation: google.maps.Animation.DROP,
                                    });
                                 google.maps.event.addListener(marker, 'click', function() {
                                        infowindow.open(carte,marker);
                                });
                                 
                                
                                
                                
                          });   
                         
                        },error : function(xhr, status){
                            console.log(status);
                        }
            });
               
            });
    
    /*
    // On place un listener sur le marqueur qui contrôle une action qui sera déclenchée lors de l'évènement 'click'
    // Quand on clique sur le marqueur, le zoom de la carte passera à 8
    google.maps.event.addListener(marker, 'click', function(){
       carte.setZoom(8);
    });
    */
}
   
if (navigator.geolocation){
    var watchId = navigator.geolocation.watchPosition(successCallback,
                            null,
                            {enableHighAccuracy:true});}
    else{
      alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");   
    }
    
    function successCallback(position){
      carte.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
        map: carte
      }); 
      
  }
</script>

</div>

                        <div class="layer four"> <canvas style="cursor: pointer;" height="631" width="1366" id="canvas">
                                Your browser does not support the HTML5 canvas element</canvas>
                        </div>
		</article>
	
		<ul class="bullets"></ul>
		

		<script src="js/kontext.js"></script>
		<script>
			// Create a new instance of kontext
			var k = kontext( document.querySelector( '.kontext' ) );


			// API METHODS:

			// k.prev(); // Show prev layer
			// k.next(); // Show next layer
			// k.show( 3 ); // Show specific layer
			// k.getIndex(); // Index of current layer
			// k.getTotal(); // Total number of layers


			// DEMO-SPECIFIC:

			var bulletsContainer = document.body.querySelector( '.bullets' );

			// Create one bullet per layer
			for( var i = 0, len = k.getTotal(); i < len; i++ ) {
				var bullet = document.createElement( 'li' );
				bullet.className = i === 0 ? 'active' : '';
				bullet.setAttribute( 'index', i );
				bullet.onclick = function( event ) { k.show( event.target.getAttribute( 'index' ) ) };
				bullet.ontouchstart = function( event ) { k.show( event.target.getAttribute( 'index' ) ) };
				bulletsContainer.appendChild( bullet );
			}

			// Update the bullets when the layer changes
			k.changed.add( function( layer, index ) {
				var bullets = document.body.querySelectorAll( '.bullets li' );
				for( var i = 0, len = bullets.length; i < len; i++ ) {
					bullets[i].className = i === index ? 'active' : '';
				}
			} );

			document.addEventListener( 'keyup', function( event ) {
				if( event.keyCode === 37 ) k.prev();
				if( event.keyCode === 39 ) k.next();
			}, false );

			var touchX = 0;
			var touchConsumed = false;

			document.addEventListener( 'touchstart', function( event ) {
				touchConsumed = false;
				lastX = event.touches[0].clientX;
			}, false );

			document.addEventListener( 'touchmove', function( event ) {
				event.preventDefault();

				if( !touchConsumed ) {
					if( event.touches[0].clientX > lastX + 10 ) {
						k.prev();
						touchConsumed = true;
					}
					else if( event.touches[0].clientX < lastX - 10 ) {
						k.next();
						touchConsumed = true;
					}
				}
			}, false );

		</script>

		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	</body>
</html>
