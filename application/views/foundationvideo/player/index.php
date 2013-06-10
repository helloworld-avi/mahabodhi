<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
<title>Foundation Video</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url().'style/style-other.css'; ?>" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- start of wrapper -->
	<div id="wrapper">
		<!-- start of header -->
		<div id="header">
		    <?php
			include_once "application/views/templates/header.php";
		    ?>
			<div class="cleaner">
				
			</div>
		
		</div>
		<!-- end of header -->
	    
		<div id="main">
			
                        <!-- start of content -->
			<div id="content">
                            <!-- start of content box -->
                            <div class="content_box">
                                <div id="player">ds</div>
				<?php
                                        include "application/views/foundationvideo/player/player_list.php";
                                ?>
                           </div>
                            <!-- end of cnontent box -->
                        </div>
		       <!--end of content -->
		</div>
		<!-- end of main -->
		
		<!-- start of footer -->
                <div class="cleaner">
				
			</div> 
		<div id="footer">
		    <?php
			include "application/views/templates/footer.php";
		    ?>
		</div>
		<!-- end of footer -->
	</div>
	<!-- end of wrapper -->
	<script>
	  // 2. This code loads the IFrame Player API code asynchronously.
	  var tag = document.createElement('script');
    
	  tag.src = "https://www.youtube.com/iframe_api";
	  var firstScriptTag = document.getElementsByTagName('script')[0];
	  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	  
	  var path = window.location.pathname;
	  var y_id = path.split('/');
	  // 3. This function creates an <iframe> (and YouTube player)
	  //    after the API code downloads.
	  var player;
	  function onYouTubeIframeAPIReady() {
	    player = new YT.Player('player', {
	      height: '390',
	      width: '640',
	      videoId: y_id[5],
	      events: {
		'onReady': onPlayerReady,
		'onStateChange': onPlayerStateChange
	      }
	    });
	  }
    
	  // 4. The API will call this function when the video player is ready.
	  function onPlayerReady(event) {
	    event.target.playVideo();
	  }
    
	  // 5. The API calls this function when the player's state changes.
	  //    The function indicates that when playing a video (state=1),
	  //    the player should play for six seconds and then stop.
	  var done = false;
	  function onPlayerStateChange(event) {
	    if (event.data == YT.PlayerState.PLAYING && !done) {
	      setTimeout(stopVideo);
	      done = true;
	    }
	  }
	  function stopVideo() {
	    player.stopVideo();
	  }
	</script>	
</html>