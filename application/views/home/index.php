<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
<title>MAHABODHI DOCUMENTRY AND FILM PRODUCTION FOUNDATION</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
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
			
			<!-- start of intro -->
			<div id="intro">
			<?php
			    include 'content1.php';
			?>
			</div>
			<!-- end of intro -->
		    
			<!-- start of content -->
			<div id="content">
			<!-- start of content box -->
			<div class="content_box">
			    <?php
				include 'content2.php';
			    ?>
		       </div>
			<!-- end of cnontent box -->
			
			<!-- start of content box -->
			<div class="content_box">
			    <?php
				include 'content3.php';
			    ?>
			</div>
			<!-- end of a content box -->
		       
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