<div id="site_title">
            <a href="<?php echo base_url(); ?>" target="_parent" title="MAHABODHI DOCUMENTRY AND FILM PRODUCTION FOUNDATION"></a>
</div> <!-- end of site_title -->
<div id="newsletter">
            <form name='search_form' action="<?php echo base_url().'search'; ?>" method="post">
                        <label for="search">Search</label>
                        <input type='text' name='search_text' placeholder="title of video..." size="26" required="true">
                        <input type="submit" name="submit_form" value="Go">
            </form>
    
</div>      
<div id="menu">
    <ul>
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url().'aboutus'; ?>">About Us</a></li>
        <li><a href="<?php echo base_url().'donation' ; ?>">Support Us</a></li>
        <li><a href="<?php echo base_url().'foundation' ; ?>">Video</a></li>
        <li><a href="<?php echo base_url().'contactus' ; ?>">Contact Us</a></li>
    </ul>    	
</div> <!-- end of _menu -->