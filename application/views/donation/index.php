<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
<title>Donation</title>
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
		
		</div>
		<!-- end of header -->
	    
		<div id="main">
			
                        <!-- start of content -->
			<div id="content">
                            <!-- start of content box -->
                            <div class="content_box1">
                                <div id="donation">
				    <div id="donation1">
					<div ><h1 align="center">Donate Us</h1></div>
					<div id="don_1">Rs.<input type="text" class="donn" value="50"></div>
					<div id="don_2"><a class="button float_r getstart" href="#"> Bank</a></div>
					<div id="don_3"><a class="button float_r" href="#"> Esewa</a></div>					
				    </div>
				</div>
                           </div>
                            <!-- end of cnontent box -->
                        </div>
		       <!--end of content -->
		</div>
		<!-- end of main -->
		
		<!-- start of footer -->
		<div id="footer">
		    <?php
			include "application/views/templates/footer.php";
		    ?>
		</div>
		<!-- end of footer -->
	</div>
	<!-- end of wrapper -->
</html>