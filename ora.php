<link rel="stylesheet" href="https://cdn.fluidplayer.com/v2/current/fluidplayer.min.css" type="text/css"/>
<script src="https://cdn.fluidplayer.com/v2/current/fluidplayer.min.js"></script>

<body style="margin:0;padding:0;">
										
<video style="background:#000000;" id="videotv" width="100%" playsinline autoplay  muted >
	<source src="https://live1.mediadesk.al/oratv.php" type="application/x-mpegURL">
</video>
											
							
<script>
var player1=fluidPlayer(
		    'videotv',
		    {
		        layoutControls: {
		            fillToContainer: true,
		            autoplay:false
		        }
		    }
		);
</script>	
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6d734b0a4e1a1c43","token":"8f1ec4ffb4ff44b58606f75834f1fced","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
