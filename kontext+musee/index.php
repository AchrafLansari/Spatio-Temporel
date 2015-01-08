<!DOCTYPE html>
<html lang="en">
	<head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <title>Kontext: A context-shift transition inspired by iOS</title>
        	<meta name="description" content="A context-shift transition inspired by iOS. Created using JavaScript, CSS 3D transforms and CSS Animations.">
		<meta name="author" content="Hakim El Hattab">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="css/kontext.css">
		<link rel="stylesheet" href="css/demo.css">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">


                <link rel="stylesheet" >
                 <script src="js/jquery-1.11.1.min.js"></script>	   

                <script src="js/ge1doot.js"></script>
                <script src="js/muse.js"></script>
                <script src="js/imageTransform3D.js"></script>
                
               
	</head>
	<body>
		<article class="kontext">
			<div class="layer one show">
				<h2>Kontext</h2>
				<p>A context-shift transition. Use the dots below or your keyboard arrows.</p>
			</div>
			<?php echo "<div class='layer two'> <h2>  Layer Two </h2> </div>" ?>
			<?php echo "<div class='layer three'><h2> Layer Three"
                        . " </h2></div>" ?>
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
