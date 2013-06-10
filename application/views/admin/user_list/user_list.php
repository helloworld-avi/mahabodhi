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
                        Users:
                    </div>
                    <div class="content-area" style="margin-top: 8px;">
                           <p><?php foreach($users as $row){
                                ?>
                                    <td> <?php echo $row['username']; ?> </td>   
                                    <td> <?php echo $row['first_name'];  
                                                echo $row['middle_name']; 
                                                echo $row['last_name']; ?></td>
                                    <td> <?php echo $row['email']; ?> </td>
                                    <td><?php   echo anchor("admin/delete_user/".$row['id'],'delete');?></td>
                                     <?php  if($row['blocked']==0){
                                        ?>
                                                <td><?php   echo anchor("admin/block_user/".$row['id'],'block');
                                            }
                                                       
                                            else{
                                        
                                                echo anchor("admin/unblock_user/".$row['id'],'unblock');
                                            }
                                                        ?></td>
                                    
                                     <?php echo '<br/>';
                                     }
                                     ?>
                           </p>
                    </div>
                </div>
         <!--   <div class="content" id="search-video">
                    <div class="content-title">
                        Search Video:
                    </div>
                    <div class="content-area" style="margin-top: 8px;">
                            <form name="search_form" method="post" action="http://localhost/mahabodhi/admin/video/search/" id="search-form">
                                <input type='text' name="search_text" id="search-text" required="true" placeholder="begin from here ... " /><br/>
                                <input type="submit" name="search_submit" id="search-submit" value="Find This"/>
                            </form>
                    </div>
                </div>
        -->
            </div>
            <div id="footer-wrap">
                
            </div>
        </body>
    </html>