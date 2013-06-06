<!DOCTYPE>
    <html>
        <head>
            <title>Admin Mahabodhi</title>
            <link href="<?php echo base_url().'style/admin-style.css'; ?>" rel="stylesheet" type="text/css" />
        </head>
        <body>
            <div id="header-wrap">
                <?php include_once "application/views/admin/templates/header.php"; ?>
            </div>
            <div id="sidebar-wrap">
                <?php include_once "application/views/admin/templates/sidebar.php" ?>
            </div>
            <div id="content-wrap">
                <div class="content" id="welcome-content">
                    <div class="content-title">
                        <h3>Add Video</h3>
                    </div>
                    <div class="content-area">
                        <form name="add_video_form" action="<?php echo base_url().'admin/video/save'; ?>" id="add-video-form" method="post">
                                <label for="title">Title:</label>
                                <input type="text" name="title_text" id="title-text" placeholder="enter title here ..."/><br/>
                                <label for="youtube-id">You Tube ID:</label>
                                <input type="text" name="youtube_id_text" id="youtube-id-text" required="true" placeholder="enter you tube id ... "/><br/>
                                <label for="genre">Genre:</label>
                                <input type="text" name="genre_text" id="genre-text" required="true" placeholder="genre of video ... "/><br/>
                                <label for="description">Description:</label>
                                <textarea name="desc_textarea" id="desc-textarea" required="true" placeholder="add description ..."></textarea><br/>
                            <input type="submit" name="add_video_submit" value="Save Video"/>
                        </form>
                    </div>
                </div>
            </div>
            <div id="footer-wrap">
                
            </div>
        </body>
    </html>