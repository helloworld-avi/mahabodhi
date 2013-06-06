<!DOCTYPE>
    <html>
        <head>
            <title>Admin Mahabodhi</title>
            <link href="<?php echo base_url().'style/admin-style.css'; ?>" rel="stylesheet" type="text/css" />
	    <script type="text/javascript">
		var count = 0;
		function showMyData(data){
		    var e = document.getElementById("view-item-img-" + count)
		    e.setAttribute('src', data.entry.media$group.media$thumbnail[0].url);
		    count++;
		}
		
		function editVideo(para){
		    var loc = "http://localhost/mahabodhi/admin/video/edit/" + para;
		    window.location = loc;
		}
		
		function deleteVideo(para){
		    var r = confirm("Are you sure you want to delete this video?");
		    if(r==true){			
			var loc = "http://localhost/mahabodhi/admin/video/delete/" + para;
			window.location = loc;
		    }
		    return;
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
                <div class="content">
		    <div class="content-title">
			This is my content-title
		    </div>
		    <div class="content-area">
			<?php
			$i = 0;
			foreach($videos as $v){
                            foreach($v as $video){
			    ?>
			<div class="view-item-wrap">
			    <table style="width: 100%">
				<tr>
				    <td style="width: 10%">Title:</td>
				    <td><?php echo $video['title']; ?></td>
				    <td rowspan="7" style="width: 30%"><img src="" alt="video goes here" id="view-item-img-<?php echo $i;$i++; ?>"></td>
				</tr>
				<tr>
				    <td>Youtube ID:</td>
				    <td><?php echo $video['y_id']; ?></td>
				</tr>
				<tr>
				    <td>Category:</td>
				    <td><?php echo $video['category']; ?></td>
				</tr>
				<tr>
				    <td>Views:</td>
				    <td><?php echo $video['views']; ?></td>
				</tr>
				<tr>
				    <td>Entry Date:</td>
				    <td><?php echo $video['entry_timestamp']; ?></td>
				</tr>
				<tr>
				    <td colspan="2">Description</td>
				</tr>
				<tr>
				    <td colspan="2"><?php echo $video['description']; ?></td>
				</tr>
				<tr>
				    <td colspan="3" align="right">
					<input type="button" class="edit-btn" value="Edit" onclick="editVideo('<?php echo $video['y_id']; ?>')"/> &nbsp; | &nbsp; <input type="button" class="delete-btn" value="Delete" onclick="deleteVideo('<?php echo $video['y_id']; ?>')"/>
				    </td>
				</tr>
			    </table>			    
			</div>
			<?php
                            }
			}
			?>
		    </div>
                </div>
            </div>
            <div id="footer-wrap">
            </div>
        </body>
	<?php
	foreach($videos as $video){
	    ?>
	    <script type="text/javascript" src="https://gdata.youtube.com/feeds/api/videos/<?php print_r( $video['y_id'] ); ?>?v=2&callback=showMyData&alt=json-in-script"></script>
	<?php
	}
	?>
    </html>