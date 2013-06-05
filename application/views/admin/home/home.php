<!DOCTYPE>
    <html>
        <head>
            <title>Admin Mahabodhi</title>
            <link href="<?php echo base_url().'style/admin-style.css'; ?>" rel="stylesheet" type="text/css" />
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
                        Hello!
                    </div>
                    <div class="content-area" style="margin-top: 8px;">
                        This is your admin page. Use this page to control all your videos and add new ones.<br/>
                        <br/>
                        You can also see all user's description and block them.
                        <br/>
                        <br/>
                        For more information consult with us:<br/>
                        Pahiro Incorporation<br/>
                        Damkal Chowk, Lalitpur<br/>
                        Contact: (+977) - 01 - 4000000<br/>
                        <br/>
                        
                        <h3>Have a Good Day</h3>
                    </div>
                </div>
                <div class="content" id="search-video">
                    <div class="content-title">
                        Search Video:
                    </div>
                    <div class="content-area" style="margin-top: 8px;">
                            <form name="search_form" method="post" action="#" id="search-form">
                                <input type='text' name="search_text" id="search-text" required="true" placeholder="begin from here ... " /><br/>
                                <input type="submit" name="search_submit" id="search-submit" value="Find This"/>
                            </form>
                    </div>
                </div>
            </div>
            <div id="footer-wrap">
                
            </div>
        </body>
    </html>