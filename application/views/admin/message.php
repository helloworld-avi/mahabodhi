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
                        <h3>Message</h3>
                    </div>
                    <div class="content-area">
                        <?php print_r($msg); ?>
                    </div>
                </div>
            </div>
            <div id="footer-wrap">
                
            </div>
        </body>
    </html>