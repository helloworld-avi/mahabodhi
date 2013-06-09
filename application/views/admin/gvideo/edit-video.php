<!DOCTYPE>
    <html>
        <head>
            <title>Admin Mahabodhi</title>
            <link href="<?php echo base_url().'style/admin-style.css'; ?>" rel="stylesheet" type="text/css" />
	    <script type="text/javascript">
		function showMyData(data){
		    var v = document.getElementById("content-thumbnail");
		    //v.src = data.entry.media$group.media$thumbnail[0].url;
		}
	    </script>
        </head>
        <body>
            <div id="header-wrap">
                <?php include "application/views/admin/templates/header.php"; ?>
            </div>
            <div id="sidebar-wrap">
                <?php include_once "application/views/admin/templates/sidebar.php" ?>
            </div>
            <div id="content-wrap">
                <div class="content" id="welcome-content">
                    <div class="content-title">
                        <h3>Edit Video</h3>
		    </div>
		    <div class="content-area">
			<form name="item_new_form" action="http://localhost/mahabodhi/admin/gvideo/edit-save" method="post">
			<input type="hidden" name="item_id" required="true" value="<?php echo $video[0]['id']; ?>"/>
			<table style="border: 1px solid blue; width: 100%;">
			    <tr>
				<td colspan="2" align="center"><div id="player"></div></td>
			    </tr>
			    <tr>
				<td>Title:</td>
				<td><input type="text" name="item_title" required="true" value="<?php echo $video[0]['title']; ?>"/></td>
			    </tr>
			    <tr>
				<td>Youtube ID:</td>
				<td><input type="text" name="item_y_id" required="true" value="<?php echo $video[0]['y_id']; ?>"/></td>
			    </tr>
			    <tr>
				<td>Category:</td>
				<td><input type="text" name="item_category" required="true" value="<?php echo $video[0]['category']; ?>"/></td>
			    </tr>
			    <tr>
				<td colspan="2">Description</td>
			    </tr>
			    <tr>
				<td colspan="2"><textarea name="item_dex" required="true"><?php echo $video[0]['description']; ?></textarea></td>
			    </tr>
			    <tr>
				<td colspan="2"><input type="submit" name="edit_video_smt"/></td>
			    </tr>
			</table>
			</form>
                    </div>
                </div>
            </div>
            <div id="footer-wrap">
		
            </div>
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
	      setTimeout(stopVideo, 6000);
	      done = true;
	    }
	  }
	  function stopVideo() {
	    player.stopVideo();
	  }
	</script>
        </body>
    </html>