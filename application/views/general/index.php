<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
<title>General Video</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url().'style/style.css'; ?>" rel="stylesheet" type="text/css" />
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
                            <div class="content_box1">
                                <div id="foundation_lft">
                                    <?php
                                        include "application/views/general/general_lft.php";
                                    ?>
                                </div>
                                <div id="foundation_rit">
                                    <?php
                                        include "application/views/general/general_rit.php";
                                    ?>
                                </div>
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
</html>