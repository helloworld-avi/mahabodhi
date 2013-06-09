<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
<title>Foundation Video</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url().'style/style-other.css'; ?>" rel="stylesheet" type="text/css" />
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
                            <div class="content_box">
				<div id="uzer">
				    <div id="donation1">
					<div ><h1 align="center">Login</h1></div>
					<form action="#" name="login">
					    <div id="uzer_1"><input type="text" class="uzer1" placeholder="username" required="TRUE" ></div>
					    <div id="uzer_1"><input type="text" class="uzer1" placeholder="password" required="TRUE"></div>
					    <div id="don_2"><a class="button float_r getstart" href="#">Sign In</a></div>
					    <div id="don_3"><a class="button float_r" href="#"> Register</a></div>
					</form>
				    </div>
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