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
                    <div class="content-area" style="padding: 8px; width: 100%;alignment-adjust: central;">
                        <form name="item_new_form" action="http://localhost/mahabodhi/admin/gvideo/save" method="post">
                        <table>
                            <tr>
                                <td>Title:</td>
                                <td><input type="text" name="item_title" required="true"/></td>
                            </tr>
                            <tr>
                                <td>You Tube ID:</td>
                                <td><input type="text" name="item_id" required="true"/></td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td>
                                    <select name="item_category" required="true">
                                        <option value=""></option>
                                        <option value="Teaching">Teaching</option>
                                        <option value="Meditation">Meditation</option>
                                        <option value="Pilgrimage">Pilgrimage</option>
                                        <option value="Workshop">Workshop</option>
                                        <option value="Event">Event</option>
                                        <option value="Biography">Biography</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Description</td>
                            </tr>
                            <tr>
                                <td colspan="2"><textarea name="item_dex" required="true"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="item_smt">
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
            <div id="footer-wrap">
                
            </div>
        </body>
    </html>